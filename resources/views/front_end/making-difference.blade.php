@extends('front_end.main-template')
@section('hero')
 <!-- ======= Hero Section ======= -->

<section id="hero" class="d-flex align-items-center px-0"
        style="background-image:linear-gradient(180deg,rgba(0,0,0,0.53) 0%,rgba(0,0,0,0.63) 100%),url('{{ asset('front_end_assets/img/makingADifferenceBackground.jpg') }}'); height:250px;">
        <div class="container mt-5 how_work_div1 pt-20 breadcrumb-banner">
            <h1 style="margin-bottom: -17px;" class="about_us_page_head breadcrumb-banner-heading1">GIVING BACK</h1>
            <h2 class="how_work_div1_h2  breadcrumb-banner-heading2" style="font-weight:400; font-size:27px;">OUR COMMITMENT TO THE COMMUNITY</h2>

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

                            <a href="{{ url('makeDifference') }}" class="breadcrumb-active-link">
                                <h5>Making A Difference</h5>
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
                        <img src="{{ asset('front_end_assets/img/makingADifferenceSidebar.webp') }}" alt=""class="making-difference-image">

                    </div>
                </div>
            </div>
            <div class="col-lg-7 icon-boxes d-flex flex-column align-items-stretch px-lg-5 small-right-side-section">
                {{-- @if ($attorney->about_head_one != '')
              <div class="px-5" style="align-items: baseline;">
                <h3>“{{ $attorney->about_head_one ?? "Attorney" }}</h3>
                <h3 style="color: rgb(143, 105, 10); margin-left:10px;">{{ $attorney->about_head_two ?? "Attorney" }}“</h3> --}}
                <h1 class="about_page_head1">ROOTED IN LA
                </h1>
                <h2 class="about_page_head2">GIVING BACK TO THE COMMUNITY
                </h2>
                <p class="about-text-styling">
                    A Cochran Firm attorney, a Cochran firm employee, anyone who is a part of our family, cares about the communities they live in and gives back with time, talent and if possible, treasure. We look for opportunities to lead or assist as part of our role with the Cochran Firm.


                <p>
                    <p class="about-text-styling">
                        We do good works, we honor history, and we make history. Many of our lawyers serve on prestigious legal boards and community education, fundraising and charity boards. To whom much is given, much is required. Just in the last year, for example, there are many specific accomplishments and projects we participated in. Here are some examples:


                    <p>
                    <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg"
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
                            <h1 class="about_page_head1"> ROOTED IN LA
                            </h1>
                            <h2 class="about_page_head2">GIVING BACK TO THE COMMUNITY</h2>
                            <p class="about-text-styling">
                                A Cochran Firm attorney, a Cochran firm employee, anyone who is a part of our family, cares about the communities they live in and gives back with time, talent and if possible, treasure. We look for opportunities to lead or assist as part of our role with the Cochran Firm.

</p>
                            <p class="about-text-styling">
                                We do good works, we honor history, and we make history. Many of our lawyers serve on prestigious legal boards and community education, fundraising and charity boards. To whom much is given, much is required.


                            </p>

                            <p class="about-text-styling">
                                Just in the last year, for example, there are many specific accomplishments and projects we participated in. Here are some examples:


                            </p>

                            <p class="about-text-styling"> The Urban Black Coaches Association featured Brian Dunn as a speaker for their gala event at the Nokia Center in downtown Los Angeles, and the Firm hosted the legendary John Wooten, who was a pioneer in the NFL breaking the color barrier with the Dallas Cowboys in the front office. Coach Wooten regaled us with stories of this history, and the important role Johnnie L. Cochran, Jr. played in integrating the NFL front office ranks.

                            </p>

                            <p class="about-text-styling">TJamon Hicks and Joe Barrett provided information and assistance to local Veterans at the Inglewood American Legion.

                            </p>

                            <p class="about-text-styling"> All our attorneys, and even many law clerks, yet again provide 8th grade students at the Johnnie L. Cochran, Jr. Middle School lessons all year in debate skills, leading up to the annual Great Debate. This program hopes to shape future leaders for California, and is unique in the Los Angeles Unified School system.

                            </p>

                            <p class="about-text-styling">The Cochran Basketball Classic is held annually hosting many of Southern California’s best high school basketball teams in an all-day tournament.

                            </p>

                            <p class="about-text-styling"> The Cochran Firm and all its staff always help provide legal assistance to the community at the Taste of Soul gathering in the heart of the Crenshaw district of Los Angeles.

                            </p>

                            <p class="about-text-styling">Los Angeles Trial Lawyers Charities welcomes Joe Barrett as its next President, providing financial help to Los Angeles’ homeless and disadvantaged population.

                            </p>

                            <p class="about-text-styling">Similarly, the firm is assisting the Inner City Law Center by finding support amongst consumer attorneys and community leaders, as this crucial organization serves our homeless veterans, people living in slumlord conditions, and others needing help in Southern California.

                            </p>

                            <p class="about-text-styling">Ibiere Seck was featured by the Consumer Attorneys Association of California in their magazine “FORUM” for her community work. Ms. Seck has dedicated herself for years, selflessly, volunteering weekdays and weekends, to help those in need at the Mesereau Free Clinic, the Western Center On Law & Poverty, where she serves as a Board Member, and through other organizations serving those needing access to justice.

                            </p>

                            <p class="about-text-styling">Brian Dunn helped an important black history story make it to the screen, “41st & Central: The Untold Story of the L.A. Black Panthers.”

                            </p>


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
    <img src="{{ asset('front_end_assets/img/line.png') }}" alt="" height="120px" width="3px" style="margin-left:50%; margin-top:-140px; margin-bottom:-150px; position: relative; z-index:2">
     @include('front_end.partials.contact-us')
@endsection
