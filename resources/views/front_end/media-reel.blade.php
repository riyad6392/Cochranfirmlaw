@extends('front_end.main-template')
@section('section')
    <!-- About bran Dunn -->

    <section id="why-us" class="why-us mt-4">
        <div class="et_pb_row et_pb_row_0">
            <div
                class="et_pb_column et_pb_column_4_4 et_pb_column_0  et_pb_css_mix_blend_mode_passthrough et-last-child">


                <div class="et_pb_module et_pb_text et_pb_text_0  et_pb_text_align_left et_pb_bg_layout_light">


                    <div class="et_pb_text_inner"><h1 style="text-align: center; color: black"><strong>Brian Dunn In The
                                Media</strong></h1></div>
                </div> <!-- .et_pb_text -->
            </div> <!-- .et_pb_column -->


        </div>

        </div>
        {{-- <img src="{{ asset('front_end_assets/img/line.png') }}" alt="" height="90px" width="2px" style="margin-left:50%; margin-top:-40px;"> --}}
    </section>

    <section id="why-us" class="why-us mt-4">
        <div id="about" class="about" style="background-color: #ebebeb !important">
            <div class=" about-us-section">
                <div class="container">
                    <div class="row">
                        @foreach ($media_reels as $media_reel)
                            <div class="col-md-3 mb-3">
                                <div class="border card overflow-hidden shadow-sm">
                                    @php

                                        $videoUrl = $media_reel->video_link;
                                        if (preg_match('/youtube\.com\/watch\?v=([^\&\?\/]+)/', $videoUrl, $id) || preg_match('/youtube\.com\/embed\/([^\&\?\/]+)/', $videoUrl, $id) || preg_match('/youtu\.be\/([^\&\?\/]+)/', $videoUrl, $id)) {
                                            $videoUrl = 'https://www.youtube.com/embed/' . $id[1];
                                        }
                                    @endphp
                                    <iframe width="100%" height="200" src="{{ $videoUrl }}" frameborder="0" allowfullscreen></iframe>

                                    <div class="d-flex justify-content-between  p-2 px-3" >
                                        <h5 class=" mt-2 fs-6 fw-semibold" style="overflow: hidden;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 3;">{{ $media_reel->title }}</h5>

                                        <div class="d-flex justify-content-center align-items-center">
                                        <svg fill="#000000" height="24px" width="24px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            viewBox="0 0 458.624 458.624" xml:space="preserve"
                                            onclick="window.open('{{ $media_reel->video_link }}')"
                                            style="cursor: pointer;"
                                            >
                                            <g>
                                                <g>
                                                    <path d="M339.588,314.529c-14.215,0-27.456,4.133-38.621,11.239l-112.682-78.67c1.809-6.315,2.798-12.976,2.798-19.871
                                                        c0-6.896-0.989-13.557-2.798-19.871l109.64-76.547c11.764,8.356,26.133,13.286,41.662,13.286c39.79,0,72.047-32.257,72.047-72.047
                                                        C411.634,32.258,379.378,0,339.588,0c-39.79,0-72.047,32.257-72.047,72.047c0,5.255,0.578,10.373,1.646,15.308l-112.424,78.491
                                                        c-10.974-6.759-23.892-10.666-37.727-10.666c-39.79,0-72.047,32.257-72.047,72.047s32.256,72.047,72.047,72.047
                                                        c13.834,0,26.753-3.907,37.727-10.666l113.292,79.097c-1.629,6.017-2.514,12.34-2.514,18.872c0,39.79,32.257,72.047,72.047,72.047
                                                        c39.79,0,72.047-32.257,72.047-72.047C411.635,346.787,379.378,314.529,339.588,314.529z"/>
                                                </g>
                                            </g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Bran Dunn -->
@endsection
