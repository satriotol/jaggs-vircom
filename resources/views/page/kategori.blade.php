@extends('layouts.main')
@section('content')
<section class="banner">
    <div class="jumbotron jumbotron-fluid">
    </div>
</section>
<section class="bg-utama">
    <div class="container">
        <section class="lomba pb-5">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="mb-4 txt-dark-blue text-uppercase">
                        <span class="border-blue">Lomba</span> {{$category->name}}
                    </h2>
                    <p class="txt-grey">Beberapa Jenis Lomba Yang Tersedia</p>
                    <div class="border-blue">
                        <div class="row">
                            @foreach ($subcategories as $subcategory)
                            <div class="col-md-6 mb-3">
                                <button class="btn btn-active-blue w-100">{{$subcategory->name}}</button>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="detail content">
                        <div class="mt-3">
                            <h3>Lomba Sepak Bola</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam iure, iste
                                officiis dolorem voluptatibus voluptas commodi animi nesciunt quidem exercitationem
                                ipsa, consequuntur repellat atque placeat, ab sit ut tempore alias!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 rincian-lomba">
                    <div class="row">
                        @foreach ($lombas as $lomba)
                        <div class="col-md-5 mb-3">
                            <a href="{{route('detail',$lomba->id)}}">
                                <img src="{{asset('storage/'.$lomba->image)}}" class="foto-rincian-lomba img-thumbnail"
                                    alt=""></a>
                        </div>
                        <div class="col-md-7 content isi-rincian-lomba">
                            <a class="txt-dark-blue" href="{{route('detail',$lomba->id)}}">
                                <h3>{{$lomba->name}}</h3>
                            </a>
                            <p class="text-uppercase txt-grey">{{$lomba->kategori->name}}
                                ({{$lomba->subkategori->name}}) | @foreach ($lomba->jenjang as $lj)
                                {{$lj->name}},
                                @endforeach</p>
                            <p>{!! $lomba->description !!}
                            </p>
                        </div>
                        @endforeach
                    </div>
                    <div class="row ">

                        <div class="col-md-12  text-center">
                            <div class="center-img">
                                <a class="icon " href=""><i class="fas fa-arrow-left"></i></a>
                                <a class="icon" href=""><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="kategori pb-5">
            <h1 class="mb-4 txt-dark-blue">
                <span class="border-blue">Kategori</span> Lomba
            </h1>
            <div class="row" data-aos="fade-right" data-aos-duration="1000">
                @foreach ($categories as $c)
                <div class="col-md-3">
                    <div class="card card-kategori mb-3"
                        style="background: linear-gradient(0deg, rgba(96, 132, 179, 1) 20%, rgba(96, 132, 179, .5) 100%), url(./asset/kategori/sport.jpg);">
                        <div class="card-body card-kategori-text">
                            <div class="text mb-3">
                                <h3 class="card-title">{{$c->name}}</h3>
                                <p class="card-text">
                                    Some quick example text to build on the card title and
                                    make up the bulk of the card's content.
                                </p>
                            </div>
                        </div>
                        <a href="{{route('kategori',$c->id)}}">
                            <div class="card-footer text-right">Lebih Lanjut ></div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </div>
</section>
@endsection
