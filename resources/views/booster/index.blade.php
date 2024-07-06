@extends('booster.booster_master')
@section('booster')


    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>WELCOME BOOSTER</h1>
                    <h2 class="text-dark fw-bolder">Are you ready to provide service gaming experiance?!</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#" class="btn-get-started scrollto text-dark fw-bolder">Get Started!</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{asset('page7.png')}}" class="img-fluid animated" alt="" style="border-radius: 5%">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

<!-- ======= Clients Section ======= -->
<section id="clients" class="clients section-bg">


    <div class="container">

            <div class="row" data-aos="zoom-in">

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="https://www.svgrepo.com/download/303639/counter-strike-global-offensive-2-logo.svg" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fc/Valorant_logo_-_pink_color_version.svg/1280px-Valorant_logo_-_pink_color_version.svg.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="https://www.fifplay.com/img/public/fifa-23-logo-alt-2.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="https://seeklogo.com/images/A/apex-logo-F74B0C9FCD-seeklogo.com.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="https://www.vhv.rs/dpng/d/412-4121757_call-of-duty-warzone-no-recoil-macro-call.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/72/Overwatch_2_full_logo.svg/2560px-Overwatch_2_full_logo.svg.png" class="img-fluid" alt="">
                </div>

            </div>

    </div>
</section><!-- End Cliens Section -->

    @if(Session::has('error'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{session::get('error')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif


<!-- ======= About Us Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>About Us</h2>
        </div>

        <div class="row content">
            <div class="col-lg-6">


                <p>
                    Welcome to our system, your ultimate destination for online services gaming . At Online Service Gaming ,
                    we are passionate about delivering an exceptional gaming experience to our users.
                    With a dedicated team of gaming enthusiasts, developers, and industry experts,
                    we strive to provide a platform that connects gamers from all walks of life.
                </p>
                <ul>
                    <li><i class="ri-check-double-line"></i> Connect, compete, and interact with like-minded individuals.</li>
                    <li><i class="ri-check-double-line"></i> Focus on innovation, quality, and customer satisfaction.</li>
                    <li><i class="ri-check-double-line"></i> Stay at the forefront of the gaming industry.</li>
                </ul>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
                <p>
                    We are dedicated to providing you with an exceptional gaming experience and look forward to being a part of your gaming journey.
                </p>

            </div>
        </div>

    </div>
</section><!-- End About Us Section -->


<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us section-bg">
    <div class="container-fluid" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
                <div class="content">
                    <h3><strong>We pride ourselves on delivering an unparalleled gaming experience</strong></h3>
                    <p>
                        At Online Service Gaming , we understand that you have numerous choices when it comes to Online Service Gaming .
                    </p>
                </div>

                <div class="accordion-list">
                    <ul>
                        <li>
                            <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Wide range of high-quality games for every preference and skill level. <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                <p>
                                    With a robust and secure platform, we offer a wide range of high-quality games to suit every preference and skill level.
                                    Our dedicated team of gaming experts continually curates and updates our game library to ensure you have access to the latest and most exciting titles.
                                </p>
                            </div>
                        </li>

                        <li>
                            <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Thriving community of passionate gamers for a sense of belonging. <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                <p>
                                    Our thriving community of passionate gamers fosters a sense of belonging and camaraderie, making your gaming journey all the more enjoyable.
                                </p>
                            </div>
                        </li>

                        <li>
                            <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Innovation, quality, and commitment to gaming satisfaction. <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                <p>
                                    Choose Online Service Gaming  for an unmatched gaming adventure that combines innovation, quality, and a commitment to your gaming satisfaction.
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>

            <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("{{asset('boostercs/Arsha/assets/img/why-us.png')}}");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

    </div>
</section><!-- End Why Us Section -->


<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Services</h2>
            <p>At Online Service Gaming , we are committed to providing exceptional gaming services that cater to your every need.
                Our range of services is designed to enhance your gaming experience,
                foster community engagement, and ensure seamless gameplay.</p>
        </div>

        <div class="row">
            <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box">
                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                    <h4><a href="">Diverse Game Library</a></h4>
                    <p>Explore our extensive collection of top-quality games,
                        ranging from popular titles to indie gems, ensuring there's something for every gamer.</p>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box">
                    <div class="icon"><i class="bx bx-file"></i></div>
                    <h4><a href="">Regular Updates</a></h4>
                    <p>Stay at the forefront of gaming trends with regular updates and additions to our game library, ensuring fresh and exciting content.</p>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                <div class="icon-box">
                    <div class="icon"><i class="bx bx-tachometer"></i></div>
                    <h4><a href="">Reliable Servers</a></h4>
                    <p>Enjoy uninterrupted gameplay with our robust server infrastructure, providing a stable and lag-free gaming environment.</p>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
                <div class="icon-box">
                    <div class="icon"><i class="bx bx-layer"></i></div>
                    <h4><a href="">24/7 Support</a></h4>
                    <p>Our dedicated support team is available round the clock to assist you with any inquiries or technical issues you may encounter.</p>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Services Section -->

<!-- ======= Cta Section ======= -->
<section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">

        <div class="row">
            <div class="col-lg-9 text-center text-lg-start">
                <h3 style="color: #01FFFF;">Call To Action</h3>
                <p> Ready to level up your gaming experience? Join Online Service Gaming  today and unlock a world of excitement, competition, and camaraderie.
                    Explore our vast collection of top-quality games, engage with a passionate community of gamers, and immerse yourself in thrilling gameplay.
                </p>
            </div>
            <div class="col-lg-3 cta-btn-container text-center">
                <a class="cta-btn align-middle" href="#hero">Get Started Now!</a>
            </div>
        </div>

    </div>
</section><!-- End Cta Section -->



<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Team</h2>
            <p>Meet Our Talented Team - The Driving Force Behind Our Success.</p>
        </div>

        <div class="row justify-content-lg-center">

            <div class="col-lg-6 " data-aos="zoom-in" data-aos-delay="100">
                <div class="member d-flex align-items-center  ">
                    <div class="pic"><img src="{{asset('page9.jpeg')}}" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>Nuruddin Zaim bin Azahar</h4>
                        <span>Chief Executive Officer</span>
                        <p>Bachelor in Computer Science (Software Engineering)</p>
                        <div class="social">
                            <a href="https://twitter.com/udin_azahar" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
                            <a href="https://www.facebook.com/din.azahar.1/" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
                            <a href="https://www.instagram.com/din.zym/" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/nuruddin-zaim-057133166/" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->
@endsection
