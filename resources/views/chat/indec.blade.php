<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Online Service Gaming - Chat</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.0.1/tailwind.min.css"  rel="stylesheet">
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

    <!-- JavaScript -->
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!-- End JavaScript -->

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <!-- End CSS -->

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
<header id="header" class="fixed-top header-inner-pages ">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="{{url('/dashboard')}}" style="text-decoration: none">Online Service Gaming </a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto " href="{{route('dashboard')}}">Home</a></li>
                <li><a class="nav-link scrollto " href="{{route('gamer.booster')}}">Booster</a></li>
                <li class="dropdown" ><a href="#" style="text-decoration: none"><span>Games</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{route('games.csgo')}}">CSGO</a></li>
                        <li><a href="{{route('games.valorant')}}">Valorant</a></li>
                        <li><a href="{{route('games.fifa23')}}">FIFA 23</a></li>
                        <li><a href="{{route('games.apexlegends')}}">Apex Legend</a></li>
                        <li><a href="{{route('games.warzone')}}">Call Of Duty:Warzone</a></li>
                        <li><a href="{{route('games.overwatch')}}">Overwatch 2</a></li>
                    </ul>
                </li>

                @if (Route::has('login'))

                    @auth
                        <li class="dropdown"><a href="#" style="text-decoration: none"><span>{{ Auth::user()->name }}</span> <i class="bi bi-chevron-down"></i></a>
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
            <i class="bi bi-list mobile-nav-toggle"></i>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth

            @endif



        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <ol>
            <li><a href="{{route('dashboard')}}" style="text-decoration: none">Home</a></li>
            <li><a href="{{route('gamer.booster')}}" style="text-decoration: none">Booster</a></li>
            <li>Chat</li>
        </ol>
        <h2>Chat</h2>

    </div>
</section><!-- End Breadcrumbs -->


<div class="chat">

    <!-- Header -->
    <div class="top">
        <img src="https://www.nicepng.com/png/detail/137-1379898_anonymous-headshot-icon-user-png.png" alt="Avatar">
        <div>
            <p>Booster</p>
            <small>Online</small>
        </div>
    </div>
    <!-- End Header -->

    <!-- Chat -->
    <div class="messages">
        @include('chat.recieve', ['message' => "Hey! What's up!  👋"])
    </div>
    <!-- End Chat -->

    <!-- Footer -->
    <div class="bottom">
        <form>
            <input type="text" id="message" name="message" placeholder="Enter message..." autocomplete="off">
            <button type="submit"></button>
        </form>
    </div>
    <!-- End Footer -->

</div>


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
                        <li><i class="bx bx-chevron-right"></i> <a href="{{url('/dashboard#hero')}}">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{url('/dashboard#about')}}">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{url('/dashboard#services')}}">Services</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{url('/dashboard#portfolio')}}">Games</a></li>
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

<!-- DataTable JS File -->
<script src="{{asset('dashb/js/demo/datatables-demo.js')}}"></script>
<script src="{{asset('dashb/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('dashb/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

</body>

<script>
    const pusher  = new Pusher('{{config('broadcasting.connections.pusher.key')}}', {cluster: 'ap1'});
    const channel = pusher.subscribe('public');

    //Receive messages
    channel.bind('chat', function (data) {
        $.post("/recieve", {
            _token:  '{{csrf_token()}}',
            message: data.message,
        })
            .done(function (res) {
                $(".messages > .message").last().after(res);
                $(document).scrollTop($(document).height());
            });
    });

    //Broadcast messages
    $("form").submit(function (event) {
        event.preventDefault();

        $.ajax({
            url:     "/broadcast",
            method:  'POST',
            headers: {
                'X-Socket-Id': pusher.connection.socket_id
            },
            data:    {
                _token:  '{{csrf_token()}}',
                message: $("form #message").val(),
            }
        }).done(function (res) {
            $(".messages > .message").last().after(res);
            $("form #message").val('');
            $(document).scrollTop($(document).height());
        });
    });

</script>

</html>

