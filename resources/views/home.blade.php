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
                        <h1 class="mb-3 wow fadeInRight"><span class="deco id-color d-block"></span>Cubic One Capsule Malang.</h1>
                        <p class="lead wow fadeInRight" data-wow-delay=".3s">Selamat datang di Cubic One Hotel Capsule, pilihan terbaik untuk penginapan unik dan nyaman di Malang. Kami memadukan desain interior modern yang dirancang dengan gaya minimalis dan dilengkapi dengan berbagai furnitur stylish kami, menciptakan pengalaman menginap yang tak terlupakan di kota Malang.</p>
                        <div class="spacer-10"></div>
                        <a href="/rooms" class="btn-line wow fadeInRight" data-wow-delay=".6s">Selengkapnya </a>
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
                        <h1 class="mb-3 wow fadeInRight"><span class="deco id-color d-block"></span>Home Away from Home</h1>
                        <p class="lead wow fadeInRight" data-wow-delay=".3s">Cubic One Hotel Capsule adalah hotel yang cocok untuk wisatawan atau solo traveler yang ingin menghemat biaya akomodasi, namun tetap ingin mendapatkan kenyamanan dan fasilitas yang memadai. </p>
                        <div class="spacer-10"></div>
                        <a href="/rooms" class="btn-line wow fadeInRight" data-wow-delay=".6s">Selengkapnya </a>
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
                        <h1 class="mb-3 wow fadeInRight"><span class="deco id-color d-block"></span>Cubic One Hotel Capsule Malang</h1>
                        <p class="lead wow fadeInRight" data-wow-delay=".3s">Didirikan sejak tahun 2018, penginapan Cubic One Capsule ini menawarkan pengalaman menginap yang nyaman dan tidak terlupakan di Malang. Dengan pelayanan terbaik kami, pengalaman liburan di Malang menjadi lebih menyenangkan dan memuaskan dengan hotel yang bisa diakses dengan mudah. Jadi temukanlah pengalaman menginap yang unik di Malang dengan Cubic One Capsule Hotel!</p>
                        <div class="spacer-10"></div>
                        <a href="/rooms" class="btn-line wow fadeInRight" data-wow-delay=".6s">Selengkapnya </a>
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
            <a href="#"><i class="fa fa-phone fa-lg"></i></a>
            <a href="#"><i class="fa fa-whatsapp fa-lg"></i></a>
            <a href="#"><i class="fa fa-instagram fa-lg"></i></a>
        </div>
        <span><a href="#">Pesan sekarang</a></span>
    </div>
    <!-- float text close -->



    <div class="no-top no-bottom bg-color text-light">
        <div class="container-fluid">
            <div class="row g-0">
                <div class="col-md-4 p-3" data-bgcolor="rgba(255, 180, 68)">
                    <div class="info-box padding20">
                        <i class="icon_clock_alt"></i>
                        <div class="info-box_text">
                            <div class="info-box_title">Opening Times</div>
                            <div class="info-box_subtite">Monday - Friday: 09:00 - 18:00</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 p-3" data-bgcolor="rgba(255, 165, 0)">
                    <div class="info-box padding20">
                        <i class="icon_house_alt"></i>
                        <div class="info-box_text">
                            <div class="info-box_title">Our Location</div>
                            <div class="info-box_subtite">100 S Main St, Los Angeles, CA</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 p-3" data-bgcolor="rgba(208, 135, 14)">
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
                    <h2 class="title center">Sekitaran cubic one
                        <span class="small-border"></span>
                    </h2>
                </div>
<div class="row">
    <div class="col-lg-3">
         <!--=== Features Image Item ===-->
   <div class="single-features-item mb-40 rounded" >
    <div class="img-holder rounded" style="height: 420px;   background-repeat: no-repeat;
    background-size: cover; background-image: url({{ asset('images/room/2.jpg') }}) ">
        {{-- <img src="{{ asset('assets/images/transportasi/transportasi1.jpg') }}" style="  width: fit-content;" alt="Features Image"> --}}
        <div class="content">
            <div class="text">
                <h4 class="title text-body fs-4">Transportasi
                    rental terdekat</h4>
                <a href="#" class="icon-btn"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            </div>
            <p class="text-body">pilihan perjalanan dan
                reservasi kapal yang beragam</p>
        </div>
    </div>
