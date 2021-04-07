<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script>
        if (location.protocol !== 'https:' && location.hostname != 'localhost') {
            location.replace(`https:${location.href.substring(location.protocol.length)}`);
        }
    </script>
    <title>Recipey</title>
</head>

<body style="font-family: 'poppins';">
    <nav class="navbar navbar-expand-lg navbar-light bg-light bg-red-500">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <section class="banner--wrapper-area crypto-patern pt-100 mt-100">
        <!-- #region Jssor Slider Begin -->
        <!-- Generator: Jssor Slider Composer -->
        <!-- Source: https://www.jssor.com/demos/banner-slider.slider/=edit -->
        <script src="{{asset('js/jssor.slider-28.0.0.min.js')}}" type="text/javascript"></script>
        <script type="text/javascript">
            window.jssor_1_slider_init = function() {

                var jssor_1_SlideshowTransitions = [{
                        $Duration: 800,
                        x: -0.3,
                        $During: {
                            $Left: [0.3, 0.7]
                        },
                        $Easing: {
                            $Left: $Jease$.$InCubic,
                            $Opacity: $Jease$.$Linear
                        },
                        $Opacity: 2
                    },
                    {
                        $Duration: 800,
                        x: 0.3,
                        $SlideOut: true,
                        $Easing: {
                            $Left: $Jease$.$InCubic,
                            $Opacity: $Jease$.$Linear
                        },
                        $Opacity: 2
                    }
                ];

                var jssor_1_options = {
                    $AutoPlay: 1,
                    $SlideshowOptions: {
                        $Class: $JssorSlideshowRunner$,
                        $Transitions: jssor_1_SlideshowTransitions,
                        $TransitionsOrder: 1
                    },
                    $ArrowNavigatorOptions: {
                        $Class: $JssorArrowNavigator$
                    },
                    $ThumbnailNavigatorOptions: {
                        $Class: $JssorThumbnailNavigator$,
                        $Orientation: 2,
                        $NoDrag: true
                    }
                };

                var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                /*#region responsive code begin*/

                var MAX_WIDTH = 2000;

                function ScaleSlider() {
                    var containerElement = jssor_1_slider.$Elmt.parentNode;
                    var containerWidth = containerElement.clientWidth;

                    if (containerWidth) {

                        var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                        jssor_1_slider.$ScaleWidth(expectedWidth);
                    } else {
                        window.setTimeout(ScaleSlider, 30);
                    }
                }

                ScaleSlider();

                $Jssor$.$AddEvent(window, "load", ScaleSlider);
                $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                /*#endregion responsive code end*/
            };
        </script>
        <style>
            /*jssor slider loading skin spin css*/
            .jssorl-009-spin img {
                animation-name: jssorl-009-spin;
                animation-duration: 1.6s;
                animation-iteration-count: infinite;
                animation-timing-function: linear;
            }

            @keyframes jssorl-009-spin {
                from {
                    transform: rotate(0deg);
                }

                to {
                    transform: rotate(360deg);
                }
            }

            .jssora061 {
                display: block;
                position: absolute;
                cursor: pointer;
            }

            .jssora061 .a {
                fill: none;
                stroke: #fff;
                stroke-width: 360;
                stroke-linecap: round;
            }

            .jssora061:hover {
                opacity: .8;
            }

            .jssora061.jssora061dn {
                opacity: .5;
            }

            .jssora061.jssora061ds {
                opacity: .3;
                pointer-events: none;
            }
        </style>
        <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
            </div>
            <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                <div>
                    <img data-u="image" src="{{asset('img/slider/banner01.jpeg')}}" />
                    <div u="thumb">Tradecoinasset - CRYPTO TRADING
                    </div>
                </div>
                <div>
                    <img data-u="image" src="{{asset('img/slider/banner02.jpeg')}}" />
                    <div u="thumb">Tradecoinasset - CRYPTO TRADING
                    </div>
                </div>
                <div>
                    <img data-u="image" src="{{asset('img/slider/banner03.jpeg')}}" />
                    <div u="thumb">Tradecoinasset - CRYPTO TRADING
                    </div>
                </div>
                <div>
                    <img data-u="image" src="{{asset('img/slider/banner04.jpeg')}}" />
                    <div u="thumb">Tradecoinasset - CRYPTO TRADING
                    </div>
                </div>
                <!-- <div>
                    <img data-u="image" src="{{asset('sky/img/slider/banner5.jpg')}}" />
                    <div u="thumb">Skytradefinance - CRYPTO TRADING
                    </div>
                </div> -->

            </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">image gallery</a>
            <!-- Thumbnail Navigator -->
            <div u="thumbnavigator" style="position:absolute;bottom:0px;left:0px;width:980px;height:50px;color:#FFF;overflow:hidden;cursor:default;background-color:rgba(0,0,0,.5);">
                <div u="slides">
                    <div u="prototype" style="position:absolute;top:0;left:0;width:980px;height:50px;">
                        <div u="thumbnailtemplate" style="position:absolute;top:0;left:0;width:100%;height:100%;font-family:arial,helvetica,verdana;font-weight:normal;line-height:50px;font-size:16px;padding-left:10px;box-sizing:border-box;"></div>
                    </div>
                </div>
            </div>
            <!-- Arrow Navigator -->
            <div data-u="arrowleft" class="jssora061" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <path class="a" d="M11949,1919L5964.9,7771.7c-127.9,125.5-127.9,329.1,0,454.9L11949,14079"></path>
                </svg>
            </div>
            <div data-u="arrowright" class="jssora061" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <path class="a" d="M5869,1919l5984.1,5852.7c127.9,125.5,127.9,329.1,0,454.9L5869,14079"></path>
                </svg>
            </div>
        </div>
        <script type="text/javascript">
            jssor_1_slider_init();
        </script>
        <!-- #endregion Jssor Slider End -->
    </section>

    <section class="my-2">
        <div class="px-3 py-8">
            <div class="bg-gradient-to-br from-red-500 to-red-600 p-3">
                <p class="text-2xl font-black mb-3">Amazing recipes</p>
                <ul class="space-y-2">
                    <li class="font-medium">
                        <i class="mdi mdi-check-circle mr-2"></i>
                        Easy to make
                    </li>
                    <li class="font-medium">
                        <i class="mdi mdi-check-circle mr-2"></i>
                        Step by step tutorial
                    </li>
                    <li class="font-medium">
                        <i class="mdi mdi-check-circle mr-2"></i>
                        Gluten free
                    </li>
                    <li class="font-medium">
                        <i class="mdi mdi-check-circle mr-2"></i>
                        Healthy Ingredients
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="px-3 py-8">
        <div class="row">
            <div class="latest relative py-3 col-md-13">
                <div class="marker absolute top-0 h-2 w-8 bg-red-600"></div>
                <p class="text-2xl font-black">Latest recipes</p>
            </div>
            <div class="recipes row">
                <div class="images relative col-md-4">
                    <img src="{{asset('img/slider/banner01.jpg')}}" alt="">
                    <div class="marker absolute bottom-0 px-3 py-1 w-64 bg-red-600 text-white rounded-r-full">
                        <p class="text-lg m-0 font-black leading-none">Amala</p>
                        <p class="text-xs m-0">Dinner</p>
                    </div>
                </div>
                <div class="images relative col-md-4">
                    <img src="{{asset('img/slider/banner01.jpg')}}" alt="">
                    <div class="marker absolute bottom-0 px-3 py-1 w-64 bg-red-600 text-white rounded-r-full">
                        <p class="text-lg m-0 font-black leading-none">Amala</p>
                        <p class="text-xs m-0">Dinner</p>
                    </div>
                </div>
                <div class="images relative col-md-4">
                    <img src="{{asset('img/slider/banner01.jpg')}}" alt="">
                    <div class="marker absolute bottom-0 px-3 py-1 w-64 bg-red-600 text-white rounded-r-full">
                        <p class="text-lg m-0 font-black leading-none">Amala</p>
                        <p class="text-xs m-0">Dinner</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>

</html>