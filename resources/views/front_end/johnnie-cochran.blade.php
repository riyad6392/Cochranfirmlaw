@extends('front_end.main-template')
@section('hero')
    <!-- ======= Hero Section ======= -->



    <section id="hero" class="d-flex align-items-center px-0"
        style="background-image:linear-gradient(180deg,rgba(0,0,0,0.53) 0%,rgba(0,0,0,0.63) 100%),url('{{ asset('front_end_assets/img/InTheNewsBackground.webp') }}'); height:250px;">
        <div class="container mt-5 how_work_div1 pt-20 breadcrumb-banner">
            <h1 style="margin-bottom: -17px;" class="about_us_page_head breadcrumb-banner-heading1">JOHNNIE L. COCHRAN</h1>
            <h2 class="how_work_div1_h2  breadcrumb-banner-heading2" style="font-weight:400; font-size:27px;">OUR FOUNDING
                ATTORNEY</h2>

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

                                <a href="{{ route('practice.areas') }}">
                                    <h5 class="breadcrumb-link"><b>About Us</b></h5>
                                </a>
                                <span class="fa fa-angle-right breadcrumb-angle-icon"></span>

                                <a href="#" class="breadcrumb-active-link">
                                    <h5>JOHNNIE L. COCHRAN</h5>
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
    <section id="about" class="about bg-light-white pt90 s-pt-50" style="margin-top:0px; height:auto;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 icon-boxes d-flex flex-column align-items-stretch des_1 ">
                    {{-- @if ($attorney->about_head_one != '')
                  <div class="px-5" style="align-items: baseline;">
                    <h3>“{{ $attorney->about_head_one ?? "Attorney" }}</h3>
                    <h3 style="color: rgb(143, 105, 10); margin-left:10px;">{{ $attorney->about_head_two ?? "Attorney" }}“</h3> --}}
                    <h1 class="about_page_head1"> Johnnie L. Cochran, Jr.</h1>
                    <p class="single_page_description sm_single_page_description des_1"
                        style="margin-top:20px; left: 0px; font-family: Montserrat; font-weight: 500; line-height: 1.8em; padding-bottom: 1em; text-align: justify;">
                        has been recognized as an outstanding trial lawyer, civil libertarian and philanthropist throughout
                        the world. As a seasoned litigator, Johnnie was considered to be one of the leading authorities on
                        the criminal and civil justice system, as well as an international leader in the legal profession..
                        <br> <br>

                        Born in Shreveport, Louisiana, Johnnie Cochran moved with his family to California. With an
                        undergraduate degree in Business Administration from the University of California at Los Angeles,
                        Johnnie attended Loyola Law School in Los Angeles where he earned his Juris Doctorate..
                    </p>

                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5 img-box d-flex justify-content-center align-items-stretch position-relative johnnie">
                    <img src="{{ asset('front_end_assets/img/johnnie-cochran.webp') }}" alt="" class="w-100">
                    {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a> --}}
                </div>

            </div>

            <p class="mt-4"
                style="font-family: 'Montserrat',Helvetica,Arial,Lucida,sans-serif;
            font-weight: 500;
            font-size: 18px;
            line-height: 1.8em; left: 0px; font-family: Montserrat; font-weight: 500; line-height: 1.8em; padding-bottom: 1em; text-align: justify;">
                Johnnie’s early legal career began in the City Attorney’s Office in Los Angeles in 1963 where he was
                assigned to the criminal division. After several years, he entered private practice and founded a Los
                Angeles-based law firm where he developed a practice handling a substantial volume of civil and criminal
                cases. <br> <br>

                In 1978, he was invited to serve as the Assistant District Attorney of Los Angeles County. As the third
                ranking lawyer in the nation’s largest law office, he had general administrative responsibility for six
                hundred lawyers. <br><br>

                In 1981, he returned to private practice where he soon began obtaining record verdicts for victims of
                negligence. As his remarkable achievements continued, Johnnie settled or tried to verdict numerous landmark,
                high-profile cases. It was Johnnie’s role as lead counsel for the O.J. Simpson case that brought him
                international recognition. He was the only attorney in Los Angeles ever to receive both the “Civil Trial
                Lawyer of the Year” Award and the “Criminal Trial Lawyer of the Year” Award. In 1995, he was named
                “America’s Trial Lawyer of the Year” by The National Law Journal, as well as being named one of the
                “Headliners of the Year” by Time magazine. In 1999, he was named one of the “Top 50 Trial Attorneys of 1999”
                by the Los Angeles Business Journal. <br><br>

                In 1996, Johnnie was elected for membership into the Inner Circle of Advocates, an exclusive organization
                composed of the top 100 personal injury lawyers in America. He further held the distinction of being
                inducted into the American College of Trial Lawyers, an organization whose membership consists of the top
                one percent of trial lawyers in the United States. He was also inducted into the prestigious International
                Academy of Trial Lawyers, comprised of leading trial attorneys from throughout the world. <br><br>

                In addition to his professional career, Johnnie published two autobiographies. 1996’s “Journey to Justice”
                became a best seller, followed by “A Lawyer’s Life” in 2002. Johnnie was also committed to community
                outreach programs, helping to establish the Johnnie L. Cochran, Jr. Academy of Legal Studies and Community
                Service in East Orange, New Jersey, the Johnnie L. Cochran, Jr. Center for Early Learning At Second Baptist
                Church in Los Angeles, and scholarship funds for the University of California at Los Angeles, the University
                of New Mexico School of Law, and the Southern University School of Law in Baton Rouge, Louisiana. <br><br>

                It was Johnnie’s dream to bring justice to all Americans who suffer because of the wrongdoing of
                individuals, corporations, or governmental entities. This dream was realized when Johnnie became founding
                partner of the national law firm of Cochran, Cherry, Givens and Smith, P.C. The Cochran Firm, as it is known
                today, is located in major cities throughout the United States, offering extensive resources, legal talent,
                and leadership to its clients. <br> <br>

                Johnnie L. Cochran, Jr. may have become well-known for his representation of celebrities in high-profile and
                groundbreaking cases, but his true measure of success came from his lifelong dedication in the fight for the
                injured and the disenfranchised throughout America.
            </p>

        </div>
        <div class="youtube_video" style="position: relative">
            <iframe width="600" height="350" src="https://www.youtube.com/embed/FGDmAbTthjA?si=CeEUTeRxzXx7oJ59">
            </iframe>
            {{-- <a href="https://youtu.be/FGDmAbTthjA?si=oj8Dh16mBNPaGQOq" class="btn" target="_blank" style="text-decoration: none;">
        <i class="fa-brands fa-youtube fa-5x" style="color: red;" ></i>
        <i class="fa-solid fa-play play_white fa-2x" style="color: #ffffff;"></i>
      </a> --}}
        </div>
        {{-- <div>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/FGDmAbTthjA?si=PFXH4ZnC3JkaWl7E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div> --}}
    </section>
    <!-- End About Section -->

    <!-- Start Middle Section -->
    @include('front_end.partials.middle-section')
    <!-- End Middle Section -->
    <img src="{{ asset('front_end_assets/img/line.png') }}" alt="" height="120px" width="3px"
        style="margin-left:50%; margin-top:-140px; margin-bottom:-150px; position: relative; z-index:2">
    @include('front_end.partials.contact-us')
@endsection
