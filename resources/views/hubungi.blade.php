@extends('Layout.app')

@section('content')
<div id="content" class="no-bottom no-top">


    <section class="jarallax">
        <img style="opacity: 0.5" src="images/background/9.jpg" class="jarallax-img" alt="">
        <section id="subheader" class="no-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">

                        <h1>Hubungi Kami</h1>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="containeeer">

                <!-- <span class="big-circle"></span> -->

                <img src="img/shape.png" class="square" alt="" />

                <div class="form">

                    <div class="contact-info">

                        <h3 class="title">Tentang Kami</h3>

                        <h5 class="texxxt">

                           cubicone adalah Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio esse alias obcaecati, at reprehenderit, necessitatibus itaque ab libero tenetur delectus sed, quia sint.

                        </h5><br>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.596396678337!2d112.59028011415602!3d-7.937151281247122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78831666c5a307%3A0x85896c621560b1fd!2sSOLUTIVE!5e0!3m2!1sid!2sid!4v1657179966658!5m2!1sid!2sid" width="100%" height="190" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>



                        <div class="social-media">

                            <p>Connect with us :</p>

                            <div class="social-icons">

                                <a href="https://www.facebook.com/profile.php?id=100072102804726">

                                    <i class="fab fa-facebook-f  icon11"></i>

                                </a>

                                <a href="#">

                                    <i class="fab fa-twitter icon11"></i>

                                </a>

                                <a href="https://www.instagram.com/solutive.id/">

                                    <i class="fab fa-instagram icon11"></i>

                                </a>

                                <a href="https://www.linkedin.com/company/79740001/admin/">

                                    <i class="fab fa-linkedin-in icon11"></i>

                                </a>

                            </div>

                            <br><br>



                        </div>

                    </div>





                    <div class="contact-form">

                        <span class="circle one"></span>

                        <span class="circle two"></span>

                        <form action="index.php" method="post" autocomplete="off">

                            <h3 class="title">Contact us</h3>

                            <div class="input-container">

                                <input type="text" name="nama" class="input" />

                                <label for="">Nama</label>

                                <span>Username</span>

                            </div>

                            <div class="input-container">

                                <input type="email" name="email" class="input" />

                                <label for="">Email</label>

                                <span>Email</span>

                            </div>

                            <div class="input-container">

                                <input type="tel" name="phone" class="input" />

                                <label for="">Phone</label>

                                <span>Phone</span>

                            </div>

                            <div class="input-container textarea">

                                <textarea name="pesan" class="input"></textarea>

                                <label for="">Message</label>

                                <span>Message</span>

                            </div>

                            <input type="submit" value="submit" class="btn" name="submit" />

                        </form>

                        <?php



                        // Check If form submitted, insert form data into users table.

                        if (isset($_POST['submit'])) {

                            $nama = $_POST['nama'];

                            $email = $_POST['email'];

                            $phone = $_POST['phone'];

                            $pesan = $_POST['pesan'];



                            // include database connection file

                            include("db_connect.php");



                            // Insert user data into table

                            $result = mysqli_query($con, "INSERT INTO hubungi(nama,email,phone,pesan) VALUES('$nama','$email','$phone','$pesan')");

                        }

                        ?>



                    </div>

                </div>

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
