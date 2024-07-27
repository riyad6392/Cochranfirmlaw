@extends('front_end.main-template')
@section('hero')
    @include('front_end.partials.hero-section')
@endsection
@section('section')
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container-fluid" style="box-shadow: 0px 2px 2px rgb(0 0 0 / 5%)">
            <div class="row">
                <div class="col-lg-12 d-flex align-items-stretch">
                    <div class="icon-boxes d-flex flex-column justify-content-center" style="width: 100%">
                        <div class="row">
                            <div
                                class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 d-flex align-items-stretch why_us_section">
                                <div class="icon-box mt-xl-0 why_us_margin_top">
                                    <a href="{{ route('my-accomplisments') }}" style="color: #0f0f0f">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-4 col-2">
                                                <img class="why_us_icon_img"
                                                    src="{{ asset('front_end_assets/img/images.png') }}" alt=""
                                                    width="60" height="60">
                                            </div>
                                            <div class="col-lg-10 col-md-8 col-10" style="text-align: start;">
                                                <h4 class="why_us_h4"
                                                    style="font-family: 'Montserrat',Helvetica,Arial,Lucida,sans-serif;font-size: 2rem;">
                                                    <b>Accomplishments</b></h4>
                                                <p style="font-size: 16px; margin-bottom: 0;">Cases & Landmark Decisions
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <div style="text-align: right">
                                        <a href="{{ route('my-accomplisments') }}">
                                            <img loading="lazy" decoding="async" width="20" height="14"
                                                style="font-weight: 500; font-size:14px; line-height:0px;"
                                                src="{{ asset('front_end_assets/img/golden-arrow.png') }}"
                                                alt="" title="Arrow-1" class="wp-image-424">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 d-flex align-items-stretch why_us_section">
                                <div class="icon-box why_us_margin_top mt-xl-0 why_us_middle_section">
                                    <a href="{{ route('my-media') }}" style="color: #fdf8f8">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-4 col-2">
                                                <img class="why_us_icon_img"
                                                    src="{{ asset('front_end_assets/img/midea.png') }}" alt=""
                                                    width="60" height="60">
                                            </div>
                                            <div class="col-lg-10 col-md-8 col-10" style="text-align: start;">
                                                <h4 class="why_us_h4" style="color: white;font-size: 2rem;">Media</h4>
                                                <p style="color:white; font-size: 16px; margin-bottom: 0">Interviews & More</p>
                                            </div>
                                        </div>
                                    </a>
                                    <div style="text-align: right">
                                        <a href="{{ route('my-media') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="25"
                                                fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16"
                                                style="color: #fff;">
                                                <path fill-rule="evenodd"
                                                    style="font-weight: 500; font-size:14px; line-height:0px;"
                                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 d-flex align-items-stretch why_us_section">
                                <div class="icon-box why_us_margin_top mt-xl-0">
                                    <a href="https://cochranfirmlaw.com/" style="color: #0f0f0f">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-4 col-2">
                                                <img class="why_us_icon_img"
                                                    src="{{ asset('front_end_assets/img/site.jpg') }}" alt=""
                                                    width="60" height="60">
                                            </div>
                                            <div class="col-lg-10 col-md-8 col-10" style="text-align: start;">
                                                <h4 class="why_us_h4"
                                                    style="font: 'Montserrat',Helvetica,Arial,Lucida,sans-serif;font-size: 2rem;">
                                                    <b>Cochran Firm California</b>
                                                </h4>
                                                <p style="font-size: 16px; margin-bottom: 0;">Visit The Firm’s Site</p>
                                            </div>
                                        </div>
                                    </a>
                                    <div style="text-align: right">
                                        <a href="https://cochranfirmlaw.com/">
                                            <img loading="lazy" decoding="async" width="20" height="14"
                                                style="font-weight: 500; font-size:14px; line-height:0px;"
                                                src="{{ asset('front_end_assets/img/golden-arrow.png') }}"
                                                alt="" title="Arrow-1" class="wp-image-424">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>
        </div>
        {{-- <img src="{{ asset('front_end_assets/img/line.png') }}" alt="" height="90px" width="2px" style="margin-left:50%; margin-top:-40px;"> --}}
    </section>

    <!-- About bran Dunn -->
    <div id="about" class="about" >
        <div class="container-fluid bg-light-white about-us-section" style="background:#ebebeb!important">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 faq_section_one why-choose-us-sec" style="display: flex;flex-direction: column;justify-content: center;">
                        <div class="section-title sm_why ml992-0" style="margin-left: 0px;">
                            <h3 class="section_head_one" style="font-size:36px;margin-bottom: 1rem;">ABOUT BRIAN DUNN</h3>
{{--                            <p class="why_per" style="color: black;">WHAT MAKE US <br> DIFFERENT FROM OTHER</p>--}}
                        </div>

                        <div class="faq-list faq_section1" >
                            <p class="card_per" style="margin-left: 0px;"><strong>"Brian Dunn</strong>
                                &nbsp;&nbsp;is the Managing Partner and lead Civil Rights Attorney for <b>The Cochran Firm California</b>,
                                the office founded by the late Johnnie L. Cochran, Jr.
                                <br>
                                <br>
                                For the past 25 years, Brian Dunn is one of very few attorneys that has focused the majority of his practice on civil rights cases,
                                representing over 200 victims of police misconduct since 1995. As one of the most experienced working advocates for victims
                                of police misconduct in the state of California, Mr. Dunn has a proven track record of results against government entities on
                                the municipal, state, and federal levels, often in the most complex and misunderstood fact patterns surrounding officer involved
                                shootings.

                                Recently named among the Nations Top 100 Trial Lawyers"
                            </p>
                        </div>

                    </div>
                    <div class="col-md-5 why_image" style="margin-top: 0px">
                        <img src="{{ asset('front_end_assets/img/why-chose-us.png') }}" alt="" width="100%"
                             height="auto" style="padding: 3rem">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Bran Dunn -->

    <!-- Start Middle Section -->
    @include('front_end.partials.middle-section')

    <!-- End Middle Section -->
    <!-- Start Team Section -->
{{--    <section id="team" style="padding-top: 0px;">--}}
{{--        <div>--}}
{{--            <p class="team_line"></p>--}}
{{--            <p class="p1">MEET THE TEAM</p>--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <h1 class="our_attorney_head">--}}
{{--                OUR ATTORNEYS--}}
{{--            </h1>--}}
{{--        </div>--}}
{{--        <div class="custom-about-container">--}}
{{--            <div class="testimonials-slider1 swiper" data-aos="fade-up" data-aos-delay="100">--}}
{{--                <div class="swiper attorney-Swiper">--}}
{{--                    <div class="swiper-wrapper">--}}
{{--                        @foreach ($attorneys as $attorney)--}}
{{--                            <div class="swiper-slide attorney_card">--}}
{{--                                <div class="testimonial-wrap">--}}
{{--                                    <div class="card team_card_border" style="border-radius:0px;">--}}
{{--                                        <img src="{{ asset($attorney->avatar) }}"--}}
{{--                                            class="card-img-top attorney_image_filter team_attorney_img" height="250">--}}
{{--                                        <div class="card-body attorney-card-content" style="border-radius: 0px;">--}}
{{--                                            <h5 class="card-title team_attorney_name">--}}
{{--                                                {{ strlen($attorney->name) > 25 ? substr(strtoupper($attorney->name), 0, 15) . '...' : strtoupper($attorney->name) }}--}}
{{--                                            </h5>--}}
{{--                                            <p class="card-text team_attorney_role">--}}
{{--                                                {{ strlen($attorney->role) > 30 ? substr(strtoupper($attorney->role), 0, 30) . '...' : strtoupper($attorney->role) }}--}}
{{--                                            </p>--}}
{{--                                            <a href="{{ route('getAttorny', $attorney->id) }}"--}}
{{--                                                class="btn btn-outline-success btn-sm bio attorny-readmore team_attorney_btn">Read--}}
{{--                                                Full Bio<img src="{{ asset('front_end_assets/img/greaterthan.svg') }}"--}}
{{--                                                    alt=""></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}

{{--                    </div>--}}

{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--        --}}{{-- <p class="team_line_bottom"></p> --}}
{{--        --}}{{-- </div> --}}
{{--    </section>--}}
    <!-- End Team Section -->

    <!-- Start service provided Section -->
    <section id="service_provided" style="margin-top: 0px;">
        <div class="container">
            <div>
                {{-- <p class="team_line_bottom"></p> --}}
                <p class="ser_pro">
                    Services Provided
                </p>
                <p class="pra_are">
                    PRACTICE AREAS
                </p>
                <p class="the_coch">
                    Brian specializes in the legal practice areas represented by The Cochran Firm California in Los Angeles, California.
                </p>
            </div>
            <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist" style="margin-top: 80px">
                <li class="nav-item" role="presentation" style="position: relative;">
                    <button class="nav-link2 active real_case_button service_btn service_section_buttons"
                        id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button"
                        role="tab" aria-controls="pills-home" aria-selected="true">CIVIL
                        RIGHTS</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active " id="pills-home" role="tabpanel"
                    aria-labelledby="pills-home-tab">
                    <div class="row justify-content-center" style="margin-top: 70px;">
                        @foreach ($practiceAreas as $practiceArea)
                            @if ($practiceArea->practice_area_type == 'civil_rigits')
                                <div class="card col-md-4 card1_effect card_effect_border practice_session_card"
                                    style="margin: 10px;">
                                    <a class="card_effect image_hover img_gold"
                                        href="{{ route('single.practice', $practiceArea->id) }}">
                                        <div class="card-body practice_session_card_body">
                                            <p class="services_session_title">
                                                {{ strtoupper($practiceArea->title) }}
                                            </p>
                                            {{-- <img src="{{ asset('front_end_assets/img/arrow-white.webp') }}" alt=""> --}}
                                            <img class="img_gold" src="{{ asset('front_end_assets/img/arrow.png') }}"
                                                alt="" width="35%" height="auto" style="margin-top: -32px;">
                                        </div>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="row justify-content-center ">
                        @foreach ($practiceAreas as $practiceArea)
                            @if ($practiceArea->practice_area_type == 'personal_injuries')
                                <div class="card col-md-4 card_effect_border practice_session_card" style="margin: 10px;">
                                    <a class="card_effect image_hover"
                                        href="{{ route('single.practice', $practiceArea->id) }}">
                                        <div class="card-body practice_session_card_body">
                                            <p class="services_session_title">
                                                {{ strtoupper($practiceArea->title) }}
                                            </p>
                                            <img class="img_gold" src="{{ asset('front_end_assets/img/arrow.png') }}"
                                                alt="" width="40%" height="auto" style="margin-top: -32px;">
                                        </div>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    {{-- </div> --}}
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="row justify-content-center ">
                        @foreach ($practiceAreas as $practiceArea)
                            @if ($practiceArea->practice_area_type == 'employment')
                                <div class="card col-md-4 card_effect_border practice_session_card" style="margin: 10px;">
                                    <a class="card_effect image_hover"
                                        href="{{ route('single.practice', $practiceArea->id) }}">
                                        <div class="card-body practice_session_card_body">
                                            <p class="services_session_title">
                                                {{ strtoupper($practiceArea->title) }}
                                            </p>
                                            <img class="img_gold" src="{{ asset('front_end_assets/img/arrow.png') }}"
                                                alt="" width="40%" height="auto" style="margin-top: -32px;">
                                        </div>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            {{-- <div class="row">
            <div style="text-align:center; display:block;" class="service_btn">
            <a href="#civil_rights" class="btn btn-light" data-toggle="collapse" style="padding:16px 42px; width:200px; color: rgba(0,0,0,0.65)!important; font-family: 'Montserrat',Helvetica,Arial,Lucida,sans-serif; font-weight: 600; text-transform: uppercase; font-size: 14px; border:none">CIVIL RIGHTS</a>
            <a href="#personal_injury" class="btn btn-light" data-toggle="collapse" style="padding:16px 42px; width:200px; color: rgba(0,0,0,0.65)!important; font-family: 'Montserrat',Helvetica,Arial,Lucida,sans-serif; font-weight: 600; text-transform: uppercase; font-size: 14px; border:none">PERSONALINJURY</a>
            <a href="#employment" class="btn btn-light" data-toggle="collapse" style="padding:16px 42px; width:200px; color: rgba(0,0,0,0.65)!important; font-family: 'Montserrat',Helvetica,Arial,Lucida,sans-serif; font-weight: 600; text-transform: uppercase; font-size: 14px; border:none">EMPLOYMENT</a>
            </div>
            <div class="col-3 card_view" style="margin-top: 20px; margin-left:60px;">
            <div class="card" style="width: 18rem; background-color: rgb(0 0 0 / 70%);">
                <div class="card-body" style="text-align: center; padding: 40px 20px; margin: 10px; ">
                <p style="color: #fff; font-size: 16px; font-weight: 600; text-align: center; font-family: 'Montserrat',Helvetica,Arial,Lucida,sans-serif;">
                    POLICE BRUTILITY
                </p>
                <img src="{{ asset('front_end_assets/img/arrow.png') }}" alt="">
                </div>
            </div>
            </div>
            <div class="col-3 card_view" style="margin-top: 20px; margin-left:60px;">
            <div class="card" style="width: 18rem; background-color: rgb(0 0 0 / 70%);">
                <div class="card-body" style="text-align: center; padding: 40px 20px; margin: 10px; ">
                <p style="color: #fff; font-size: 16px; font-weight: 600; text-align: center; font-family: 'Montserrat',Helvetica,Arial,Lucida,sans-serif;">
                    POLICE BRUTILITY
                </p>
                <img src="{{ asset('front_end_assets/img/arrow.png') }}" alt="">
                </div>
            </div>
            </div>
            <div class="col-3 card_view" style="margin-top: 20px; margin-left:60px;">
            <div class="card" style="width: 18rem; background-color: rgb(0 0 0 / 70%);">
                <div class="card-body" style="text-align: center; padding: 40px 20px; margin: 10px; ">
                <p style="color: #fff; font-size: 16px; font-weight: 600; text-align: center; font-family: 'Montserrat',Helvetica,Arial,Lucida,sans-serif;">
                    POLICE BRUTILITY
                </p>
                <img src="{{ asset('front_end_assets/img/arrow.png') }}" alt="">
                </div>
            </div>
            </div>

        </div> --}}
        </div>
    </section>
    <!-- End service_provided Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg" style="padding-top: 0px;">
        <div id="about" class="about">
            <div class="container-fluid bg-light-white about-us-section">
                <div class="container">
                    <div class="row">

                        <div class="col-md-5 why_image" style="margin-top: 0px">
                            <img src="{{ asset('front_end_assets/img/brand.jpg') }}" alt="" style="width: 100%; height: 100%"
                                 >
                        </div>

                        <div class="col-md-7 faq_section_one why-choose-us-sec" >
                            <div class="section-title sm_why ml992-0">
{{--                                <h3 class="section_head_one">WHAT BRIAN BELIEVES</h3>--}}
                                {{--                            <p class="why_per" style="color: black;">WHAT MAKE US <br> DIFFERENT FROM OTHER</p>--}}
                            </div>

                            <div class="card_per"><h3 class="card_head" style="margin-top: 0; margin-bottom:1rem"><strong>BIOGRAPHY</strong></h3>
                                <p>Brian is a native of Los Angeles, CA and graduated from UC Berkley in 1990. He pursued his legal degree at the University of Michigan, graduating law school in 1993.</p>
                                <p>In 1992, while a student in Michigan, Brian was hand picked by Johnnie Cochran to serve as his law clerk for Civil Rights litigation. Brian was personally trained and mentored by Mr. Cochran, and was hired in 1995 as a staff attorney on Mr. Cochran’s Civil Rights Litigation team.</p>
                                <p>Having spent his entire career with The Cochran Firm, he has handled many of the Firm’s highest profile police misconduct cases, including those involving Geronimo Pratt, Reginald Denny, Devin Brown, Tyisha Miller.</p>
                                <p>Brian has received numerous trail attorney honors and is a frequent lecturer on the logistics and complexities of the practice of civil rights litigation, both to attorneys and police officers.</p></div>
                        </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


