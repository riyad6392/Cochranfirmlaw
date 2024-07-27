@extends('front_end.main-template')
@section('section')
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us mt-4">
        <div class="et_pb_row et_pb_row_0">
            <div class="et_pb_column et_pb_column_4_4 et_pb_column_0  et_pb_css_mix_blend_mode_passthrough et-last-child">


                <div class="et_pb_module et_pb_text et_pb_text_0  et_pb_text_align_left et_pb_bg_layout_light">


                    <!-- <div class="et_pb_text_inner"><h1 style="text-align: center;"><strong>{{$accomplisments->title}}</strong></h1></div> -->
                </div> <!-- .et_pb_text -->
            </div> <!-- .et_pb_column -->


        </div>

        </div>
        {{-- <img src="{{ asset('front_end_assets/img/line.png') }}" alt="" height="90px" width="2px" style="margin-left:50%; margin-top:-40px;"> --}}
    </section>

    <!-- About bran Dunn -->
    <section id="why-us" class="why-us mt-4">
        <div id="about" class="about   ">
            <div class="container-fluid about-us-section" style="padding-top: 0px">

{{--                <div class="bg-light-white">--}}
{{--                    <div class="container py-5">--}}
{{--                        @php--}}

{{--                            $videoUrl = $accomplisments->video_link;--}}
{{--                            if (preg_match('/youtube\.com\/watch\?v=([^\&\?\/]+)/', $videoUrl, $id) || preg_match('/youtube\.com\/embed\/([^\&\?\/]+)/', $videoUrl, $id) || preg_match('/youtu\.be\/([^\&\?\/]+)/', $videoUrl, $id)) {--}}
{{--                                $videoUrl = 'https://www.youtube.com/embed/' . $id[1];--}}
{{--                            }--}}
{{--                        @endphp--}}
{{--                        <iframe width="100%" height="620px" src="{{ $videoUrl }}" frameborder="0" allowfullscreen></iframe>--}}
{{--                    </div>--}}
{{--                </div>--}}


                <div class="container"  style="background: white!important; padding-top: 2rem; padding-bottom: .3rem">
                    <div class="row">
                        <div class="col-md-12 faq_section_one why-choose-us-sec">
                            <div class="section-title sm_why ml992-0">
                            </div>

                            <div class="faq-list faq_section1">
                                <p>{!! $accomplisments->short_description !!}</p>
                            </div>

                        </div>
{{--                        <div class="col-md-5 why_image" style="margin-top: 0px">--}}
{{--                            <img src="{{ Storage::url($accomplisments->image) }}" alt="" width="545"--}}
{{--                                 height="550px">--}}
{{--                        </div>--}}


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
                <div class="container"  style=" padding-top: .3rem; padding-bottom: .3rem">
                    <p>{!! $accomplisments->description !!}</p>
                </div>
            </div>
        </div>
    </section>


@endsection

<style>
    /* h3{
        font-size: 1.5rem!important;
        margin-bottom: .5rem!important;
    }

    p{
        font-size: 1rem!important;
        margin-bottom: 2.5rem!important;
    } */
</style>
