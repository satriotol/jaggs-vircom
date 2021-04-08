@extends('layouts.main')
@section('css')
<link href="asset/fontawesome/css/all.css" rel="stylesheet">
@endsection
@section('content')
<section class="banner">
    <div class="jumbotron jumbotron-lomba bg-dua d-flex align-items-center">
        <div class="container position-relative">
            <div class="title-jumbotron">
                <h1 class="display-4 font-weight-bold">Young <span class="subtitle-jumbotron">Star</span></h1>
                <p class="lead">
                    Championship
                </p>
            </div>
            <div class="form-cari">
                <div class="form-group">
                    <input type="text" class="form-control br-10" placeholder="Nama Lomba">
                </div>
                <div class="form-group">
                    <select class="form-control br-10" id="exampleFormControlSelect1">
                        <option value="">Pilih Jenjang</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control br-10" id="exampleFormControlSelect1">
                        <option value="">Pilih Kategori</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="text-right">
                    <a href="#lomba" class="btn-master ">Cari</a>
                </div>
            </div>
        </div>
</section>
<section class="bg-utama">
    <div class="container">
        <section class="kategori pb-5">
            <h1 class="mb-4 txt-dark-blue" data-aos="fade-left" data-aos-duration="1000">
                <span class="border-blue">Kategori</span> Lomba
            </h1>
            <div class="row" data-aos="fade-right" data-aos-duration="1000">
                @foreach ($categories as $category)
                <div class="col-md-3">
                    <div class="card card-kategori mb-3"
                        style="background: linear-gradient(0deg, rgba(96, 132, 179, 1) 20%, rgba(96, 132, 179, .5) 100%), url(./asset/kategori/sport.jpg);">
                        <div class="card-body card-kategori-text">
                            <div class="text mb-3">
                                <h3 class="card-title">{{$category->name}}</h3>
                                <p class="card-text">
                                    Some quick example text to build on the card title and
                                    make up the bulk of the card's content.
                                </p>
                            </div>
                        </div>
                        <a href="{{route('kategori',$category->id)}}">
                            <div class="card-footer text-right">Lebih Lanjut ></div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        <section id="lomba" class="lomba pb-5">
            <h1 class="mb-4 txt-dark-blue" data-aos="fade-left" data-aos-duration="1000">
                <span class="border-blue">Lomba</span>
            </h1>
            <div data-aos="fade-right" data-aos-duration="1000">
                <div class="row mb-3">
                    <div class="col-md-3">
                        <a onclick="lightbox()"
                            href="https://ichef.bbci.co.uk/news/640/cpsprodpb/BF0D/production/_106090984_2e39b218-c369-452e-b5be-d2476f9d8728.jpg"
                            data-lightbox="gallery1">
                            <img src="https://ichef.bbci.co.uk/news/640/cpsprodpb/BF0D/production/_106090984_2e39b218-c369-452e-b5be-d2476f9d8728.jpg"
                                alt="" class="img-thumbnail img-lomba img-lomba" /></a>
                    </div>
                    <div class="col md-9 txt-dark-blue">
                        <a href="detaillomba.html">
                            <h3 class="txt-dark-blue judul-lomba">Title</h3>
                        </a>
                        <p class="text-uppercase">category (subkategori) | Jenjang</p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Architecto tenetur perspiciatis commodi dolor consequuntur.
                            Impedit fugit, enim, ut quisquam, quibusdam explicabo
                            consectetur consequatur hic odit placeat maxime facilis
                            voluptates harum.
                        </p>
                        <div class="status">
                            <button class="btn btn-open btn-sm text-uppercase" disabled>OPEN</button>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <a onclick="lightbox()"
                            href="https://cdn-2.tstatic.net/manado/foto/bank/images/tonny-stark-yang-berperan-sebagai-iron-man-di-avengers.jpg"
                            data-lightbox="gallery1">
                            <img src="https://cdn-2.tstatic.net/manado/foto/bank/images/tonny-stark-yang-berperan-sebagai-iron-man-di-avengers.jpg"
                                alt="" class="img-thumbnail img-lomba" /></a>
                    </div>
                    <div class="col md-9 txt-dark-blue">
                        <a href="detaillomba.html">
                            <h3 class="txt-dark-blue judul-lomba">Title</h3>
                        </a>
                        <p class="text-uppercase">category (subkategori) | Jenjang</p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Architecto tenetur perspiciatis commodi dolor consequuntur.
                            Impedit fugit, enim, ut quisquam, quibusdam explicabo
                            consectetur consequatur hic odit placeat maxime facilis
                            voluptates harum.
                        </p>
                        <!-- <a href="" class="btn btn-custom">OPEN</a> -->
                        <div class="status">
                            <button class="btn btn-close btn-sm text-uppercase" disabled>CLOSE</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-12  text-center">
                    <div class="center-img">
                        <a class="icon " href=""><i class="fas fa-arrow-left"></i></a>
                        <a class="icon" href=""><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
@endsection