{{--    <div class="et_pb_section et_pb_section_2 et_pb_with_background et_section_regular" style="margin-left: 339px !important;margin-top: 35px;margin-bottom: 74px;">--}}

{{--        <div class="et_pb_row et_pb_row_4">--}}
{{--            <div class="et_pb_column et_pb_column_4_4 et_pb_column_8  et_pb_css_mix_blend_mode_passthrough et-last-child">--}}


{{--                <div class="et_pb_module et_pb_text et_pb_text_5  et_pb_text_align_left et_pb_bg_layout_light">--}}

{{--                    <div class="et_pb_text_inner"><h3><strong>BIO</strong></h3>--}}
{{--                        <p>Brian is a native of Los Angeles, CA and graduated from UC Berkley in 1990. He pursued his legal degree at the University of Michigan, graduating law school in 1993.</p>--}}
{{--                        <p>In 1992, while a student in Michigan, Brian was hand picked by Johnnie Cochran to serve as his law clerk for Civil Rights litigation. Brian was personally trained and mentored by Mr. Cochran, and was hired in 1995 as a staff attorney on Mr. Cochran’s Civil Rights Litigation team.</p>--}}
{{--                        <p>Having spent his entire career with The Cochran Firm, he has handled many of the Firm’s highest profile police misconduct cases, including those involving Geronimo Pratt, Reginald Denny, Devin Brown, Tyisha Miller.</p>--}}
{{--                        <p>Brian has received numerous trail attorney honors and is a frequent lecturer on the logistics and complexities of the practice of civil rights litigation, both to attorneys and police officers.</p></div>--}}
{{--                </div> <!-- .et_pb_text -->--}}
{{--            </div> <!-- .et_pb_column -->--}}


