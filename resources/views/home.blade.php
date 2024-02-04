@extends('Layout.app')

@section('content')
<div id="content" class="no-bottom no-top">

    <section id="de-carousel" class="no-top no-bottom carousel slide carousel-fade text-light" data-mdb-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-mdb-target="#de-carousel" data-mdb-slide-to="0" class="active"></li>
        <li data-mdb-target="#de-carousel" data-mdb-slide-to="1"></li>
        <li data-mdb-target="#de-carousel" data-mdb-slide-to="2"></li>
      </ol>

      <!-- Inner -->
      <div class="carousel-inner">
        <!-- Single item -->
        <div class="carousel-item active" data-bgimage="url(images/room/6.jpg)">
          <div class="mask">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="container text-white">
                <div class="row align-items-center">
                    <div class="col-lg-6 sm-mb-30">
                        <h1 class="mb-3 wow fadeInRight"><span class="deco id-color d-block">Special Price</span>Presidential Suite</h1>
                        <p class="lead wow fadeInRight" data-wow-delay=".3s">Room size: 30 ft, 1 King Bed or 2 Single Bed, View Beach, Breakfast Included</p>
                        <div class="spacer-10"></div>
                        <a href="explore.html" class="btn-line wow fadeInRight" data-wow-delay=".6s">View Room Details</a>
                    </div>
                    <!-- <div class="col-lg-6">
                        <img src="images/room/6.jpg" class="img-fluid wow fadeInRight" data-wow-delay=".6s" alt="">
                    </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item" data-bgimage="url(images/room/3.jpg)">
          <div class="mask">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="container text-white">
                <div class="row align-items-center">
                    <div class="col-lg-6 sm-mb-30">
                        <h1 class="mb-3 wow fadeInRight"><span class="deco id-color d-block">Best Seller</span>Premier Room</h1>
                        <p class="lead wow fadeInRight" data-wow-delay=".3s">Room size: 30 ft, 1 King Bed or 2 Single Bed, View Beach, Breakfast Included</p>
                        <div class="spacer-10"></div>
                        <a href="explore.html" class="btn-line wow fadeInRight" data-wow-delay=".6s">View Room Details</a>
                    </div>
                    {{-- <div class="col-lg-6">
                        <img src="images/room/3.jpg" class="img-fluid wow fadeInRight" data-wow-delay=".6s" alt="">
                    </div> --}}
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item" data-bgimage="url(images/room/4.jpg)">
          <div class="mask">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="container text-white">
                <div class="row align-items-center">
                    <div class="col-lg-6 sm-mb-30">
                        <h1 class="mb-3 wow fadeInRight"><span class="deco id-color d-block">Special Price</span>Family Suite</h1>
                        <p class="lead wow fadeInRight" data-wow-delay=".3s">Room size: 30 ft, 1 King Bed or 2 Single Bed, View Beach, Breakfast Included</p>
                        <div class="spacer-10"></div>
                        <a href="explore.html" class="btn-line wow fadeInRight" data-wow-delay=".6s">View Room Details</a>
                    </div>
                    {{-- <div class="col-lg-6">
                        <img src="images/room/4.jpg" class="img-fluid wow fadeInRight" data-wow-delay=".6s" alt="">
                    </div> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
       </div>
      <!-- Inner -->

      <!-- Controls -->
      <a class="carousel-control-prev" href="#de-carousel" role="button" data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#de-carousel" role="button" data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </section>

</div>

<div id="content" class="no-bottom no-top">

    <!-- float text begin -->
    <div class="float-text">
        <div class="de_social-icons">
            <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
            <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
            <a href="#"><i class="fa fa-instagram fa-lg"></i></a>
        </div>
        <span><a href="#">Book Now</a></span>
    </div>
    <!-- float text close -->



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

    <section class="jarallax">
        <img src="images/background/7.jpg" class="jarallax-img" alt="">
        <div class="container">
            <div class="row gx-4">
                <div class="col-lg-12 text-center">
                    <h2 class="title center">Our Rooms
                        <span class="small-border"></span>
                    </h2>
                </div>
                <div class="col-lg-4">
                    <div class="de-room">
                        <div class="d-image">
                            <div class="d-label">only 2 room left</div>
                            <div class="d-details">
                                <span class="d-meta-1">
                                    <img src="images/ui/user.svg" alt="">2 Guests
                                </span>
                                <span class="d-meta-2">
                                    <img src="images/ui/floorplan.svg" alt="">30 ft
                                </span>
                            </div>
                            <a href="room-single.html">
                                <img src="images/room/1.jpg" class="img-fluid" alt="">
                                <img src="images/room/1-alt.jpg" class="d-img-hover img-fluid" alt="">
                            </a>
                        </div>

                        <div class="d-text">
                            <h3>Standard Room</h3>
                            <p>Most hotels and major hospitality companies have set industry standards to classify hotel types. An upscale full-service hotel facility offers luxury...</p>
                            <a href="room-single.html" class="btn-line"><span>Book Now For $29</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="de-room">
                        <div class="d-image">
                            <div class="d-label">only 1 room left</div>
                            <div class="d-details">
                                <span class="d-meta-1">
                                    <img src="images/ui/user.svg" alt="">2 Guests
                                </span>
                                <span class="d-meta-2">
                                    <img src="images/ui/floorplan.svg" alt="">35 ft
                                </span>
                            </div>
                            <a href="room-single.html">
                                <img src="images/room/2.jpg" class="img-fluid" alt="">
                                <img src="images/room/2-alt.jpg" class="d-img-hover img-fluid" alt="">
                            </a>
                        </div>

                        <div class="d-text">
                            <h3>Deluxe Room</h3>
                            <p>Most hotels and major hospitality companies have set industry standards to classify hotel types. An upscale full-service hotel facility offers luxury...</p>
                            <a href="room-single.html" class="btn-line"><span>Book Now For $39</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="de-room">
                        <div class="d-image">
                            <div class="d-label">only 3 room left</div>
                            <div class="d-details">
                                <span class="d-meta-1">
                                    <img src="images/ui/user.svg" alt="">2 Guests
                                </span>
                                <span class="d-meta-2">
                                    <img src="images/ui/floorplan.svg" alt="">40 ft
                                </span>
                            </div>
                            <a href="room-single.html">
                                <img src="images/room/3.jpg" class="img-fluid" alt="">
                                <img src="images/room/3-alt.jpg" class="d-img-hover img-fluid" alt="">
                            </a>
                        </div>

                        <div class="d-text">
                            <h3>Premier Room</h3>
                            <p>Most hotels and major hospitality companies have set industry standards to classify hotel types. An upscale full-service hotel facility offers luxury...</p>
                            <a href="room-single.html" class="btn-line"><span>Book Now For $49</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-intro" class="pt60" data-bgcolor="#79552A">
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
                        <h2 class="title mb10">The Luxury Experience<br>You'll Remember
                            <span class="small-border"></span>
                        </h2>

                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>

                        <a href="#" class="btn-line"><span>Book Now</span>s</a>

                        </div>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </section>

    <section class="jarallax">
        <img src="images/background/4.jpg" class="jarallax-img" alt="">
        <div class="container">
            <div class="row gx-4">
                <div class="col-lg-12 text-center">
                    <h2 class="title center">Testimonials
                        <span class="small-border"></span>
                    </h2>
                </div>

                <div class="col-md-8 offset-md-2 wow fadeInUp">

                    <div id="testimonial-carousel-single" class="owl-carousel owl-theme wow fadeInUp">
                        <blockquote class="testimonial-big">
                            <span class="d-testi">The rooms were clean, very comfortable, and the staff was amazing. They went over and beyond to help make our stay enjoyable. I highly recommend this hotel for anyone visiting downtown</span>
                            <span class="name">Benedict Mervine, Customer</span>
                        </blockquote>

                        <blockquote class="testimonial-big">
                            <span class="d-testi">They were extremely accommodating and allowed us to check in early at like 10am. We got to hotel super early and I didn’t wanna wait. So this was a big plus. The sevice was exceptional as well. Would definitely send a friend there.</span>
                            <span class="name">Doretta Mccourtney, Customer</span>
                        </blockquote>

                        <blockquote class="testimonial-big">
                            <span class="d-testi">I had a wonderful experience at the hotel. Every staff member I encountered, from the valet to the check- in to the cleaning staff were delightful and eager to help! Thank you! Will recommend to my colleagues!</span>
                            <span class="name">Carole Hunckler, Customer</span>
                        </blockquote>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <footer class="no-top pl20 pr20">
        <div class="subfooter">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">&copy; Copyright 2023 - Seaside Hotel by <span class="id-color">Designesia</span></div>
                    <div class="col-md-6 text-right">
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                            <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                            <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                            <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                            <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                            <a href="#"><i class="fa fa-dribbble fa-lg"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" id="back-to-top"></a>
    </footer>

</div>
@endsection
