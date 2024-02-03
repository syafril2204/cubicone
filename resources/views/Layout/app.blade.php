<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="utf-8">
        <title>Cubicone</title>
        <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">

        <!-- CSS Files
        ================================================== -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css" id="bootstrap">
        <link rel="stylesheet" href="{{asset('css/plugins.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/color.css')}}" type="text/css">

        <!-- color scheme -->
        <link rel="stylesheet" href="{{asset('css/colors/brown.css')}}" type="text/css" id="colors">
    </head>
    <body class="has-menu-bar">

        <div id="wrapper">
            <!-- header begin -->
            <header class="header-fullwidth transparent">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="de-flex">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="02-index.html">
                                            <img class="logo" src="images/logo.png" alt="">
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>

                                <div class="de-flex-col">

                                    <ul id="mainmenu">
                                        <li>
                                            <a href="#">Home</a>
                                            <ul>
                                                <li><a href="02-index.html">Fullscreen Slider</a></li>
                                                <li><a href="02-index-slider-2.html">Fullscreen Slider 2</a></li>
                                                <li><a href="02-index-slider-3.html">Fullscreen Slider 3</a></li>
                                                <li><a href="02-index-full-page.html">Full Page</a></li>
                                                <li><a href="02-index-video-background.html">Fullsreen Video</a></li>
                                                <li><a href="02-index-room-slider-1.html">New: Room Slider 1</a></li>
                                                <li><a href="02-index-snowy.html">New: Slider + Snow</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="02-about.html">About</a></li>
                                        <li>
                                            <a href="#">Rooms</a>
                                            <ul>
                                                <li><a href="02-room-2-cols.html">2 Columns</a></li>
                                                <li><a href="02-room.html">3 Columns</a></li>
                                                <li><a href="02-room-single.html">Room Single</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="02-booking.html">Booking</a></li>
                                        <li><a href="02-offer.html">Offers</a></li>
                                        <li><a href="02-blog.html">Blog</a></li>
                                        <li><a href="02-gallery.html">Gallery</a></li>
                                        <li><a href="02-contact.html">Contact</a></li>
                                    </ul>
                                </div>

                                <div class="de-flex-col">
                                    <div class="d-extra">
                                        <a class="btn-main" href="02-booking.html">Booking</a>
                                    </div>
                                    <div id="menu-btn"></div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </header>
            <!-- header close -->

            <!-- menu overlay begin -->
            <div id="menu-overlay" class="slideDown">
                <div class="container-fluid">
                    <div class="row-fluid">
                        <div class="col-md-12">
                            <div id="mo-button-close">
                                <div class="line-1"></div>
                                <div class="line-2"></div>
                            </div>

                            <div class="pt80 pb80">
                                <div class="mo-nav text-center">
                                    <a href="02-index.html">
                                        <img class="logo" src="images/logo.png" alt="">
                                    </a>

                                    <div class="spacer-single"></div>

                                    <!-- mainmenu begin -->
                                    <ul id="mo-menu">
                                        <li>
                                            Home
                                            <ul>
                                                <li><a href="02-index.html">Fullscreen Slider</a></li>
                                                <li><a href="02-index-slider-2.html">Fullscreen Slider 2</a></li>
                                                <li><a href="02-index-slider-3.html">Fullscreen Slider 3</a></li>
                                                <li><a href="02-index-full-page.html">Full Page</a></li>
                                                <li><a href="02-index-video-background.html">Fullsreen Video</a></li>
                                                <li><a href="02-index-room-slider-1.html">New: Room Slider 1</a></li>
                                                <li><a href="02-index-snowy.html">New: Slider + Snow</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="02-about.html">About</a></li>
                                        <li>
                                            Rooms
                                            <ul>
                                                <li><a href="02-room-2-cols.html">2 Columns</a></li>
                                                <li><a href="02-room.html">3 Columns</a></li>
                                                <li><a href="02-room-single.html">Room Single</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="02-booking.html">Booking</a></li>
                                        <li><a href="offer.html">Offers</a></li>
                                        <li><a href="02-blog.html">Blog</a></li>
                                        <li><a href="02-gallery.html">Gallery</a></li>
                                        <li><a href="02-contact.html">Contact</a></li>
                                    </ul>
                                    <!-- mainmenu close -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @yield('content')

        <script src="{{asset('js/plugins.js')}}"></script>
        <script src="{{asset('js/designesia.js')}}"></script>

    </body>
</html>
