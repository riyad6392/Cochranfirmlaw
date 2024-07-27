@extends('front_end.main-template')

@section('hero')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center"
        style="background-image: url('{{ asset('front_end_assets/img/attorney_banner.webp') }}'); height:240px">
        <div class="container">
            <h1 class="mini_page_head single_page_header" style="margin-bottom: 0px; margin-left:20px;">{{ strtoupper($attorney->name) }}</h1>
            <h2 class="how_work_div1_h2" style="margin-left:20px; font-weight:400; margin-bottom:60px; font-size:34px;">{{ strtoupper($attorney->role) }}</h2>
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
                    style="border-bottom: 2px solid #c3a43a; padding:5px 0px;">
                    <a href="{{ route('home') }}">
                        <h5 style="color: rgb(0, 0, 0); margin-left:110px; font-size:16px;"><b>HOME</b></h5>
                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg" height="26" width="26" viewBox="0 0 384 512"
                        style="margin-left: 8px;margin-right: 5px; padding-top:2px; padding-bottom:8px;">
                        <path fill="#9f6e04"
                            d="M3.4 81.7c-7.9 15.8-1.5 35 14.3 42.9L280.5 256 17.7 387.4C1.9 395.3-4.5 414.5 3.4 430.3s27.1 22.2 42.9 14.3l320-160c10.8-5.4 17.7-16.5 17.7-28.6s-6.8-23.2-17.7-28.6l-320-160c-15.8-7.9-35-1.5-42.9 14.3z" />
                    </svg>
                    <h5 style="font-size:16px;">{{ $attorney->name }}</h5>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why Us Section -->
    <section id="about" class="about" style="background-color: rgba(249,248,246,0.48)!important; height:110vh;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6  align-items-stretch position-relative filter_image"  style="background: url('{{ asset($attorney->display_img) }}') center no-repeat; background-size: cover; width:400px; height:400px;">
                <img src="{{ asset($attorney->avatar) }}" alt="" width="350" height="372" style="box-shadow: 0px 3px 4px 2px;">

                {{-- <button type="submit" class="read_more_btn" data-toggle="modal" data-target=".bd-example-modal-lg" style="margin-top: 105%; margin-left:120%; width:90px; text-decoration: none; color:#c4a24b; font-weight: 700;">Read More</button> --}}

                {{-- <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
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

                        </div> --}}
                    </div>
            {{-- </div> --}}
            <div class="col-md-6" style="margin-left: 50px;">
                {{-- @if ($attorney->about_head_one != '')
                    <div class="px-5" style="align-items: baseline;">
                        <h3>“{{ $attorney->about_head_one ?? 'Attorney' }}</h3>
                        <h3 style="color: rgb(143, 105, 10); margin-left:10px;">
                            {{ $attorney->about_head_two ?? 'Attorney' }}“</h3>
                    </div>
                    @endif --}}
                {{-- <div> --}}
                    {{-- <p>{!! substr($attorney->bio, 0, 1000) !!}</p> --}}
                    <h3 class="attorney_head_one">“{{ $attorney->about_head_one ?? 'Attorney' }}</h3>
                    <h3 class="attorney_head_two" style="color: rgb(143, 105, 10); margin-left:40px; margin-top:40px; margin-bottom:20px;">
                        {{ $attorney->about_head_two ?? 'Attorney' }}“</h3>
                    <p style="font-family: 'Montserrat',Helvetica,Arial,Lucida,sans-serif; font-size: 16px;font-weight: 500;line-height: 1.8em;text-align: left;">{!! substr($attorney->bio, 0, 3000) !!}</p>
                    {{-- <a href=""></a> --}}
                    <br>
                    {{-- <br> --}}
                    <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg"
                    style="text-decoration: none; color:#c4a24b; font-weight: 700; height:40px; width:200px; font-size:20px;">Read
                    More</a>
                {{-- </div> --}}

            </div>

            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl">

                    <div class="modal-content" style="margin-top: 25px; padding: 100px; height:580px; overflow: auto; ">
                        <div class="modal-footer"
                            style="border: none; padding: 0px; margin-top: -70px; margin-right: -110px;">
                            <button type="button" class="btn" data-dismiss="modal"><i
                                    class="fa-solid fa-circle-xmark"></i></button>
                        </div>
                        <p class="style_h1"
                            style="font-size: 23px; color: #000000!important; font-family: 'Montserrat',Helvetica,Arial,Lucida,sans-serif; font-weight: 900; letter-spacing: 1px; ">
                            {!! $attorney->about_head_one !!}</p> <br>
                        <p
                            style="color: #c4a34b!important; font-size: 32px; font-family: 'Montserrat',Helvetica,Arial,Lucida,sans-serif; font-weight: 700; margin-left:50px; margin-bottom:0px;">
                            {!! $attorney->about_head_two !!}</p> <br>
                        <p>{!! $attorney->bio !!}</p>

                    </div>

                </div>
            </div>
        </div>

        </div>
    </section>
    {{-- <!-- Start Middle Section --> --}}
    @include('front_end.partials.middle-section')
    <!-- End Middle Section -->

    @include('front_end.partials.contact-us')
@endsection
