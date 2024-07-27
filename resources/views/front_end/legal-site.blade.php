<!doctype html>
<html lang="en">
  <head>
    <style>
        .image-container {
            position: relative;
            display: inline-block;
        }
        .et_pb_button {
            font-size: 20px;
            font-weight: 500;
            padding: 11.3px 2em;
            line-height: 1.7em !important;
            background-color: transparent;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: absolute;
            border: 2px solid;
            border-color: #c4a34b;
            border-radius: 3px;
            -webkit-transition-duration: 0.2s;
            transition-duration: 0.2s;
            -webkit-transition-property: all !important;
            transition-property: all !important;
        }
        .centered-head {
            position: absolute;
            color: #000000!important;
            font-family: 'Montserrat',Helvetica,Arial,Lucida,sans-serif!important;
            top: 45%;
            left: 50%;
            transform: translate(-50%, -50%);
            margin: 0;
        }
        .centered-button {
            position: absolute;
            top: 55%;
            left: 50%;
            transform: translate(-50%, -50%);
            margin: 0;
        }
        .et_pb_button_1 {
            color: #c4a34b!important;
            border-width: 1px!important;
            font-family: 'Montserrat',Helvetica,Arial,Lucida,sans-serif!important;
            background-color: #000000;
        }
        .et_pb_button_1:hover {
            border: unset;
            cursor: pointer;
        }

        .et_pb_button::after {
        content: '➥';
        margin-left: 10px;
        opacity: 0;
        transition: opacity 0.3s ease;
        }

        .et_pb_button:hover::after {
        opacity: 1;
        }
        #docubot_iframe {
            width: 100%;
            height: 368px!important;
        }
        img.image {
        width: 100%;
        height: 100vh;
        object-fit: cover;
        }

        @media (max-width: 767px) {
            .image {
                height: 100vh;
            }
            .centered-head{
                width: 100%;
                text-align: center
            }
            .et_pb_bg_layout_light{
                width: 70%;
                margin-top: 20px;
                text-align: center
            }

        }

        .modal::after {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.55);
            z-index: 1050;
        }

        .modal {
            z-index: 1051;
        }


        .modal-content {
            position: relative;
            z-index: 1052;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Legal Content</title>
    <link rel="icon" type="image/x-icon" href="">
  </head>
  <body>
    @include('front_end.partials.nav-bar')
    <div class="image-container">
        <img class="image" src="{{asset('front_end_assets/img/middle.webp')}}" alt="">
        <h1 class="centered-head">Get Legal Help Now</h1>
        <a class="et_pb_button centered-button et_pb_button_1 et_pb_bg_layout_light" style="text-decoration: unset !important;margin-top: 20px" data-bs-toggle="modal" data-bs-target="#chatBot">CHAT NOW</a>
    </div>


    <div class="modal fade" id="chatBot" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #c4a34b!important;">
               <h4 class="modal-title" id="exampleModalLabel">Chat With Us</h4>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="margin-bottom: 5px !important;">
                <!-- <div class="et_pb_text_inner"> -->
                    <iframe id="docubot_iframe" autofocus="" loading="lazy" class="w-full h-full" src="https://docubotembed.1law.com?d=5c058ec1e2aba3000148cb18&amp;c=6127d79ad17dcd27e0c9a226&amp;s=Q9%40%3FmLcH5Z%60%23%3EeF5%40UYAg8Bhq%3A%3C%3F~D&amp;primaryColor=%23c4a34b&amp;primaryColorContrast=%23ffffff&amp;bg=%23ffffff&amp;secondaryColor=%236A6A6A&amp;secondaryColorContrast=%23ffffff"></iframe>
                <!-- </div> -->
            </div>
            <!-- <div class="modal-footer">
            </div> -->
        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
