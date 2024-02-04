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
                <!-- supersized -->
                <link rel='stylesheet' href="{{asset('js/supersized/css/supersized.css')}}" type='text/css'>
                <link rel='stylesheet' href="{{asset('js/supersized/theme/supersized.shutter.css')}}" type='text/css'>


        <!-- color scheme -->
        <link rel="stylesheet" href="{{asset('css/colors/brown.css')}}" type="text/css" id="colors">
    </head>
    <body >

        <div id="wrapper">
            <!-- header begin -->
            <header class="header-fullwidth menu-expand transparent">
                <div class="container-fluid">
                    <div class="row-fluid">
                        <div class="col-md-12">
                            <!-- logo begin -->
                            <div id="logo">
                                <a href="index.html">
                                    <img class="logo" src="images/logo.png" alt="">
                                </a>
                            </div>
                            <!-- logo close -->

                            <!-- small button begin -->
                            <div id="mo-button-open" class="mo-bo-s1">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                            <!-- small button close -->
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
                                    <a href="index.html">
                                        <img class="logo" src="images/logo.png" alt="">
                                    </a>

                                    <div class="spacer-single"></div>

                                    <!-- mainmenu begin -->
                                    <ul id="mo-menu">
                                        <li>
                                            Home
                                            <ul>
                                                <li><a href="index.html">Fullscreen Slider</a></li>
                                                <li><a href="index-slider-2.html">Fullscreen Slider 2</a></li>
                                                <li><a href="index-slider-3.html">Fullscreen Slider 3</a></li>
                                                <li><a href="index-full-page.html">Full Page</a></li>
                                                <li><a href="index-video-background.html">Fullsreen Video</a></li>
                                                <li><a href="index-room-slider-1.html">New: Room Slider 1</a></li>
                                                <li><a href="index-snowy.html">New: Slider + Snow</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">About</a></li>
                                        <li>
                                            Rooms
                                            <ul>
                                                <li><a href="room-2-cols.html">2 Columns</a></li>
                                                <li><a href="room.html">3 Columns</a></li>
                                                <li><a href="room-single.html">Room Single</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="booking.html">Booking</a></li>
                                        <li><a href="offer.html">Offers</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                        <li><a href="contact.html">Contact</a></li>
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
        <script src="{{asset('js/supersized/js/supersized.3.2.7.js')}}"></script>
        <script src="{{asset('js/supersized/theme/supersized.shutter.min.js')}}"></script>

        <script>
            // <![CDATA[  <-- For SVG support
                (function () {
                    function refreshCSS() {
                        var sheets = [].slice.call(document.getElementsByTagName("link"));
                        var head = document.getElementsByTagName("head")[0];
                        for (var i = 0; i < sheets.length; ++i) {
                            var elem = sheets[i];
                            var parent = elem.parentElement || head;
                            parent.removeChild(elem);
                            var rel = elem.rel;
                            if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
                                var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                                elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
                            }
                            parent.appendChild(elem);
                        }
                    }
                    var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
                    var address = protocol + window.location.host + window.location.pathname + '/ws';
                    var socket = new WebSocket(address);
                    socket.onmessage = function (msg) {
                        if (msg.data == 'reload') window.location.reload();
                        else if (msg.data == 'refreshcss') refreshCSS();
                    };
                    if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
                        console.log('Live reload enabled.');
                        sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
                    }
                })();


        </script>
    </body>
</html>
