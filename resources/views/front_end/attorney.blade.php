@extends('front_end.main-template')
@section('title', $attorney->name . ' - The Cochran Firm California')
@section('hero')
    <!-- ======= Hero Section ======= -->

    <section id="hero" class="d-flex align-items-center px-0"
        style="background-image: url('{{ asset('front_end_assets/img/attorney_banner.webp') }}'); height:250px;">
        <div class="container mt-5 how_work_div1 pt-20 breadcrumb-banner">
            <h1 style="margin-bottom: -17px;" class="about_us_page_head breadcrumb-banner-heading1">
                {{ strtoupper($attorney->name) }}</h1>
            <h2 class="how_work_div1_h2  breadcrumb-banner-heading2" style="font-weight:400; font-size:27px;">
                {{ strtoupper($attorney->role) }}</h2>

        </div>
    </section>
    <!-- End Hero -->
@endsection

@section('section')
    <!-- ======= Why Us Section ======= -->



    <section id="why-us" class="why-us">

        <div class="container-fluid"
            style="box-shadow: 0px 2px 2px rgb(0 0 0 / 5%); border-bottom: 2px solid #c3a43a; padding:5px 0px;">
            <div class="row">

                <div class="col-md-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 d-flex align-items-stretch sm_under_links under_links mt-3">

                                <a href="{{ route('home') }}">
                                    <h5 class="breadcrumb-link"><b>Home</b></h5>
                                </a>

                                <span class="fa fa-angle-right breadcrumb-angle-icon"></span>

                                <a href="#" class="breadcrumb-active-link">
                                    <h5>{{ $attorney->name }}</h5>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why Us Section -->
    <section id="about" class="about bg-light-white pt90 s-pt-50"
        style="background-color: #ffffff; height:auto;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6  align-items-stretch position-relative filter_image"
                    style="background: url('{{ asset($attorney->display_img) }}') center no-repeat; background-size: cover; width:360px; height:450px; box-shadow: 0px 0px 10px 4px lightgray;margin-bottom: 30px">
                    {{-- <img src="{{ asset($attorney->avatar) }}" alt="" width="350" height="372" style="box-shadow: 0px 3px 4px 2px;"> --}}

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
                <div class="col-md-6 pl50 s-pl-25">
                    {{-- @if ($attorney->about_head_one != '')
                    <div class="px-5" style="align-items: baseline;">
                        <h3>“{{ $attorney->about_head_one ?? 'Attorney' }}</h3>
                        <h3 style="color: rgb(143, 105, 10); margin-left:10px;">
                            {{ $attorney->about_head_two ?? 'Attorney' }}“</h3>
                    </div>
                    @endif --}}
                    {{-- <div> --}}
                    {{-- <p>{!! substr($attorney->bio, 0, 1000) !!}</p> --}}
                    <h3 class="about_page_head1">“{{ $attorney->about_head_one ?? 'Attorney' }}</h3>
                    <h3 class="about_page_head2">
                        {{ $attorney->about_head_two ?? 'Attorney' }}“</h3>
                    <p class="about-text-styling">{!! substr($attorney->bio, 0, 3000) !!}</p>
                    {{-- <a href=""></a> --}}
                    <br>
                    {{-- <br> --}}

                    {{-- </div> --}}

                </div>
                <div class="row">
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-6" style="margin-left: -10px;">
                        <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg"
                            style="text-decoration: none; color:#c4a24b; font-weight: 700; height:40px; width:200px; font-size:18px; font-family:Montserrat;">Read
                            More</a>
                    </div>
                </div>

                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">

                        <div class="modal-content about-modal-content">
                            <div class="modal-footer" style="border: none; padding: 0px;">
                                <button type="button" class="btn" data-dismiss="modal"><i
                                        class="fa-solid fa-circle-xmark"></i></button>
                            </div>
                            <p class="about_page_head1">
                                {!! $attorney->about_head_one !!}</p>
                            <p class="about_page_head2">
                                {!! $attorney->about_head_two !!}</p>
                            <p class="about-text-styling">{!! $attorney->bio !!}</p>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    {{-- <!-- Start Middle Section --> --}}
    @include('front_end.partials.middle-section')
    <!-- End Middle Section -->
    <img src="{{ asset('front_end_assets/img/line.png') }}" alt="" height="120px" width="3px"
        style="margin-left:50%; margin-top:-140px; margin-bottom:-150px; position: relative; z-index:2">
    @include('front_end.partials.contact-us')
@endsection
