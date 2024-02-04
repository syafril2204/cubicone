@extends('Layout.app')

@section('content')
<div id="content" class="no-bottom no-top">


    <section class="jarallax">
        <img src="images/background/7.jpg" class="jarallax-img" alt="">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-6">
                    <div class="spacer-double sm-hide"></div>
                    <img src="images/misc/1.jpg" alt="" class="img-responsive wow fadeInUp" data-wow-duration="1s">
                </div>

                <div class="col-lg-3 col-6">
                    <img src="images/misc/2.jpg" alt="" class="img-responsive wow fadeInUp" data-wow-duration="1.5s">
                </div>

                <div class="col-lg-6 wow fadeIn">
                        <div class="padding20">
                        <h2 class="title mb10">Hotel Kapsul Ideal untuk Solo
                            Traveler di Malang Sejak 2018
                            <span class="small-border"></span>
                        </h2>

                        <p>hotel ini menawarkan pengalaman menginap yang
                            nyaman. Dengan lokasi yang strategis, Cubic One
                            memberikan akses mudah ke pusat keramaian,
                            transportasi, kuliner, dan tempat wisata.</p>

                            <div class="row mb-3">
                                <div class="col-6"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i> lorem ipsum</div>
                                <div class="col-6"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i> lorem ipsum</div>
                                <div class="col-6"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i> lorem ipsum</div>
                                <div class="col-6"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i> lorem ipsum</div>
                            </div>

                        <a href="/" class="btn-line"><span>Hubungi</span> Kami</a>

                        </div>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </section>

</div>

<div class="no-top no-bottom bg-color text-light">
    <div class="container-fluid">
        <div class="row g-0">
            <div class="col-md-4 p-3" data-bgcolor="rgba(0, 0, 0, .2)">
                <div class="info-box padding20">
                    <i class="icon_clock_alt"></i>
                    <div class="info-box_text">
                        <div class="info-box_title">Opening Times</div>
                        <div class="info-box_subtite">Monday - Friday: 09:00 - 18:00</div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-3" data-bgcolor="rgba(0, 0, 0, .4)">
                <div class="info-box padding20">
                    <i class="icon_house_alt"></i>
                    <div class="info-box_text">
                        <div class="info-box_title">Our Location</div>
                        <div class="info-box_subtite">100 S Main St, Los Angeles, CA</div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-3" data-bgcolor="rgba(0, 0, 0, .6)">
                <div class="info-box padding20">
                    <i class="icon_headphones"></i>
                    <div class="info-box_text">
                        <div class="info-box_title">Customer Support</div>
                        <div class="info-box_subtite">+208 333 9296</div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
</div>

<style>

    #supersized-loader{
        display: none;
    }
</style>


@endsection
