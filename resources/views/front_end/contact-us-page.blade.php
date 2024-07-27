@extends('front_end.main-template')
@section('hero')
    <!-- ======= Hero Section ======= -->

    <section id="hero" class="d-flex align-items-center px-0"
        style="background-image:linear-gradient(180deg,rgba(0,0,0,0.53) 0%,rgba(0,0,0,0.63) 100%),url('{{ asset('front_end_assets/img/contactusbanner.webp') }}'); height:250px;">

        <div class="container mt-5 how_work_div1 pt-20 breadcrumb-banner">
            <h1 style="margin-bottom: -17px;" class="about_us_page_head breadcrumb-banner-heading1">WE CAN HELP</h1>
            <h2 class="how_work_div1_h2  breadcrumb-banner-heading2" style="font-weight:400; font-size:27px;">DON'T WAIT</h2>

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


                                    <a href="{{ route('contact.us') }}" class="breadcrumb-active-link"><h5 style=" font-size:16px;">Contact Us</h5></a>
                                </div>
                        </div>
                    </div>
                </div>


          </div>
        </div>
      </section>

    @include('front_end.partials.contact-us')
@endsection
