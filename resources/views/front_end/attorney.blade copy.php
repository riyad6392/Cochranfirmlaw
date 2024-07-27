@extends('front_end.main-template')

@section('hero')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center"
        style="background-image: url('{{ asset('front_end_assets/img/attorney_banner.webp') }}'); height:350px">
        <div class="container mt-5">
            <h1>{{ strtoupper($attorney->name) }}</h1>
            <h2>{{ strtoupper($attorney->role) }}</h2>
        </div>
    </section>
    <!-- End Hero -->
@endsection

@section('section')
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container-fluid" style="box-shadow: 0px 2px 2px rgb(0 0 0 / 5%)">
            <div class="row">
                <div class="col-lg-12 d-flex align-items-stretch px-5 under_links sm_under_links mt-3"
                style="border-bottom: 2px solid #c3a43a; padding-top:5px;">
                    <a href="{{ route('home') }}">
                        <h5 style="color: rgb(0, 0, 0)"><b>Home</b></h5>
                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg" height="26" width="26" viewBox="0 0 384 512"
                        style="margin-left: 8px; padding-top:6px; padding-bottom:6px;">
                        <path fill="#9f6e04"
                            d="M3.4 81.7c-7.9 15.8-1.5 35 14.3 42.9L280.5 256 17.7 387.4C1.9 395.3-4.5 414.5 3.4 430.3s27.1 22.2 42.9 14.3l320-160c10.8-5.4 17.7-16.5 17.7-28.6s-6.8-23.2-17.7-28.6l-320-160c-15.8-7.9-35-1.5-42.9 14.3z" />
                    </svg>
                    <h5>{{ $attorney->name }}</h5>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 img-box d-flex justify-content-center align-items-stretch position-relative"
                    style="background: url('{{ asset($attorney->avatar) }}') center no-repeat;  background-size: contain; ">
                    {{-- <img src="{{ asset('front_end_assets/img/sexual_harassment.webp') }}" alt=""> --}}
                    {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a> --}}
                </div>
                <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch px-lg-5">
                    @if ($attorney->about_head_one != '')
                        <div class="px-5" style="align-items: baseline;">
                            <h3>“{{ $attorney->about_head_one ?? 'Attorney' }}</h3>
                            <h3 style="color: rgb(143, 105, 10); margin-left:10px;">
                                {{ $attorney->about_head_two ?? 'Attorney' }}“</h3>
                        </div>
                    @endif
                    <div>
                        <p>{!! strlen($attorney->bio) > 5000 ? substr($attorney->bio, 0, 6500) : $attorney->bio !!}</p>
                    </div>

                    {{-- <a href="{{ route('single.attorney', $attorney->id) }}" style="text-decoration: none; color:#c4a24b; font-weight: 700;">Read More</a> --}}



                    <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" style="text-decoration: none; color:#c4a24b; font-weight: 700;"></a>
                    <button type="" class="btn mt-4" data-toggle="modal" data-target=".bd-example-modal-lg" style="text-decoration: none; color:#c4a24b; font-weight: 700;">Read More</button>
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">

                            <div class="modal-content"
                                style="margin-top: 25px; padding: 100px; height:580px; overflow: auto; ">
                                <div class="modal-footer" style="border: none; padding: 0px; margin-top: -70px; margin-right: -110px;">
                                    <button type="button" class="btn" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i></button>
                                </div>
                                <p class="style_h1" style="font-size: 100%; color: #000000!important; font-family: 'Montserrat',Helvetica,Arial,Lucida,sans-serif; font-weight: 800; letter-spacing: 1px; ">{!! $attorney->about_head_one !!}</p> <br>
                                <p style="color: #c4a34b!important; font-size: 30px; font-family: 'Montserrat',Helvetica,Arial,Lucida,sans-serif; font-weight: 700; margin-left:100px;">{!! $attorney->about_head_two !!}</p> <br>
                                <p>{!! $attorney->bio !!}</p>

                            </div>

                        </div>
                    </div>
                    
                </div>
                {{-- <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" style="text-decoration: none; color:#c4a24b; font-weight: 700;">Read More</a>
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">

                            <div class="modal-content"
                                style="margin-top: 25px; padding: 100px; height:580px; overflow: auto; ">
                                <div class="modal-footer" style="border: none; padding: 0px; margin-top: -70px; margin-right: -110px;">
                                    <button type="button" class="btn" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i></button>
                                </div>
                                <p class="style_h1" style="font-size: 100%; color: #000000!important; font-family: 'Montserrat',Helvetica,Arial,Lucida,sans-serif; font-weight: 800; letter-spacing: 1px; ">{!! $attorney->about_head_one !!}</p> <br>
                                <p style="color: #c4a34b!important; font-size: 30px; font-family: 'Montserrat',Helvetica,Arial,Lucida,sans-serif; font-weight: 700; margin-left:100px;">{!! $attorney->about_head_two !!}</p> <br>
                                <p>{!! $attorney->bio !!}</p>

                            </div>

                        </div>
                    </div> --}}

            </div>
            
        </div>

    </section>
    <!-- End About Section -->

    {{-- <!-- Start Middle Section --> --}}
    @include('front_end.partials.middle-section')
    <!-- End Middle Section -->

    @include('front_end.partials.contact-us')
@endsection
