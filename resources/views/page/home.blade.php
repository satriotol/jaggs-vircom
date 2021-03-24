@extends('layouts.main')
@section('content')
<section id="hero" class="d-flex align-items-center"
    style="background:url({{asset('app/img/karate.jpg')}}) top center; background-size: cover;">
    <div class="container position-relative text-center text-lg-left" data-aos="zoom-in" data-aos-delay="100">
        <div class="row mb-5">
            <div class="col-md-8">
                <h1>Young <span>Start</span></h1>
                <h2>Championship</h2>
            </div>
            @if ($company->video_profile)
            <div class="col-md-4">
                <a href="{{$company->video_profile}}" class="venobox play-btn ml-auto" data-vbtype="video"
                    data-autoplay="true"></a>
            </div>
            @endif
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nama Lomba">
                </div>
                <div class="form-group">
                    <select class="form-control select2bs4" id="exampleFormControlSelect1">
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
            <button class="ml-auto mr-3 BtnOrange">Cari</button>
        </div>
    </div>
</section>
<main id="main">
    <section id="about" class="about"
        style="background:url({{asset('app/img/bg.jpeg')}}) center center;  background-size: cover;">
        <div class="container" data-aos="fade-up">
            @foreach ($lombas as $lomba)
            <div class="row mt-4 mb-3 p-5 judul" style=" padding:20px; border-radius:20px; background-color:#00000096;"
                data-aos="fade-up">
                <div class="col-lg-8">
                    <h3> <a style="font-weight: bold;" href="{{route('detail',$lomba->id)}}">{{$lomba->name}}</a></h3>
                    <p style="font-weight: bold;">
                        {{$lomba->kategori->name}}
                    </p>

                    <p style="font-weight: bold;">
                        @foreach ($jenjangs as $jenjang) {{$jenjang->name}} @endforeach
                    </p>

                    <p style="font-weight: bold;">{!! substr(strip_tags($lomba->description),0,200)!!}...</p>
                    @if ($lomba->start_date <= now()) @if ($lomba->end_date >= now())
                        <span class="ket-lomba"
                            style=" color: #fff;background-color:  #28a745; border-color: white;">Open</span>
                        @else
                        <span class="ket-lomba"
                            style="color: #fff;background-color: #dc3545; border-color: white;">Closed</span>
                        @endif
                        @endif
                </div>
                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="about-img img-fluid">
                        <a href="{{route('detail',$lomba->id)}}"><img src="{{asset('storage/'.$lomba->image)}}"
                                class="img-fluid" alt=""></a>
                    </div>
                </div>
                <div class="container">
                    <div id="why-use" class="row why-us mt-5" data-aos="fade-up">
                        <div class="col-md-5 mx-auto mb-3">
                            <div class="row box" data-aos="zoom-in" data-aos-delay="200">
                                <h4>Persyaratan</h4>
                                <p>{!!$lomba->ketentuan!!}</p>
                            </div>
                        </div>
                        <div class="col-md-5 mx-auto">
                            <div class="row box" data-aos="zoom-in" data-aos-delay="200">
                                <h4>Hadiah</h4>
                                <p>{!!$lomba->hadiah!!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
            <div class="container">
                <div class="row">
                    <div class="mx-auto">
                        {{ $lombas->links() }}
                    </div>
                </div>
            </div>
            {{-- <div class="container">
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
            </div> --}}
    </section><!-- End About Section -->
</main><!-- End #main -->
@endsection