{{--        </div> <!-- .et_pb_row -->--}}

{{--    </div>--}}








    <section id="real_case_result" style="height:auto;">
        <div class="custom-about-container" style="margin-bottom:90px;">
            <div class="row">
                <p class="real_case">REAL CASE RESULTS</p>
                <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link2 active real_case_button service_btn service_section_buttons" id="pills-home-tab1"
                            data-bs-toggle="pill" data-bs-target="#pills-home1" type="button" role="tab"
                            aria-controls="pills-home" aria-selected="true">CIVIL
                            RIGHTS</button>
                    </li>
{{--                    <li class="nav-item" role="presentation">--}}
{{--                        <button class="nav-link1 real_case_button real_case_section_buttons" id="pills-profile-tab1"--}}
{{--                            data-bs-toggle="pill" data-bs-target="#pills-profile1" type="button" role="tab"--}}
{{--                            aria-controls="pills-profile" aria-selected="false">PERSONAL--}}
{{--                            INJURY</button>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item" role="presentation">--}}
{{--                        <button class="nav-link1 real_case_button real_case_section_buttons" id="pills-contact-tab1"--}}
{{--                            data-bs-toggle="pill" data-bs-target="#pills-contact1" type="button" role="tab"--}}
{{--                            aria-controls="pills-contact" aria-selected="false">EMPLOYMENT</button>--}}
{{--                    </li>--}}
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home1" role="tabpanel"
                        aria-labelledby="pills-home-tab1">
                        <div class="row">
                            <div class="col-lg-4 sm_card">
                                <div class="card real_case_result_card">
                                    <div style="border:1px solid rgb(190, 190, 190); padding:10px; font-weight:500">
                                        <div class="card-body real_case_card">
                                            <h5 class="card-title"
                                                style="font-size: 30px; line-height: 1em; font-weight: 500;"> <img
                                                    src="{{ asset('front_end_assets/img/tick-image.webp') }}"
                                                    alt="" height="18px" width="18px"> $22,900,000 <br
                                                    style="margin-left: 26px; text-transform: uppercase; margin-top: 6px; font-weight: 600; color: #333;">
                                            </h5>
                                            <p class="card-text"
                                                style="margin-left: 20px; color:#333333; font-weight:600">POLICE MISCONDUCT</p>
                                        </div>
                                        <div class="card-body real_case_card">
                                            <h5 class="card-title"
                                                style="font-size: 30px; line-height: 1em; font-weight: 500;"> <img
                                                    src="{{ asset('front_end_assets/img/tick-image.webp') }}"
                                                    alt="" height="18px" width="18px"> $8,225,000<br
                                                    style="margin-left: 26px; text-transform: uppercase; margin-top: 6px; font-weight: 600; color: #333;">
                                            </h5>
                                            <p class="card-text"
                                                style="margin-left: 20px;  color:#333333; font-weight:600">POLICE BRUTALITY</p>
                                        </div>
                                        <div class="card-body real_case_card">
                                            <h5 class="card-title"
                                                style="font-size: 30px; line-height: 1em; font-weight: 500;"> <img
                                                    src="{{ asset('front_end_assets/img/tick-image.webp') }}"
                                                    alt="" height="18px" width="18px"> $10,490,000<br
                                                    style="margin-left: 26px; text-transform: uppercase; margin-top: 6px; font-weight: 600; color: #333;">
                                            </h5>
                                            <p class="card-text"
                                                style="margin-left: 20px;  color:#333333; font-weight:600">WRONGFUL DEATH/
                                                OFFICER
                                                INVOLVED SHOOTING</p>
                                        </div>
{{--                                        <div class="card-body real_case_card">--}}
{{--                                            <h5 class="card-title"--}}
{{--                                                style="font-size: 30px; line-height: 1em; font-weight: 500;"> <img--}}
{{--                                                    src="{{ asset('front_end_assets/img/tick-image.webp') }}"--}}
{{--                                                    alt="" height="18px" width="18px"> $10,490,000<br--}}
{{--                                                    style="margin-left: 26px; text-transform: uppercase; margin-top: 6px; font-weight: 600; color: #333;">--}}
{{--                                            </h5>--}}
{{--                                            <p class="card-text"--}}
{{--                                                style="margin-left: 20px;  color:#333333; font-weight:600">SEXUAL ASSAULT--}}
{{--                                                VICTIM</p>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 sm_screen">
                                <div class="card_div " style="margin-top: -40px;">
                                    <p class="card_head">
                                        Millions of Dollars In Civil Rights <br> Settlements
                                    </p>
                                    <p class="card_per" style="margin-top: -25px;">
                                        Brian Dunn has built and maintained his reputation as a leading civil rights
                                        attorney by successfully representing hundreds of people who were injured
                                        and/or killed by police. He has obtained verdicts and settlements worth hundreds
                                        of millions of dollars for the victims of police misconduct.
                                    </p>
                                    <a href="{{ route('my-accomplisments') }}"
                                        class="btn real_case_button real_case_mobile">LEARN MORE</a>
                                    {{-- <button
                                        style="padding: 14px 30px; font-size: 14px; text-transform: uppercase; background-color: #000c; color: #fff; font-weight: bold; margin-right: 10px; border: 0px;">LEARN
                                        MORE</button> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile1" role="tabpanel" aria-labelledby="pills-profile-tab1">
                        <div class="row">
                            <div class="col-lg-4 sm_card">
                                <div class="card real_case_result_card">
                                    <div style="border:1px solid rgb(190, 190, 190); padding:10px;">
                                        <div class="card-body real_case_card">
                                            <h5 class="card-title"
                                                style="font-size: 30px; line-height: 1em; font-weight: 500;"> <img
                                                    src="{{ asset('front_end_assets/img/tick-image.webp') }}"
                                                    alt="" height="18px" width="18px"> $5,000,000 <br
                                                    style="margin-left: 26px; text-transform: uppercase; margin-top: 6px; font-weight: 600; color: #333;">
                                            </h5>
                                            <p class="card-text"
                                                style="margin-left: 20px; color:#333333; font-weight:600">BUS ACCIDENT</p>
                                        </div>
                                        <div class="card-body real_case_card">
                                            <h5 class="card-title"
                                                style="font-size: 30px; line-height: 1em; font-weight: 500;"> <img
                                                    src="{{ asset('front_end_assets/img/tick-image.webp') }}"
                                                    alt="" height="18px" width="18px"> $1,000,000<br
                                                    style="margin-left: 26px; text-transform: uppercase; margin-top: 6px; font-weight: 600; color: #333;">
                                            </h5>
                                            <p class="card-text"
                                                style="margin-left: 20px;  color:#333333; font-weight:600">TRUCKING
                                                ACCIDENT</p>
                                        </div>
                                        <div class="card-body real_case_card">
                                            <h5 class="card-title"
                                                style="font-size: 30px; line-height: 1em; font-weight: 500;"> <img
                                                    src="{{ asset('front_end_assets/img/tick-image.webp') }}"
                                                    alt="" height="18px" width="18px"> $900,000<br
                                                    style="margin-left: 26px; text-transform: uppercase; margin-top: 6px; font-weight: 600; color: #333;">
                                            </h5>
                                            <p class="card-text"
                                                style="margin-left: 20px;  color:#333333; font-weight:600">ELDER ABUSE</p>
                                        </div>
                                        <div class="card-body real_case_card">
                                            <h5 class="card-title"
                                                style="font-size: 30px; line-height: 1em; font-weight: 500;"> <img
                                                    src="{{ asset('front_end_assets/img/tick-image.webp') }}"
                                                    alt="" height="18px" width="18px"> $525,000<br
                                                    style="margin-left: 26px; text-transform: uppercase; margin-top: 6px; font-weight: 600; color: #333;">
                                            </h5>
                                            <p class="card-text"
                                                style="margin-left: 20px;  color:#333333; font-weight:600 ">PEDESTRIAN
                                                ACCIDENT</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 sm_screen">
                                <div class="card_div" style="margin-top: -40px;">
                                    <p class="card_head">
                                        We Win Personal <br>
                                        Injury Settlements for our <br> Clients
                                    </p>
                                    <p class="card_per" style="margin-top: -25px;">
                                        If you have been injured in an accident you have two choices: you can rely on an
                                        insurance company of the party oresponsible for your injury to provide you with
                                        advice or you can call a lawyer, to represent your interest like The Cochran Firm!
                                    </p>
                                    <a href="{{ route('contact.us') }}"
                                        class="btn real_case_button real_case_mobile">LEARN MORE</a>
                                    {{-- <button
                                        style="padding: 14px 30px; font-size: 14px; text-transform: uppercase; background-color: #000c; color: #fff; font-weight: bold; margin-right: 10px; border: 0px;" class="real_case_button">LEARN
                                        MORE</button> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact1" role="tabpanel" aria-labelledby="pills-contact-tab1">
                        <div class="row">
                            <div class="col-lg-4 sm_card">
                                <div class="card real_case_result_card">
                                    <div style="border:1px solid rgb(190, 190, 190); padding:10px;">
                                        <div class="card-body real_case_card">
                                            <h5 class="card-title"
                                                style="font-size: 30px; line-height: 1em; font-weight: 500;"> <img
                                                    src="{{ asset('front_end_assets/img/tick-image.webp') }}"
                                                    alt="" height="18px" width="18px"> $735,500 <br
                                                    style="margin-left: 26px; text-transform: uppercase; margin-top: 6px; font-weight: 600; color: #333;">
                                            </h5>
                                            <p class="card-text"
                                                style="margin-left: 20px;  color:#333333; font-weight:600">RACE
                                                DISCRIMINATION</p>
                                        </div>
                                        <div class="card-body real_case_card">
                                            <h5 class="card-title"
                                                style="font-size: 30px; line-height: 1em; font-weight: 500;"> <img
                                                    src="{{ asset('front_end_assets/img/tick-image.webp') }}"
                                                    alt="" height="18px" width="18px"> $500,000<br
                                                    style="margin-left: 26px; text-transform: uppercase; margin-top: 6px; font-weight: 600; color: #333;">
                                            </h5>
                                            <p class="card-text"
                                                style="margin-left: 20px;  color:#333333; font-weight:600">DISABILITY
                                                DISCRIMINATION</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 sm_screen">
                                <div class="card_div" style="margin-top: -40px;">
                                    <p class="card_head">
                                        Fighting for Those Hurt By an <br> Employer
                                    </p>
                                    <p class="card_per" style="margin-top: -25px;">
                                        We ensure your employment case is handled with expertise and honesty as we fight for
                                        you! We handle cases of discrimination, workplace harassement, and more! Call us
                                        today for a no obligation consultation.
                                    </p>
                                    <a href="{{ route('contact.us') }}"
                                        class="btn real_case_button real_case_mobile">LEARN MORE</a>
                                    {{-- <button
                                        style="padding: 14px 30px; font-size: 14px; text-transform: uppercase; background-color: #000c; color: #fff; font-weight: bold; margin-right: 10px; border: 0px;">LEARN
                                        MORE</button> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div id="civil_rights" class="row collapse show" style="margin: 20px"> --}}
                {{-- <div class="col-4 hide_btn">
                  <div class="card" style="width: 18rem; padding: 18px 16px;">
                  <div class="card-body">
                      <h5 class="card-title" style="font-size: 30px; line-height: 1em; font-weight: 500;"> <img src="{{ asset('front_end_assets/img/tick-image.webp') }}" alt="" height="20px" width="20px"> $5,000,000 <br style="margin-left: 26px; text-transform: uppercase; margin-top: 6px; font-weight: 600; color: #333;"></h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  </div>
                  <div class="card-body">
                      <h5 class="card-title" style="font-size: 30px; line-height: 1em; font-weight: 500;"> <img src="{{ asset('front_end_assets/img/tick-image.webp') }}" alt="" height="20px" width="20px"> $2,712,350<br style="margin-left: 26px; text-transform: uppercase; margin-top: 6px; font-weight: 600; color: #333;"></h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  </div>
                  <div class="card-body">
                      <h5 class="card-title" style="font-size: 30px; line-height: 1em; font-weight: 500;"> <img src="{{ asset('front_end_assets/img/tick-image.webp') }}" alt="" height="20px" width="20px"> $3,900,000<br style="margin-left: 26px; text-transform: uppercase; margin-top: 6px; font-weight: 600; color: #333;"></h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  </div>
                  <div class="card-body">
                      <h5 class="card-title" style="font-size: 30px; line-height: 1em; font-weight: 500;"> <img src="{{ asset('front_end_assets/img/tick-image.webp') }}" alt="" height="20px" width="20px"> $1,000,000<br style="margin-left: 26px; text-transform: uppercase; margin-top: 6px; font-weight: 600; color: #333;"></h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  </div>
                  </div>
              </div> --}}
                {{-- <div class="col-8 card_body col-sm-12">
                <div class="card_div">
                    <p class="card_head">
                    Millions of Dollars In Civil Rights Settlements
                    </p>
                    <p class="card_per">
                    The Cochran Firm has built and maintained its reputation as a leading Civil
                    Rights law firm by successfully representing hundreds of people who were
                    injured and/or killed by police. Obtaining verdicts and settlements worth
                    hundreds of Millions of dollars for the Victims of Police Misconduct.
                    </p>
                    <button style="padding: 14px 30px; font-size: 14px; text-transform: uppercase; background-color: #000c; color: #fff; font-weight: bold; margin-right: 10px; border: 0px;">LEARN MORE</button>
                </div>
              </div> --}}
                {{-- </div> --}}
                {{--
              //////////////////////////////////
              --}}

                {{-- <div id="personal_injury" class="row collapse show " style="margin: 20px">
              <div class="col-4">
                  <div class="card" style="width: 18rem; padding: 18px 16px;">
                  <div class="card-body">
                      <h5 class="card-title" style="font-size: 30px; line-height: 1em; font-weight: 500;"> <img src="{{ asset('front_end_assets/img/tick-image.webp') }}" alt="" height="20px" width="20px"> $5,000,000 <br style="margin-left: 26px; text-transform: uppercase; margin-top: 6px; font-weight: 600; color: #333;"></h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  </div>
                  <div class="card-body">
                      <h5 class="card-title" style="font-size: 30px; line-height: 1em; font-weight: 500;"> <img src="{{ asset('front_end_assets/img/tick-image.webp') }}" alt="" height="20px" width="20px"> $1,000,000<br style="margin-left: 26px; text-transform: uppercase; margin-top: 6px; font-weight: 600; color: #333;"></h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  </div>
                  <div class="card-body">
                      <h5 class="card-title" style="font-size: 30px; line-height: 1em; font-weight: 500;"> <img src="{{ asset('front_end_assets/img/tick-image.webp') }}" alt="" height="20px" width="20px"> $900,000<br style="margin-left: 26px; text-transform: uppercase; margin-top: 6px; font-weight: 600; color: #333;"></h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  </div>
                  <div class="card-body">
                      <h5 class="card-title" style="font-size: 30px; line-height: 1em; font-weight: 500;"> <img src="{{ asset('front_end_assets/img/tick-image.webp') }}" alt="" height="20px" width="20px"> $525,000<br style="margin-left: 26px; text-transform: uppercase; margin-top: 6px; font-weight: 600; color: #333;"></h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  </div>
                  </div>
              </div>
              <div class="col-8 card_body">
              <div class="card_div">
                  <p class="card_head">
                  Fighting for Those Hurt By an Employer
                  </p>
                  <p class="card_per">
                  We ensure your employment case is handled with expertise and honesty as we fight for you! We handle cases of
                  discrimination, workplace harassement, and more! Call us today for a no obligation consultation.
                  </p>
                  <button style="padding: 14px 30px; font-size: 14px; text-transform: uppercase; background-color: #000c; color: #fff; font-weight: bold; margin-right: 10px; border: 0px;">LEARN MORE</button>
              </div>
              </div>
              </div> --}}
                {{-- //////////////////////////////
              --}}

                {{-- <div id="employment" class="row collapse show " style="margin: 20px">
              <div class="col-4">
                  <div class="card" style="width: 18rem; padding: 18px 16px;">
                  <div class="card-body">
                      <h5 class="card-title" style="font-size: 30px; line-height: 1em; font-weight: 500;"> <img src="{{ asset('front_end_assets/img/tick-image.webp') }}" alt="" height="20px" width="20px"> $735,500 <br style="margin-left: 26px; text-transform: uppercase; margin-top: 6px; font-weight: 600; color: #333;"></h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  </div>
                  <div class="card-body">
                      <h5 class="card-title" style="font-size: 30px; line-height: 1em; font-weight: 500;"> <img src="{{ asset('front_end_assets/img/tick-image.webp') }}" alt="" height="20px" width="20px"> $500,000<br style="margin-left: 26px; text-transform: uppercase; margin-top: 6px; font-weight: 600; color: #333;"></h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  </div>
                  </div>
              </div>
              <div class="col-8">
              <div style="padding: 34px 40px">
                  <p style="font-size: 36px; line-height: normal; margin-bottom: 15px; font-weight: 400; font-family: 'Montserrat'; margin-top: 20px; color: #333; padding-bottom: 10px; display: block; margin-block-start: 1.33em; margin-block-end: 1.33em;">
                  We Win Personal Injury Settlements for our Clients
                  </p>
                  <p style="margin-bottom: 25px; font-size: 16px; font-weight: 400; font-family: 'Montserrat'; color: #000;">
                  If you have been injured in an accident you have two choices: you can rely on an insurance company of the party
                  oresponsible for your injury to provide you with advice or you can call a lawyer, to represent your interest like
                  The Cochran Firm!
                  </p>
                  <button style="padding: 14px 30px; font-size: 14px; text-transform: uppercase; background-color: #000c; color: #fff; font-weight: bold; margin-right: 10px; border: 0px;">LEARN MORE</button>
              </div>
              </div>
              </div> --}}

            </div>
        </div>
    </section>


    <!-- End real case result -->

{{--    @include('front_end.partials.testimonial')--}}
    <!-- Start testimonial -->
    {{-- <section id="testimonial" style="padding-top: unset !important">
        <div class="container1 m-4">
          <div style="text-align:center;" class="mt-4">
            <p class="testimonial_pera" style="color: #c4a34b!important; font-weight: bold; text-transform: uppercase; letter-spacing: 2px;">Testimonials</p>
            <h1 class="testimonial_head" style="color: #c4a34b!important;">WHAT OUR CLIENTS SAY</h1>
          </div>

          <div class="testimonials-slider3 testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
              @foreach ($clientTestimonials as $clientTestimonial)
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="card">
                    <div class="card-body" style="text-align: center">
                        <h1 class="card-title" style="font-weight:1200">“</h1>
                        <p class="card-text" style="color: #605f5fd1; font-family: 'Montserrat';">
                          {{ $clientTestimonial->description }}
                        </p>
                    </div>
                  </div>
                </div>
            </div>
              @endforeach
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="card">
                    <div class="card-body" style="text-align: center">
                        <h1 class="card-title" style="font-weight:1200">“</h1>
                        <p class="card-text" style="color: #605f5fd1; font-family: 'Montserrat';">
                          “Our Family would like to let Brian T. Dunn, and the rest of the Cochran Firm know how grateful we are for their professionalism and expertise. It took five years to an put an end to this Judicial process and deliver justice. We will forever be grateful. Thank you."
                        </p>
                    </div>
                  </div>
                </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="card">
                  <div class="card-body" style="text-align: center">
                      <h1 class="card-title" style="font-weight:1200">“</h1>
                      <p class="card-text" style="color: #605f5fd1; font-family: 'Montserrat';">
                        “The Cochran Firm is worth more than 5 stars! I cannot express my gratitude enough for everyone was involved in my case. If you are a person living with disability, you will be accommodated through the whole process. It's not often you find a lawyer and her team ready to service justice, and this, is a firm I highly recommend. Biggest shout out to Anahita and to everyone that worked on my case. Thank you for fighting the good fight."
                      </p>
                  </div>
                </div>
              </div>
          </div>
            </div>
          </div>
        </div>
    </section> --}}
    <!-- end testimonial -->

    <!-- start latest update section -->
    <section id="latest_update" style="padding-top: 0px;">
        <div class="latest-update-custom-container" style="">
            <div class="latest_div">

                <p class="card_head" style="text-align:left; color: #c4a34b">Media Appearances</p>
                <!-- <p class="latest_p2" style="font-weight: 700;"></p> -->
            </div>
            <div class="testimonials-slider swiper blog-post-Swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper mySwiper">
{{--                    @foreach ($news as $singleNews)--}}
                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="card latest_section_card">
{{--                                    <img src="{{ asset($singleNews->image) }}" class="card-img-top" alt="..."--}}
{{--                                        height="250px" style="border-radius: 0px;">--}}
{{--                                    <iframe class="card-body latest_update_card " src="https://www.youtube.com/watch?v=b__XlEwrXso">--}}
{{--                                    </iframe>--}}
                                    <iframe width="100%" height="315" class="card-body latest_update_card "  src="https://www.youtube.com/embed/boXAdlrErPw?si=Ck-9R_Lm4Jqaqtft" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
{{--                                    <div class="card-body latest_update_card ">--}}
{{--                                        <div class="row ">--}}
{{--                                            <div class="col-4 blog-content-grid-left-p">--}}
{{--                                                <p class="card-title latest_heading" style="font-size: 14px; ">--}}
{{--                                                    {{ date('M', strtotime($singleNews->created_at)) }} </p>--}}
{{--                                                <h1 class="latest_created_at"--}}
{{--                                                    style="font-weight: bolder; margin-bottom:-5px;">--}}
{{--                                                    {{ date('j', strtotime($singleNews->created_at)) }}</h1>--}}
{{--                                                <a href="{{ route('single.news', $singleNews->id) }}"--}}
{{--                                                    class="latest_readmore" style="font-size: 10px;">READ MORE</a>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-8 latest_border_left">--}}
{{--                                                <h6 class="card-title latest_title">--}}
{{--                                                    {{ strlen($singleNews->title) > 15 ? substr(strtoupper($singleNews->title), 0, 15) . '...' : strtoupper($singleNews->title) }}--}}
{{--                                                </h6>--}}
{{--                                                <p class="card-text latest_description" style="">--}}
{{--                                                    {{ strlen($singleNews->short_description) > 100 ? substr($singleNews->short_description, 0, 100) . '...' : $singleNews->short_description }}--}}
{{--                                                    --}}{{-- {{ strlen($singleNews->title) > 100 ? substr($singleNews->title, 0, 100) . '...' : $singleNews->title }} --}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="card latest_section_card">
{{--                                 <iframe class="card-body latest_update_card " src="https://www.youtube.com/watch?v=Oiiou9vL1yQ">--}}
{{--                                    </iframe>--}}
                                    <iframe width="100%" height="315" class="card-body latest_update_card "   src="https://www.youtube.com/embed/mlPPPAHQsH8?si=UQq1fudJVdUEf35j" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="card latest_section_card">
{{--                                <iframe class="card-body latest_update_card " src="https://youtu.be/fFAfI1N_VEo?si=b3wQneWk0cGxVzev">--}}
{{--                                </iframe>--}}
                                <iframe width="100%" class="card-body latest_update_card " height="315" src="https://www.youtube.com/embed/vVTu7n_qLyA?si=R1Hk0XRRtYAau7uo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                </div>

{{--                <div class="view-all-container">--}}
{{--                    <button class="btn btn-primary view-all-button"  style="margin-top: 17px;" onclick="location.href='{{ route('my-accomplisments') }}'">View All</button>--}}
{{--                </div>--}}



            </div>

            <div id="button-container">
                <div class=" " style="margin-top: 55px; text-align: center;">
                    <!-- <a class="btn real_case_button real_case_mobile" href="{{ route('my-media-reel') }}">View All </a> -->
                    <a href="{{ route('my-media-reel') }}" class="btn real_case_button real_case_mobile">VIEW ALL</a>
                </div>
            </div>

        </div>
        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 1,
                spaceBetween: 30,

            });
        </script>





        <script>
            var swiper = new Swiper(".attorney-Swiper", {
                slidesPerView: 1,

                loop: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                    },
                    768: {
                        slidesPerView: 3,
                    },
                    1024: {
                        slidesPerView: 5,
                    },
                },
            });
        </script>
        <script>
            new Swiper('.blog-post-Swiper', {
                speed: 600,
                loop: false,
                // autoplay: {
                //     delay: 5000,
                //     disableOnInteraction: false
                // },
                autoplay: false,
                pagination: {
                    el: '.swiper-pagination',
                    type: 'bullets',
                    clickable: true
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 30
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 30
                    },
                    1000: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    }
                }
            });
        </script>
        {{-- <p class="lateast_line"></p>  --}}
    </section>
    <!-- end latest update section -->
{{--    <img src="{{ asset('front_end_assets/img/line.png') }}" alt="" height="90px" width="3px"--}}
{{--        style="margin-left:50%; margin-bottom: -40px; position: relative; z-index:1;">--}}
{{--    @include('front_end.partials.contact-us')--}}
@endsection


