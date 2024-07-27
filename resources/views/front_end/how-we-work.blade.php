@extends('front_end.main-template')
@section('hero')
 <!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center px-0" style="background-image:linear-gradient(180deg,rgba(0,0,0,0.53) 0%,rgba(0,0,0,0.63) 100%),url('{{ asset('front_end_assets/img/InTheNewsBackground.webp') }}'); height:250px;">

    <div class="container mt-5 how_work_div1 pt-20 breadcrumb-banner">
        <h1 style="margin-bottom: -17px;" class="about_us_page_head breadcrumb-banner-heading1">{{ strtoupper($howWeWork->title) }}</h1>
        <h2 class="how_work_div1_h2  breadcrumb-banner-heading2" style="font-weight:400; font-size:27px;">MULTI-SERVICE LAW FIRM</h2>

    </div>
</section>
<!-- End Hero -->
@endsection
@section('section')

   <!-- ======= Why Us Section ======= -->
   <section id="why-us" class="why-us" style="height: auto;" >
    <div class="container-fluid" style="box-shadow: 0px 2px 2px rgb(0 0 0 / 5%);border-bottom: 2px solid #c3a43a; padding:5px 0px;">
      <div class="row">

            <div class="col-md-12">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 d-flex align-items-stretch under_links sm_under_links mt-3">
                            <a href="{{ route('home') }}">
                                <h5 class="breadcrumb-link"><b>Home</b></h5>
                            </a>
                            <span class="fa fa-angle-right breadcrumb-angle-icon"></span>

                            <a href="{{ route('how.we.work') }}">
                                <h5 class="breadcrumb-link"><b>About Us</b></h5>
                            </a>
                            <span class="fa fa-angle-right breadcrumb-angle-icon"></span>

                            <a href="{{ route('how.we.work',$howWeWork->id) }}"  class="breadcrumb-active-link"><h5>{{ $howWeWork->title }}</h5></a>
                        </div>
                    </div>
                </div>
            </div>


      </div>
    </div>
  </section>

    <!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
  <section id="about" class="about  bg-light-white pt74 s-pt-50">

            <div class="row" style="margin-left: 25px; padding-right:40px;">


                  {{-- <h1 style="box-sizing: border-box;
                  margin-bottom: -60px;
                  padding: 0px 0px 1em;
                  border: 0px;
                  outline: 0px;
                  font-size: 46px !important;
                  text-size-adjust: 100%;
                  vertical-align: baseline;
                  font-style: normal;
                  font-variant-ligatures: normal;
                  font-variant-caps: normal;
                  letter-spacing: normal;
                  orphans: 2;
                  text-indent: 0px;
                  text-transform: none;
                  widows: 2;
                  word-spacing: 0px;
                  -webkit-text-stroke-width: 0px;
                  white-space: normal;
                  text-decoration: underline;
                  text-align: justify;
                  color: rgb(196, 163, 75);
                  font-weight: 600;
                  font-family: Montserrat;
                  opacity: 0.8;">{{ $howWeWork->title }}</h1> --}}
                  {{-- <p class="mt-4" style="left: 0px; font-family: Montserrat; font-weight: 500; line-height: 1.8em; padding-bottom: 1em; text-align: justify;">{!! $howWeWork->description !!}</p> --}}
                  {!! $howWeWork->description !!}
            </div>

  </section>
    <!-- End About Section -->

    <!-- Start Middle Section -->
     @include('front_end.partials.middle-section')
    <!-- End Middle Section -->
    <img src="{{ asset('front_end_assets/img/line.png') }}" alt="" height="120px" width="3px" style="margin-left:50%; margin-top:-140px; margin-bottom:-150px; position: relative; z-index:2">
     @include('front_end.partials.contact-us')
@endsection
