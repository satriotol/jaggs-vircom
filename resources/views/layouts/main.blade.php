<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>lomba</title>
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


</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo mr-auto"><a href="index.html">Vircom.id</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav class="nav-menu d-none d-lg-block" style="font-weight: bold;">
                <ul>
<<<<<<< HEAD
                    <li ><a href="{{route('home')}}">Beranda</a></li>
                    <li><a href="{{route('tentang')}}">Tentang</a></li>
                    <li><a href="{{route('kontak')}}">Kontak</a></li>
=======
                    <li class="active"><a href="{{route('home')}}">Beranda</a></li>
                    <li><a href="{{route('tentang')}}">Tentang</a></li>
                    <li><a href="kontak.html">Kontak</a></li>
>>>>>>> 8c7b68e29fc72669c686a521a314838c15515370
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
                    <div class="col-lg-4 ">
                        <div class="footer-info">
                            <h3>Alamat</h3>
                            <iframe style="border:0; width: 300px; height: 300px;"
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                                frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-info">
                            <h3>Video Profil</h3>
                            <img src="media.jpg" style="background-size: cover;" height="200px" width="300px">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-info">
                            <h3>Find We AT</h3>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer><!-- End Footer -->
    <div class="container-fluid text-center" style="padding: 50px; background-color: black;">
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

    <!-- Template Main JS File -->
    <script src="{{asset('app/js/main.js')}}"></script>

</body>

</html>
