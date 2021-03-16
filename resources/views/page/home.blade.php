@extends('layouts.main')
@section('content')
<section id="hero" class="d-flex align-items-center"
    style="background:url({{asset('app/img/karate.jpg')}}) top center; background-size: cover;">
    <div class="container position-relative text-center text-lg-left" data-aos="zoom-in" data-aos-delay="100">
        <div class="row">
            <div class="col-lg-12">
                <form action="">
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nama Lomba">
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option value="">Pilih Jenjang</option>
                            @foreach ($jenjangs as $jenjang)
                            <option value="{{$jenjang->id}}">{{$jenjang->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option value="">Pilih Kategori</option>
                            @foreach ($kategoris as $kategori)
                            <option value="{{$kategori->id}}">{{$kategori->name}}</option>
                            @endforeach
                        </select>
                    </div>
            </div>
        </div>
        <div class="row">
                <button type="button text-center" style=" border-radius: 20px; margin-left: 10px; background-color: #cda45e;"
                    class="btn btn-secondary ml-auto mr-3">Input data</button>
        </div>
        </form>
    </div>
</section>
<main id="main">
    <section id="about" class="about"
        style="background:url({{asset('app/img/bg.jpeg')}}) center center;  background-size: cover;">
        <div class="container" data-aos="fade-up">
            @foreach ($lombas as $lomba)
            <div class="row mt-4 mb-4">
                <div class="col-lg-8">
                    <h3> <a href="{{route('detail',$lomba->id)}}">{{$lomba->name}}</a></h3>
                    <p class="font-italic">
                        {{$lomba->kategori->name}}
                    </p>
                    <p>{{ substr(strip_tags($lomba->description),0,200)}}...</p>
                </div>
                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="about-img img-fluid">
                        <a href="{{asset('storage/'.$lomba->image)}}"><img src="{{asset('storage/'.$lomba->image)}}"
                                class="img-fluid" alt=""></a>
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
            </div>
    </section><!-- End About Section -->
</main><!-- End #main -->
@endsection
