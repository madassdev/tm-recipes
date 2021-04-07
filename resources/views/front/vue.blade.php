<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="{{ asset('css/modal.css') }}" />
        <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
        <script src="{{ asset('js/app.js') }}"></script>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.9.55/css/materialdesignicons.min.css"
            integrity="sha512-vIgFb4o1CL8iMGoIF7cYiEVFrel13k/BkTGvs0hGfVnlbV6XjAA0M0oEHdWqGdAVRTDID3vIZPOHmKdrMAUChA=="
            crossorigin="anonymous"
        />
        <style>
            .fade {
                -webkit-animation-name: fade;
                -webkit-animation-duration: 1.5s;
                animation-name: fade;
                animation-duration: 1.5s;
            }

            @-webkit-keyframes fade {
                from {
                    opacity: 0.4;
                }
                to {
                    opacity: 1;
                }
            }

            @keyframes fade {
                from {
                    opacity: 0.4;
                }
                to {
                    opacity: 1;
                }
            }
        </style>
        <title>Document</title>
    </head>
    <body class="bg-black">
        <div id="home"></div>
        <script src="{{ asset('js/Home.js') }}"></script>
    </body>
</html>
