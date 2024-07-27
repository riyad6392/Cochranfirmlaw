@extends('front_end.main-template')
@section('hero')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center px-0"
        style="background-image:linear-gradient(180deg,rgba(0,0,0,0.53) 0%,rgba(0,0,0,0.63) 100%),url('{{ asset('front_end_assets/img/InTheNewsBackground.webp') }}'); height:250px;">
        <div class="container mt-5 how_work_div1 pt-20 breadcrumb-banner">
            <h1 style="margin-bottom: -17px;" class="about_us_page_head breadcrumb-banner-heading1">ABOUT US</h1>
            <h2 class="how_work_div1_h2  breadcrumb-banner-heading2" style="font-weight:400; font-size:27px;">GIVING A VOICE
                TO THE VOICELESS</h2>

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
                            <div class="col-md-12 d-flex align-items-stretch under_links sm_under_links mt-3">
                                <a href="{{ route('home') }}">
                                    <h5 class="breadcrumb-link"><b>Home</b></h5>
                                </a>
                                <span class="fa fa-angle-right breadcrumb-angle-icon"></span>

                                <a href="{{ route('practice.areas') }}" class="breadcrumb-active-link">
                                    <h5 >About Us</h5>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about bg-light-white pt90 s-pt-50" style="height: auto; margin-top:0px;">
        <div class="container">
            <div class="row">

                <div class="col-lg-5">
                    <div class="border-style-after">
                        <div class="card border-style-animation">
                            <img src="{{ asset('front_end_assets/img/card1.webp') }}" alt="">

                        </div>
                    </div>
                </div>
                <div class="col-lg-7 icon-boxes d-flex flex-column align-items-stretch px-lg-5 small-right-side-section">
                    {{-- @if ($attorney->about_head_one != '')
                  <div class="px-5" style="align-items: baseline;">
                    <h3>“{{ $attorney->about_head_one ?? "Attorney" }}</h3>
                    <h3 style="color: rgb(143, 105, 10); margin-left:10px;">{{ $attorney->about_head_two ?? "Attorney" }}“</h3> --}}
                    <h1 class="about_page_head1">ABOUT OUR FIRM</h1>
                    <h2 class="about_page_head2 mt-0" style="font-size: 24px">COCHRAN CALIFORNIA</h2>
                    <p class="about-text-styling">
                        The Cochran Firm was founded over 40 years ago by the late Johnnie L. Cochran, Jr., one of the
                        country’s most well-known and well-respected legal advocates. <br> <br>
                        Comprised of a select group of lawyers chosen by Mr. Cochran himself to carry out his legacy, The
                        Cochran Firm provides high-quality, effective representation for ordinary citizens throughout the
                        country. Our attorneys pride themselves in standing up for the rights of people and families who
                        have been wronged by the conduct of others, be it a personal injury or wrongful death matter, or a
                        case arising out of police abuse or government misconduct.
                    <p><a href="#" data-toggle="modal" data-target=".bd-example-modal-lg"
                            style="text-decoration: none; color:#c4a24b; font-weight: 700;
                        font-size: 18px;
                        line-height: 1.8em;
                        margin-left:20px;">Read
                            More</a></p>
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">

                            <div class="modal-content about-modal-content">
                                <div class="modal-footer" style="border: none; padding: 0px;">
                                    <button type="button" class="btn" data-dismiss="modal"><i
                                            class="fa-solid fa-circle-xmark"></i></button>
                                </div>
                                {{-- <p class="style_h1" style="font-size: 100%; color: #000000!important; font-family: 'Montserrat',Helvetica,Arial,Lucida,sans-serif; font-weight: 800; letter-spacing: 1px; ">{!! $attorney->about_head_one !!}</p> <br>
                              <p style="color: #c4a34b!important; font-size: 30px; font-family: 'Montserrat',Helvetica,Arial,Lucida,sans-serif; font-weight: 700; margin-left:100px;">{!! $attorney->about_head_two !!}</p> <br> --}}
                                <h1 class="about_page_head1">ABOUT OUR FIRM</h1>
                                <h2 class="about_page_head2">COCHRAN CALIFORNIA</h2>
                                <p class="about-text-styling">
                                    The Cochran Firm was founded over 40 years ago by the late Johnnie L. Cochran, Jr., one
                                    of the country’s most well-known and well-respected legal advocates.
                                </p>
                                <p class="about-text-styling">
                                    Comprised of a select group of lawyers chosen by Mr. Cochran himself to carry out his
                                    legacy, The Cochran Firm provides high-quality, effective representation for ordinary
                                    citizens throughout the country. Our attorneys pride themselves in standing up for the
                                    rights of people and families who have been wronged by the conduct of others, be it a
                                    personal injury or wrongful death matter, or a case arising out of police abuse or
                                    government misconduct.
                                </p>

                                <p class="about-text-styling">The Cochran Firm has been twice named to the National Law
                                    Journal’s Plaintiff’s Hot List, a listing of the country’s top 12 plaintiff’s law firms.
                                    In addition, our lawyers have garnered some of the highest honors in their field,
                                    including obtaining “AV” ratings from Martindale-Hubbell, being selected to Super
                                    Lawyers, and earning Trial Lawyer of the Year awards from prominent industry
                                    associations.</p>

                                <p class="about-text-styling"> At The Cochran Firm California , our experienced attorneys
                                    are a diverse group of California natives who celebrate and reflect the diversity of the
                                    people we represent. We maintain active ties to the local community, including fostering
                                    a mentoring program in debate for the students at Johnnie L. Cochran, Jr. Middle School
                                    in the heart of Los Angeles’ mid-city neighborhood.</p>

                                <p class="about-text-styling">Through our work in numerous cases involving police misconduct
                                    and other civil rights issues, The Cochran Firm Los Angeles has been responsible for
                                    significant regulatory and procedural changes in the way businesses, police agencies,
                                    hospitals, and doctors conduct themselves, ensuring the safety of Angelinos.</p>

                                <p class="about-text-styling"> If you are in Los Angeles or anywhere in Southern California
                                    and need assistance with a personal injury or wrongful death claim, civil rights matter,
                                    or criminal defense case, contact The Cochran Firm, Los Angeles, today for a free
                                    initial consultation.</p>

                                <p class="about-text-styling">The Cochran Firm Los Angeles was founded over 40 years ago by
                                    the late Johnnie L. Cochran, Jr., one of the country’s most well-known and
                                    well-respected legal advocates.</p>

                                <p class="about-text-styling"> Comprised of a select group of lawyers chosen by Mr. Cochran
                                    himself to carry out his legacy, The Cochran Firm provides high-quality, effective
                                    representation for ordinary citizens throughout the country. Our attorneys pride
                                    themselves in standing up for the rights of people and families who have been wronged by
                                    the conduct of others, be it a personal injury or wrongful death matter, or a case
                                    arising out of police abuse or government misconduct.</p>

                                <p class="about-text-styling">The Cochran Firm has been twice named to the National Law
                                    Journal’s Plaintiff’s Hot List, a listing of the country’s top 12 plaintiff’s law firms.
                                    In addition, our lawyers have garnered some of the highest honors in their field,
                                    including obtaining “AV” ratings from Martindale-Hubbell, being selected to Super
                                    Lawyers, and earning Trial Lawyer of the Year awards from prominent industry
                                    associations.</p>

                                <p class="about-text-styling">At The Cochran Firm California , our experienced attorneys are
                                    a diverse group of California natives who celebrate and reflect the diversity of the
                                    people we represent. We maintain active ties to the local community, including fostering
                                    a mentoring program in debate for the students at Johnnie L. Cochran, Jr. Middle School
                                    in the heart of Los Angeles’ mid-city neighborhood.</p>

                                <p class="about-text-styling">Through our work in numerous cases involving police misconduct
                                    and other civil rights issues, The Cochran Firm California has been responsible for
                                    significant regulatory and procedural changes in the way businesses, police agencies,
                                    hospitals, and doctors conduct themselves, ensuring the safety of Angelinos.</p>

                                <p class="about-text-styling">If you are in Los Angeles or anywhere in California and need
                                    assistance with a personal injury or wrongful death claim, civil rights matter, or
                                    criminal defense case, contact The Cochran Firm California today for a free initial
                                    consultation.</p>


                            </div>

                        </div>
                    </div>
                    </p>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- Start Middle Section -->
    @include('front_end.partials.middle-section')
    <!-- End Middle Section -->
    <img src="{{ asset('front_end_assets/img/line.png') }}" alt="" height="120px" width="3px"
        style="margin-left:50%; margin-top:-140px; margin-bottom:-150px; position: relative; z-index:2">
    @include('front_end.partials.contact-us')
@endsection
