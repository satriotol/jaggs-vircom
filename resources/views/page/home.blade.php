@extends('layouts.main')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center" src="assets/img/about.jpg">
    <div class="container position-relative text-center text-lg-left" data-aos="zoom-in" data-aos-delay="100">
        <div class="row">
            <div class="col-lg-12">
                <form action="">
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nama Lomba">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Jenjang</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Umum</option>
                            <option>Pelajar</option>
                            <option>Mahasiswa</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Kategori</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Seni</option>
                            <option>Olahraga</option>
                        </select>
                    </div>
            </div>
            <button type="button" style=" border-radius: 20px; margin-left: 10px; background-color: #cda45e;"
                class="btn btn-secondary">Input data</button>
            </form>
        </div>
</section><!-- End Hero -->

<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            @foreach ($lombas as $lomba)
            <div class="row mt-4 mb-4">
                <div class="col-lg-6">
                    <h3> <a href="detail_lomba.html">{{$lomba->name}}</a></h3>
                    <p class="font-italic">
                        {{$lomba->kategori->name}}
                    </p>
                    <p>{{$lomba->description}}</p>
                </div>
                <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                    <div class="about-img">
                        <img src="assets/img/about.jpg" alt="">
                    </div>
                </div>
            </div>
            @endforeach
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-4">
                        <ul class="pagination pagination-md p-md-5">
                            <li class="page-item disabled">
                                <a class="page-link p-3" href="#" tabindex="-1">1</a>
                            </li>
                            <li class="page-item"><a class="page-link p-3" href="#">2</a></li>
                            <li class="page-item"><a class="page-link p-3" href="#">3</a></li>
                        </ul>
                    </div>
                </div>
    </section><!-- End About Section -->
</main><!-- End #main -->
@endsection
