@extends('front_end.main-template')
@section('section')
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us mt-4">
            <div class="et_pb_row et_pb_row_0">
                <div class="et_pb_column et_pb_column_4_4 et_pb_column_0  et_pb_css_mix_blend_mode_passthrough et-last-child">


                    <div class="et_pb_module et_pb_text et_pb_text_0  et_pb_text_align_left et_pb_bg_layout_light">


                        <div class="et_pb_text_inner"><h1 style="text-align: center;"><strong>{{$opinions->title}}</strong></h1></div>
                    </div> <!-- .et_pb_text -->
                </div> <!-- .et_pb_column -->


            </div>

        </div>
        {{-- <img src="{{ asset('front_end_assets/img/line.png') }}" alt="" height="90px" width="2px" style="margin-left:50%; margin-top:-40px;"> --}}
    </section>

    <!-- About bran Dunn -->
    <section id="why-us" class="why-us mt-4">
    <div id="about" class="about     background-color: #ebebeb !important">
        <div class="container-fluid bg-light-white about-us-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 faq_section_one why-choose-us-sec">
                        <div class="section-title sm_why ml992-0">
                        </div>

                        <div class="faq-list faq_section1">
                            <p>{{$opinions->short_description}}</p>
                        </div>

                    </div>
                    <div class="col-md-5 why_image" style="margin-top: 0px">
                        <img src="{{ Storage::url($opinions->image) }}" alt="" width="545"
                             height="550px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- End About Bran Dunn -->

    <!-- Start Middle Section -->

    <!-- End service_provided Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg" style="padding-top: 0px;">
        <div id="about" class="about">
            <div class="container-fluid bg-light-white about-us-section">
                <div class="container">
                    <p>{{$opinions->description}}</p>
                </div>
            </div>
        </div>
    </section>


@endsection
