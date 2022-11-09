<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Crypto Book</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assetsL/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assetsL/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assetsL/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('assetsL/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assetsL/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('assetsL/vendor/aos/aos.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assetsL/css/main.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Logis - v1.2.1
    * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assetsL/img/logo.png" alt=""> -->
            <h1>Crypto Book</h1>
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar navbar-expand-lg navbar-light">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('main.index')}}">Головна <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    @auth()
                        <a class="nav-link" href="{{route('personal.main.index')}}">Привіт, {{auth()->user()->name}} <span class="sr-only">(current)</span></a>
                    @endauth
                    @guest()
                        <a class="nav-link" href="{{route('personal.main.index')}}">Ввійти <span class="sr-only">(current)</span></a>
                    @endguest

                </li>
                @auth()
                    <li class="nav-item active">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="bg-transparent border-0" type="submit"><a class="nav-link">Вийти <span class="sr-only">(current)</span></a></button>
                        </form>
                    </li>
                @endauth
            </ul>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
<!-- End Header -->

@yield('contentL')

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="container mt-2 copyright">
            <strong><span>Crypto Book 2022</span></strong>


</footer><!-- End Footer -->
<!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{asset('assetsL/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assetsL/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{asset('assetsL/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('assetsL/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assetsL/vendor/aos/aos.js')}}"></script>
<script src="{{asset('assetsL/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('assetsL/js/main.js')}}"></script>

</body>

</html>
