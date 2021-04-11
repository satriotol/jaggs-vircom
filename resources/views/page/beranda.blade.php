@extends('layouts.main')
@section('content')
<section class="bg-utama margin-nav">
    <div class="container mt-4 ">
        <div class="row welcome">
            <div class="col-md-6">
                <img src="./asset/home.png " data-aos="fade-right" data-aos-duration="1000"
                    class="img-fluid img-welcome" alt="Responsive image">
            </div>
            <div class="col-md-5 offset-md-1">
                <div class="text-welcome mb-5" data-aos="fade-left" data-aos-duration="1000">
                    <h1 class="diplay-1">Young <span>Star</span></h1>
                    <h1 class="diplay-3">Championship</h1>
                    <a href="{{route('infolomba')}}"><button class="btn-master mt-2 mb-2">Info Lomba</button></a>
                    <button class="btn-master">Registrasi</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-center bg-dua">
        <div class="row">
            <div class="col-md-12 mt-5 mb-5 ">
                <h1 data-aos="fade-right" data-aos-duration="1000" class="txt-dark-blue judul">VIDEO PROFIL <span
                        class="border-blue">YOUNG STAR CHAMPIONSHIP</span></h1>

                <div data-aos="fade-left" data-aos-duration="1000"
                    class="mt-5 embed-responsive embed-responsive-16by9 mx-auto">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/AWggPLXeOkU"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center mt-5 ">
        <div class="row">
            <div class="col-md-12 ">
                <h1 class="txt-dark-blue judul" data-aos="fade-down" data-aos-duration="1000">APA ITU <span
                        class="border-blue">YOUNG STAR CHAMPIONSHIP</span> </h1>
                <h4 class="txt-grey " data-aos="fade-down" data-aos-duration="1000">Penjelasan Singkat Vircom</h4>
                <div class="mt-4 deskripsi txt-dark-blue" data-aos="fade-up" data-aos-duration="1000"><p class="text-center"> {!!$company->description_beranda!!}</p>
                </div>

                <a href="{{route('tentang')}}" data-aos="fade-up" data-aos-duration="1000"><button
                        class="btn-master mt-2">Pelajari Lebih Lanjut</button></a>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="text-center" data-aos="fade-down" data-aos-duration="1000">
            <h1 class="txt-dark-blue judul"><span class="border-blue">CARA MENGIKUTI LOMBA</span> </h1>
            <h4 class="txt-grey ">Ikuti Tata Cara Beriku</h4>
        </div>
        <div class="row ">
            <div class="col-md-6">
                <img src="./asset/tatacara.png" data-aos="fade-right" data-aos-duration="1000"
                    class="img-fluid img-welcome mb-5" alt="Responsive image">
            </div>
            <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000">
                <div class="row bubble mt-2 mr-2 ml-2 mt-2">
                    <div class="col-sm-2">
                        <h1 class="text-center">1</h1>
                    </div>
                    <div class="col-sm-10">
                        <p class="txt-dark-blue deskripsi">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Placeat quo
                            accusantium veritatis sint modi quam tenetur ullam! Suscipit ut facilis debitis, ratione
                            animi</p>
                    </div>
                </div>
                <div class="row bubble mt-2 mr-2 ml-2 mt-2">
                    <div class="col-sm-2">
                        <h1 class="text-center">2</h1>
                    </div>
                    <div class="col-sm-10">
                        <p class="txt-dark-blue deskripsi">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Placeat ipsum esse
                            possimus
                            delectus ullam
                            temporibus atque omnis iste? Voluptas ullam, delectus illum non nam assumenda quis eius
                            odio qui
                            distinctio aspernatur id laboriosam, nobis esse quia? Nulla labore quibusdam sint.
                            Facere animi
                            porro tempore impedit repellendus mollitia, provident consectetur fugiat exercitationem
                            voluptatem?
                            Iure numquam quia id sapiente, labore nihil dolor incidunt inventore doloremque maxime
                            explicabo</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
