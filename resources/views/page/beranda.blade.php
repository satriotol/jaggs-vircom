@extends('layouts.main')
@section('content')
<section class="bg-utama margin-nav overflow-hidden">
    <div class="mt-4 bg-header">
        <div class="container">
            <div class="row welcome">
                <div class="col-md-5 offset-md-7">
                    <div class="text-welcome p-3" data-aos="fade-left" data-aos-once="true" data-aos-duration="1000">
                        <h1 class="diplay-1 text-center">Young <span>Star</span></h1>
                        <h1 class="diplay-3 font-weight-bold text-center">Championship</h1>
                        <div class="text-center mt-2">
                            <a href="{{route('infolomba')}}"><button class="btn-master px-5 d-inline">Info
                                    Lomba</button></a>
                            <a href="https://linktr.ee/youngstarchampionship"><button
                                    class="btn-submaster px-5 d-inline">Registrasi</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-center bg-dua">
        <div class="row">
            <div class="col-md-12 mt-5 mb-5 ">
                <h1 data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="txt-dark-blue judul">
                    Video Profil Young Star Championship</h1>
                <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="true"
                    class="mt-5 embed-responsive embed-responsive-16by9 mx-auto">
                    <iframe class="embed-responsive-item" src="{{$company->video_profile}}" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 ">
        <div class="row">
            <div class="col-md-6 order-2 order-lg-1 txt-apa-itu">
                <h1 class="txt-dark-blue judul text-capitalize" data-aos="fade-down" data-aos-once="true"
                    data-aos-duration="1000">Apa Itu Young Star Championship?</h1>
                <h4 class="txt-grey subjudul" data-aos="fade-down" data-aos-duration="1000">Penjelasan Singkat</h4>
                <div class="mt-4 deskripsi txt-dark-blue" data-aos="fade-up" data-aos-duration="1000">
                    <p> {!!$company->description_beranda!!}</p>
                </div>

                <a href="{{route('tentang')}}" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"><button
                        class="btn-master mt-2">Pelajari Lebih Lanjut</button></a>
            </div>
            <div class="col-md-6 order-1 order-lg-2">
                <img src="{{asset('asset/home.png')}}" data-aos="fade-right" data-aos-duration="1000"
                    data-aos-once="true" class="img-fluid img-welcome" alt="Responsive image">
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div data-aos="fade-down" class="text-center" data-aos-duration="1000" data-aos-once="true">
            <h1 class="txt-dark-blue judul text-capitalize">Cara Mengikuti Lomba</h1>
            <h4 class="txt-grey subjudul">Ikuti Tata Cara Berikut</h4>
        </div>
        <div class="row mt-3">
            <div class="col-md-6">
                <img src="{{asset('asset/tatacara.png')}}" data-aos="fade-right" data-aos-duration="1000"
                    data-aos-once="true" class="img-fluid img-welcome" alt="Responsive image">
            </div>
            <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">
                @php
                $i = 1;
                @endphp
                @foreach ($tatacaras as $tatacara)
                <div class="row bubble mt-2 mr-2 ml-2 mt-2">
                    <div class="col-sm-2">
                        <h1 class="text-center">{{$i++}}</h1>
                    </div>
                    <div class="col-sm-10">
                        <p class="txt-dark-blue deskripsi">{{$tatacara->description}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
