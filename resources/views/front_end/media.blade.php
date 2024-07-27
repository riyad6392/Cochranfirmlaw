@extends('front_end.main-template')
@section('section')
    <!-- About bran Dunn -->

    <section id="why-us" class="why-us mt-4">
        <div class="et_pb_row et_pb_row_0">
            <div
                class="et_pb_column et_pb_column_4_4 et_pb_column_0  et_pb_css_mix_blend_mode_passthrough et-last-child">


                <div class="et_pb_module et_pb_text et_pb_text_0  et_pb_text_align_left et_pb_bg_layout_light">


                    <div class="et_pb_text_inner">
                        <h1 style="text-align: center; color: black;"><strong>Brian Dunn In The Media</strong></h1>
                    </div>
                </div> <!-- .et_pb_text -->
            </div> <!-- .et_pb_column -->


        </div>

        </div>
        {{-- <img src="{{ asset('front_end_assets/img/line.png') }}" alt="" height="90px" width="2px" style="margin-left:50%; margin-top:-40px;"> --}}
    </section>

    <section id="why-us" class="why-us mt-4">
        <div id="about" class="about" style="background-color: #ebebeb !important">
            <div class="container about-us-section">
                <div class="">
                    <!-- <div class="row"> -->
                        @foreach ($medias as $media)
                            <div class="">
                                <div class="">
                                    @php

                                        $videoUrl = $media->video_link;
                                        if (preg_match('/youtube\.com\/watch\?v=([^\&\?\/]+)/', $videoUrl, $id) || preg_match('/youtube\.com\/embed\/([^\&\?\/]+)/', $videoUrl, $id) || preg_match('/youtu\.be\/([^\&\?\/]+)/', $videoUrl, $id)) {
                                            $videoUrl = 'https://www.youtube.com/embed/' . $id[1];
                                        }
                                    @endphp
                                    <iframe width="100%" height="620" src="{{ $videoUrl }}" frameborder="0"
                                            allowfullscreen></iframe>
                                </div>

                                <div class="faq-list faq_section1" style="background: white!important; padding: 1rem">
                                    <p style="">{!! $media->short_description !!}</p>
                                </div>


                                <div class="faq-list faq_section1" style="background: white!important; padding: 1rem">
                                    <p>{!! $media->description !!}</p>
                                </div>
                            </div>
                        @endforeach
                    <!-- </div> -->
                </div>
            </div>
        </div>

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
    </section>
    <!-- End About Bran Dunn -->
@endsection
