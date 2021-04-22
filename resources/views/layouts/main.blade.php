<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />

    {{-- font --}}
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet" />

    <!--load all styles -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="{{asset('asset/fontawesome/css/all.css')}}" rel="stylesheet">
    <link href="{{asset('asset/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
    {{-- css --}}
    @yield('css')
    <title>{{$company->name}}</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">{{$company->name}}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{Request::routeIs('home') ? 'active' : ''}}">
                        <a class="nav-link" href="{{route('home')}}">Beranda</a>
                    </li>
                    <li
                        class="nav-item {{Request::routeIs('infolomba','detail','infolomba','kategori') ? 'active' : ''}}">
                        <a class="nav-link" href="{{route('infolomba')}}">Info Lomba</a>
                    </li>
                    <li class="nav-item {{Request::routeIs('tentang') ? 'active' : ''}}">
                        <a class="nav-link" href="{{route('tentang')}}">Tentang</a>
                    </li>
                    <li class="nav-item {{Request::routeIs('faq') ? 'active' : ''}}">
                        <a class="nav-link" href="{{route('faq')}}">FAQ</a>
                    </li>
                    <li class="nav-item {{Request::routeIs('kontak') ? 'active' : ''}}">
                        <a class="nav-link" href="{{route('kontak')}}">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
        <a href="https://api.whatsapp.com/send?phone=089644028279" target="_blank"><button class="cp" id="pc">Contact
                Person</button></a>
        <a href="#" class="back-top" id="back-top"><i class="fas fa-arrow-up"></i></a>
    </nav>
    @yield('content')
    <div id="footer-top" class="bg-dua">
        <div class="container mt-4">
            <div class="row pt-4 pb-4">
                <div class="col-md-4">
                    <h3 class="txt-dark-blue">Location</h3>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989.9432501923735!2d110.414591729178!3d-7.035944399682366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwMDInMDkuNCJTIDExMMKwMjQnNTQuNSJF!5e0!3m2!1sid!2sid!4v1615911880372!5m2!1sid!2sid"
                        width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col-md-4 offset-md-4 txt-dark-blue">
                    <h3>Find We At</h3>
                    <a href="{{$company->youtube}}" target="_blank"> <img
                            src="{{asset('asset/yt.png')}}" class="footer-yt" alt="Responsive image"></a>
                    <a href="{{$company->instagram}} " target="_blank"><img
                            src="{{asset('asset/ig.png')}}" class="footer-ig" alt="Responsive image"></a>
                </div>
            </div>
        </div>
    </div>
    <div id="footer-bot" class="container-fluid">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="footer-center mb-2">
                        <span> @ Copyright <strong>Jaggs</strong>. All Rights Reserved</span>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="footer-center mb-2">
                        <a href="{{$company->youtube}}" target="_blank"> <img
                                src="{{asset('asset/yt.png')}}" class="footer-yt" alt="Responsive image">
                            <span class="footer-text">YOUNG STAR CHAMPIONSHIP</span></a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="footer-center mb-2">
                        <a href="{{$company->instagram}}" target="_blank"><img
                                src="{{asset('asset/ig.png')}}" class="footer-ig" alt="Responsive image">
                            <span class="footer-text">YOUNG STAR CHAMPIONSHIP</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{asset('asset/lightbox/js/lightbox-plus-jquery.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('asset/jquery/jquery.min.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.1.4/pagination.min.js"></script>
    @yield('js')
</body>

</html>
