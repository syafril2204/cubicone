@extends('Layout.app')

@section('content')



<div id="background" data-bgimage="url(images/room-single/bg.jpg) fixed"></div>
<div id="content-absolute">
    <style>

#supersized-loader{
    display: none !important;
}
    </style>

    <!-- subheader -->
    <section id="subheader" class="no-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    {{-- <h4>Luxury</h4> --}}
                    <h1>Room & Facilities</h1>
                </div>
            </div>
        </div>
    </section>

    <section id="section-main" class="no-bg no-top" aria-label="section-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="de-content-overlay">
                    <div class="d-carousel wow fadeInRight" data-wow-delay="2s">
                        <div id="carousel-rooms" class="owl-carousel owl-theme">

                            <div class="item">
                                <div class="picframe">
                                    <a class="image-popup-gallery" href="images/room-single/pf%20(1).jpg">
                                        <span class="overlay">
                                            <span class="pf_title">
                                                <i class="icon_search"></i>
                                            </span>
                                            <span class="pf_caption">
                                                King size bed
                                            </span>
                                        </span>
                                    </a>

                                    <img src="images/room-single/pf%20(1).jpg" alt="">
                                </div>
                            </div>

                            <div class="item">
                                <div class="picframe">
                                    <a class="image-popup-gallery" href="images/room-single/pf%20(2).jpg">
                                        <span class="overlay">
                                            <span class="pf_title">
                                                <i class="icon_search"></i>
                                            </span>
                                            <span class="pf_caption">
                                                Balcony with ocean view
                                            </span>
                                        </span>
                                    </a>

                                    <img src="images/room-single/pf%20(2).jpg" alt="">
                                </div>
                            </div>

                            <div class="item">
                                <div class="picframe">
                                    <a class="image-popup-gallery" href="images/room-single/pf%20(3).jpg">
                                        <span class="overlay">
                                            <span class="pf_title">
                                                <i class="icon_search"></i>
                                            </span>
                                            <span class="pf_caption">
                                                Large bathroom
                                            </span>
                                        </span>
                                    </a>

                                    <img src="images/room-single/pf%20(3).jpg" alt="">
                                </div>
                            </div>

                            <div class="item">
                                <div class="picframe">
                                    <a class="image-popup-gallery" href="images/room-single/pf%20(4).jpg">
                                        <span class="overlay">
                                            <span class="pf_title">
                                                <i class="icon_search"></i>
                                            </span>
                                            <span class="pf_caption">
                                                Swimming pool
                                            </span>
                                        </span>
                                    </a>

                                    <img src="images/room-single/pf%20(4).jpg" alt="">
                                </div>
                            </div>

                            <div class="item">
                                <div class="picframe">
                                    <a class="image-popup-gallery" href="images/room-single/pf%20(5).jpg">
                                        <span class="overlay">
                                            <span class="pf_title">
                                                <i class="icon_search"></i>
                                            </span>
                                            <span class="pf_caption">
                                                Relaxing
                                            </span>
                                        </span>
                                    </a>

                                    <img src="images/room-single/pf%20(5).jpg" alt="">
                                </div>
                            </div>

                            <div class="item">
                                <div class="picframe">
                                    <a class="image-popup-gallery" href="images/room-single/pf%20(6).jpg">
                                        <span class="overlay">
                                            <span class="pf_title">
                                                <i class="icon_search"></i>
                                            </span>
                                            <span class="pf_caption">
                                                Free massage
                                            </span>
                                        </span>
                                    </a>

                                    <img src="images/room-single/pf%20(6).jpg" alt="">
                                </div>
                            </div>

                            <div class="item">
                                <div class="picframe">
                                    <a class="image-popup-gallery" href="images/room-single/pf%20(7).jpg">
                                        <span class="overlay">
                                            <span class="pf_title">
                                                <i class="icon_search"></i>
                                            </span>
                                            <span class="pf_caption">
                                                Extra bed
                                            </span>
                                        </span>
                                    </a>

                                    <img src="images/room-single/pf%20(7).jpg" alt="">
                                </div>
                            </div>

                        </div>

                        <div class="d-arrow-left mod-a"><i class="fa fa-angle-left"></i></div>
                        <div class="d-arrow-right mod-a"><i class="fa fa-angle-right"></i></div>

                    </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-room-details de-flex">
                                    <div class="de-flex-col">
                                        <img src="images/ui/user.svg" alt="">4 Guests
                                    </div>
                                    <div class="de-flex-col">
                                        <img src="images/ui/floorplan.svg" alt="">70 ft
                                    </div>
                                    <div class="de-flex-col">
                                        <img src="images/ui/bed.svg" alt="">$79 / Night
                                    </div>
                                    <div class="de-flex-col">
                                        <a href="02-booking.html" class="btn-main"><span>Book Now</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3>Room Overview</h3>
                                <p>Amet nulla officia duis reprehenderit do labore aute pariatur anim consequat ullamco elit in duis incididunt eu officia do voluptate anim nulla officia id cillum esse in velit anim dolor enim exercitation veniam do deserunt dolor in id dolor culpa reprehenderit aute cillum amet sunt mollit incididunt quis qui ut enim adipisicing nostrud aliquip esse nostrud duis enim nisi id in est ea incididunt pariatur non aute ullamco dolor est duis ut sint magna sint laboris dolore nulla et ut reprehenderit dolore consequat magna aliqua dolor in cupidatat ut consequat amet eiusmod qui adipisicing deserunt ullamco est mollit mollit tempor cillum enim est consectetur pariatur nulla fugiat deserunt dolore nisi laboris pariatur et nisi fugiat dolore cupidatat id consectetur aliqua in adipisicing enim in ullamco do id sit nulla sint ea ea pariatur adipisicing dolor tempor dolor eiusmod non.</p>
                            </div>
                            <div class="col-md-4">
                                <h3>Room Facilities</h3>
                                <ul class="ul-style-2">
                                    <li>48" HD TV with more than 60 channels</li>
                                    <li>Coffee and tea makers</li>
                                    <li>Hot &amp; cold bathing</li>
                                    <li>High comfortable mattress bed</li>
                                    <li>Hight quality bed sheets</li>
                                    <li>Free WIFI internet connection</li>
                                    <li>Connecting room by request</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-main" class="no-bg no-top" aria-label="section-menu">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="de-room">
                        <div class="d-image">

                            <div class="d-details">
                                <span class="d-meta-1">
                                    <img src="images/ui/user.svg" alt="">2 Guests
                                </span>
                                <span class="d-meta-2">
                                    <img src="images/ui/floorplan.svg" alt="">30 ft
                                </span>
                            </div>
                            <a href="02-room-single.html">
                                <img src="images/room/1.jpg" class="img-fluid" alt="">
                                <img src="images/room/1-alt.jpg" class="d-img-hover img-fluid" alt="">
                            </a>
                        </div>

                        <div class="d-text">
                            <h3>Standard Room</h3>
                            <p>Most hotels and major hospitality companies have set industry standards to classify hotel types. An upscale full-service hotel facility offers luxury...</p>

                            <h3>Room Facilities</h3>
                            <ul class="ul-style-2">
                                <li>48" HD TV with more than 60 channels</li>
                                <li>Coffee and tea makers</li>
                                <li>Hot &amp; cold bathing</li>
                                <li>High comfortable mattress bed</li>
                                <li>Hight quality bed sheets</li>
                                <li>Free WIFI internet connection</li>
                                <li>Connecting room by request</li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="de-room">
                        <div class="d-image">

                            <div class="d-details">
                                <span class="d-meta-1">
                                    <img src="images/ui/user.svg" alt="">2 Guests
                                </span>
                                <span class="d-meta-2">
                                    <img src="images/ui/floorplan.svg" alt="">35 ft
                                </span>
                            </div>
                            <a href="02-room-single.html">
                                <img src="images/room/2.jpg" class="img-fluid" alt="">
                                <img src="images/room/2-alt.jpg" class="d-img-hover img-fluid" alt="">
                            </a>
                        </div>

                        <div class="d-text">
                            <h3>Deluxe Room</h3>
                            <p>Most hotels and major hospitality companies have set industry standards to classify hotel types. An upscale full-service hotel facility offers luxury...</p>
                            <h3>Room Facilities</h3>
                            <ul class="ul-style-2">
                                <li>48" HD TV with more than 60 channels</li>
                                <li>Coffee and tea makers</li>
                                <li>Hot &amp; cold bathing</li>
                                <li>High comfortable mattress bed</li>
                                <li>Hight quality bed sheets</li>
                                <li>Free WIFI internet connection</li>
                                <li>Connecting room by request</li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="de-room">
                        <div class="d-image">

                            <div class="d-details">
                                <span class="d-meta-1">
                                    <img src="images/ui/user.svg" alt="">2 Guests
                                </span>
                                <span class="d-meta-2">
                                    <img src="images/ui/floorplan.svg" alt="">40 ft
                                </span>
                            </div>
                            <a href="02-room-single.html">
                                <img src="images/room/3.jpg" class="img-fluid" alt="">
                                <img src="images/room/3-alt.jpg" class="d-img-hover img-fluid" alt="">
                            </a>
                        </div>

                        <div class="d-text">
                            <h3>Premier Room</h3>
                            <p>Most hotels and major hospitality companies have set industry standards to classify hotel types. An upscale full-service hotel facility offers luxury...</p>
                            <h3>Room Facilities</h3>
                            <ul class="ul-style-2">
                                <li>48" HD TV with more than 60 channels</li>
                                <li>Coffee and tea makers</li>
                                <li>Hot &amp; cold bathing</li>
                                <li>High comfortable mattress bed</li>
                                <li>Hight quality bed sheets</li>
                                <li>Free WIFI internet connection</li>
                                <li>Connecting room by request</li>
                            </ul>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- subheader close -->
    <!-- footer begin -->

    <!-- footer close -->
</div>

@endsection
