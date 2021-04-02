@extends('layouts.main')
@section('content')
<section class="home">
    <div class="container mt-4 mb-5 text-center">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('app/img/home.png')}}" alt="Responsive image" width="100%" height="100%">
            </div>
            <div class="col-md-5 offset-md-1">
                <div class="welcome">
                    <h1>Young <span>Star</span></h1>
                    <h2>Championship</h2>
                    <button class="btn-master mt-3 mb-3 ml-2 mr-2" type="submit">Info Lomba</button>
                    <button class="btn-master" type="submit">Regristrasi</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container-fluid text-center mb-3 "
        style="background:url({{asset('app/img/bg-video.png')}}); background-size: 600px;">
        <div class="row">
            <div class="col-md-12 mt-5 mb-5 ">
                <h1 class="judul ysc">VIDEO PROFIL YOUNG STAR CHAMPIONSHIP</h1>
                <iframe class="mt-5 " width="400" height="300" src="https://www.youtube.com/embed/vVy9Lgpg1m8"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>

            </div>
        </div>
    </div>
    <div class="container text-center mb-3 HomeVid">
        <div class="row">
            <div class="col-md-12 mt-5 mb-5">
                <h1 class="judul ysc">APA ITU YOUNG STAR CHAMPIONSHIP</h1>

                <h3 class="subjudul ">Penjelasan Singkat Vircom</h3>
                <p class="mt-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat ipsum esse possimus
                    delectus ullam
                    temporibus atque omnis iste? Voluptas ullam, delectus illum non nam assumenda quis eius odio qui
                    distinctio aspernatur id laboriosam, nobis esse quia? Nulla labore quibusdam sint. Facere animi
                    porro tempore impedit repellendus mollitia, provident consectetur fugiat exercitationem voluptatem?
                    Iure numquam quia id sapiente, labore nihil dolor incidunt inventore doloremque maxime explicabo
                    esse atque accusamus rem iusto cum corporis voluptatem! Tenetur quasi enim blanditiis debitis,
                    repudiandae aliquid exercitationem dolore sunt, ut totam ipsa. Quae optio officiis voluptates?
                    Voluptatum sint perspiciatis tenetur? Iure asperiores consectetur maxime doloremque perferendis?</p>

                <button class="btn-master mt-2" type="submit">Pelajari Lebih Lanjut</button>
            </div>
        </div>
    </div>
    <div class="container mb-3">
        <div class="text-center">
            <h1 class="judul">CARA MENGIKUTI LOMBA </h1>
            <h3 class="subjudul">Ikuti Tata Cara Berikut</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('app/img/tatacara.png')}}" alt="Responsive image" width="100%" height="100%">
            </div>
            <div class="col-md-6">
                <div class="row bubble mt-2 mr-2 ml-2">
                    <div class="col-sm-2">
                        <h1 class="text-center">1</h1>
                    </div>
                    <div class="col-sm-10"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quo
                        accusantium veritatis sint modi quam tenetur ullam! Suscipit ut facilis debitis, ratione animi</p></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')

@endsection
