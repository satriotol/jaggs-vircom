<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{$company->name}}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('app/img/favicon.png')}}" rel="icon">
    <link href="{{asset('app/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('app/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('app/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{asset('app/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('app/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('app/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('app/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{asset('app/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('app/style.css')}}" rel="stylesheet">
    <link href="{{asset('app/vendor/lightbox/css/lightbox.css')}}" rel="stylesheet">
    @yield('css')
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <h1 class="logo mr-auto"><a href="{{route('home')}}">{{$company->name}}</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav class="nav-menu d-none d-lg-block" style="font-weight: bold; background-color: black:">
                <ul>
                    <li class="{{Request::routeIs('home') ? 'aktiv' : ''}}"><a href="{{route('home')}}">Beranda</a>
                    </li>
                    <li class="{{Request::routeIs('tentang') ? 'aktiv' : ''}}"><a
                            href="{{route('tentang')}}">Tentang</a></li>
                    <li class="{{Request::routeIs('kontak') ? 'aktiv' : ''}}"><a href="{{route('kontak')}}">Kontak</a>
                    </li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->
    @yield('content')

    <!-- ======= Footer ======= -->
    <footer id="footer" style="padding-bottom: 0px;">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-info mr-auto">
                            <h3>Location</h3>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989.9432501923735!2d110.414591729178!3d-7.035944399682366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwMDInMDkuNCJTIDExMMKwMjQnNTQuNSJF!5e0!3m2!1sid!2sid!4v1615911880372!5m2!1sid!2sid"
                                width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="footer-info">
                            <h3>Find We AT</h3>
                            <div class="social-links mt-3">
                                <a href="{{$company->instagram}}" class="instagram" target="_blank"><i
                                        class="bx bxl-instagram"></i></a>
                                <a href="{{$company->youtube}}" class="youtube" target="_blank"><i
                                        class="bx bxl-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer><!-- End Footer -->
    <div class="container-fluid text-center" style="padding: 10px;background-color: black;color: #ffa500;">
        <div class="copyright">
            @ Copyright <strong><span>Jaggs</span></strong>. All Rights Reserved
        </div>
    </div>
    <div id="preloader"></div>
    <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('app/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('app/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('app/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('app/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('app/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('app/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('app/vendor/venobox/venobox.min.js')}}"></script>
    <script src="{{asset('app/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('app/vendor/lightbox/js/lightbox.js')}}"></script>
    <!-- Template Main JS File -->
    <script src="{{asset('app/js/main.js')}}"></script>
    @yield('script')
</body>

</html>