</div>
    </div>

    <div class="col-lg-3">
        <!--=== Features Image Item ===-->
  <div class="single-features-item mb-40 rounded" >
   <div class="img-holder rounded" style="height: 420px;   background-repeat: no-repeat;
   background-size: cover; background-image: url({{ asset('images/room/2.jpg') }}) ">
       {{-- <img src="{{ asset('assets/images/transportasi/transportasi1.jpg') }}" style="  width: fit-content;" alt="Features Image"> --}}
       <div class="content">
           <div class="text">
               <h4 class="title text-body fs-4">Transportasi
                   rental terdekat</h4>
               <a href="#" class="icon-btn"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
           </div>
           <p class="text-body">pilihan perjalanan dan
               reservasi kapal yang beragam</p>
       </div>
   </div>
</div>
   </div>
   <div class="col-lg-3">
    <!--=== Features Image Item ===-->
<div class="single-features-item mb-40 rounded" >
<div class="img-holder rounded" style="height: 420px;   background-repeat: no-repeat;
background-size: cover; background-image: url({{ asset('images/room/2.jpg') }}) ">
   {{-- <img src="{{ asset('assets/images/transportasi/transportasi1.jpg') }}" style="  width: fit-content;" alt="Features Image"> --}}
   <div class="content">
       <div class="text">
           <h4 class="title text-body fs-4">Transportasi
               rental terdekat</h4>
           <a href="#" class="icon-btn"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
       </div>
       <p class="text-body">pilihan perjalanan dan
           reservasi kapal yang beragam</p>
   </div>
</div>
</div>
</div>
<div class="col-lg-3">
    <!--=== Features Image Item ===-->
<div class="single-features-item mb-40 rounded" >
<div class="img-holder rounded" style="height: 420px;   background-repeat: no-repeat;
background-size: cover; background-image: url({{ asset('images/room/2.jpg') }}) ">
   {{-- <img src="{{ asset('assets/images/transportasi/transportasi1.jpg') }}" style="  width: fit-content;" alt="Features Image"> --}}
   <div class="content">
       <div class="text">
           <h4 class="title text-body fs-4">Transportasi
               rental terdekat</h4>
           <a href="#" class="icon-btn"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
       </div>
       <p class="text-body">pilihan perjalanan dan
           reservasi kapal yang beragam</p>
   </div>
</div>
</div>
</div>
    </div>

</div>
            </div>
        </div>
    </section>

    <section id="section-intro" class="pt60" data-bgcolor="#FFB444">
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
                        <h2 style="color: #5A3D10; -webkit-text-stroke-color:#5A3D10" class="title mb10 fw-bold fs-3 boder-0">Hotel Kapsul Ideal untuk Solo
                            Traveler di Malang Sejak 2018
                            {{-- <span class="small-border"></span> --}}
                        </h2>

                        <p style="color: #5A3D10" class="fw-bold ">Hotel ini menawarkan pengalaman menginap yang
                            nyaman. Dengan lokasi yang strategis, Cubic One
                            memberikan akses mudah ke pusat keramaian,
                            transportasi, kuliner, dan tempat wisata.</p>

                        <a style="color: #5A3D10; border-color:#5A3D10; padding: 10px; border-radius: 5px" href="/" class="btn-line"><span>Hubungi</span> Kami</a>

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
                            <span class="d-testi">Kamar-kamar di hotel ini sangat bersih dan nyaman, dan stafnya sangat luar biasa.
                                Mereka berusaha lebih dari yang diharapkan untuk membuat pengalaman
                                menginap kami menyenangkan.</span>
                            <span class="name">Benedict Mervine, Customer</span>
                        </blockquote>

                        <blockquote class="testimonial-big">
                            <span class="d-testi">Kamar-kamar di hotel ini sangat bersih dan nyaman, dan stafnya sangat luar biasa.
                                Mereka berusaha lebih dari yang diharapkan untuk membuat pengalaman
                                menginap kami menyenangkan.</span>
                            <span class="name">Doretta Mccourtney, Customer</span>
                        </blockquote>

                        <blockquote class="testimonial-big">
                            <span class="d-testi">Kamar-kamar di hotel ini sangat bersih dan nyaman, dan stafnya sangat luar biasa.
                                Mereka berusaha lebih dari yang diharapkan untuk membuat pengalaman
                                menginap kami menyenangkan.</span>
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
                    <div class="col-md-6">&copy; Copyright <script>document.write(new Date().getFullYear());</script> - Cubicone by <span class="id-color"><a href="https://solutive.id">solutive.id</a></span></div>
                    <div class="col-md-6 text-right">

                    </div>
                </div>
            </div>
        </div>
        <a href="#" id="back-to-top"></a>
    </footer>

</div>
@endsection
