{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <link rel="shortcut icon" href="{{asset('favicon.ico')}}">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Dashboard') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 bg-white border-b border-gray-200">--}}
{{--                    You're logged in!--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-app-layout>--}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Online Service Gaming </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('boostercs/Arsha/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('boostercs/Arsha/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('boostercs/Arsha/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('boostercs/Arsha/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('boostercs/Arsha/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('boostercs/Arsha/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('boostercs/Arsha/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('boostercs/Arsha/assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Arsha
    * Updated: May 30 2023 with Bootstrap v5.3.0
    * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="{{url('/dashboard')}}">Online Service Gaming </a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto " href="{{route('gamer.booster')}}">Booster</a></li>
                <li class="dropdown" ><a href="#"><span>Games</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{route('games.csgo')}}">CSGO</a></li>
                        <li><a href="{{route('games.valorant')}}">Valorant</a></li>
                        <li><a href="{{route('games.fifa23')}}">FIFA 23</a></li>
                        <li><a href="{{route('games.apexlegends')}}">Apex Legend</a></li>
                        <li><a href="{{route('games.warzone')}}">Call Of Duty:Warzone</a></li>
                        <li><a href="{{route('games.overwatch')}}">Overwatch 2</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a href="#"><span>{{ Auth::user()->name }}</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route('gamer.dashboard') }}">Profile</a></li>
                        <li><form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>


        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <h1>WELCOME GAMER</h1>
                <h2 class="text-dark fw-bolder">Are you ready for surreal service gaming experiance?!</h2>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="#portfolio" class="btn-get-started scrollto text-dark fw-bolder">Get Started!</a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="https://freepngimg.com/save/55630-gaming-free-photo-png/1278x790" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">


    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
        <div class="container">

            @if(Session::has('error'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{session::get('error')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
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

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Game</h2>
                <p>We Online Service Gaming provide a high-demand and popular game to be boosted. Here are the selected game that are available.</p>
            </div>

            <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-fps">FPS</li>
                <li data-filter=".filter-sport">SPORT</li>
            </ul>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-fps">
                    <div class="portfolio-img"><img src="https://media.steampowered.com/apps/csgo/blog/images/fb_image.png?v=6" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>FPS</h4>
                        <p>Counter Strike:Global Offensive (CSGO)</p>
                        <a href="https://media.steampowered.com/apps/csgo/blog/images/fb_image.png?v=6" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Counter Strike:Global Offensive (CSGO)"><i class="bx bx-plus"></i></a>
                        <a href="{{route('games.csgo')}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-fps">
                    <div class="portfolio-img"><img src="https://www.riotgames.com/darkroom/1440/d0807e131a84f2e42c7a303bda672789:3d02afa7e0bfb75f645d97467765b24c/valorant-offwhitelaunch-keyart.jpg" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>FPS</h4>
                        <p>VALORANT</p>
                        <a href="https://www.riotgames.com/darkroom/1440/d0807e131a84f2e42c7a303bda672789:3d02afa7e0bfb75f645d97467765b24c/valorant-offwhitelaunch-keyart.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="VALORANT"><i class="bx bx-plus"></i></a>
                        <a href="{{route('games.valorant')}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-sport">
                    <div class="portfolio-img"><img src="https://media.contentapi.ea.com/content/dam/ea/fifa/fifa-23/shared-assets/images/fifa-23-featured-image.png.adapt.crop191x100.1200w.png" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>SPORT</h4>
                        <p>FIFA 23</p>
                        <a href="https://media.contentapi.ea.com/content/dam/ea/fifa/fifa-23/shared-assets/images/fifa-23-featured-image.png.adapt.crop191x100.1200w.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="FIFA 23"><i class="bx bx-plus"></i></a>
                        <a href="{{route('games.fifa23')}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-fps">
                    <div class="portfolio-img"><img src="https://media.contentapi.ea.com/content/dam/apex-legends/images/2019/01/apex-featured-image-16x9.jpg.adapt.crop16x9.1023w.jpg" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>FPS</h4>
                        <p>Apex Legends</p>
                        <a href="https://media.contentapi.ea.com/content/dam/apex-legends/images/2019/01/apex-featured-image-16x9.jpg.adapt.crop16x9.1023w.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Apex Legends"><i class="bx bx-plus"></i></a>
                        <a href="{{route('games.apexlegends')}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-fps">
                    <div class="portfolio-img"><img src="https://www.callofduty.com/content/dam/atvi/callofduty/cod-touchui/blog/hero/mw-wz/WZ-Season-Three-Announce-TOUT.jpg" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>FPS</h4>
                        <p>Call Of Duty:Warzone</p>
                        <a href="https://www.callofduty.com/content/dam/atvi/callofduty/cod-touchui/blog/hero/mw-wz/WZ-Season-Three-Announce-TOUT.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Call Of Duty:Warzone"><i class="bx bx-plus"></i></a>
                        <a href="{{route('games.warzone')}}" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-fps">
                    <div class="portfolio-img"><img src="https://i.ytimg.com/vi/GKXS_YA9s7E/maxresdefault.jpg" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>FPS</h4>
                        <p>Overwatch 2</p>
                        <a href="https://i.ytimg.com/vi/GKXS_YA9s7E/maxresdefault.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Overwatch 2"><i class="bx bx-plus"></i></a>
                        <a href="{{route('games.overwatch')}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>


            </div>

        </div>
    </section><!-- End Portfolio Section -->

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
                    <a class="cta-btn align-middle" href="#portfolio">Get Started Now!</a>
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
    </section><!-- End Team Section -->




</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>Online Service Gaming </h3>
                    <p>
                        Universiti Tenaga Nasional (UNITEN)<br>
                        Putrajaya Campus Jalan Kajang - Puchong<br>
                        43000 Kajang, Selangor<br><br>
                        <strong>Phone:</strong> +6012-497-0301<br>
                        <strong>Email:</strong> udinazahar32100@gmail.com<br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Game</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Game</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('gamer.booster')}}">Booster</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Social Networks</h4>
                    <p>Follow for more updates on social media</p>
                    <div class="social-links mt-3">
                        <a href="https://twitter.com/udin_azahar" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
                        <a href="https://www.facebook.com/din.azahar.1/" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
                        <a href="https://www.instagram.com/din.zym/" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/nuruddin-zaim-057133166/" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy; Copyright <strong><span>Online Service Gaming </span></strong>. All Rights Reserved
        </div>
        {{--        <div class="credits">--}}
        {{--            <!-- All the links in the footer should remain intact. -->--}}
        {{--            <!-- You can delete the links only if you purchased the pro version. -->--}}
        {{--            <!-- Licensing information: https://bootstrapmade.com/license/ -->--}}
        {{--            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->--}}
        {{--            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>--}}
        {{--        </div>--}}
    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('boostercs/Arsha/assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('boostercs/Arsha/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('boostercs/Arsha/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('boostercs/Arsha/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('boostercs/Arsha/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('boostercs/Arsha/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
<script src="{{asset('boostercs/Arsha/assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('boostercs/Arsha/assets/js/main.js')}}"></script>

</body>

</html>

