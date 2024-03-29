@extends('layouts.main')
@section('content')
<style>
    .deskripsi.visi {
        font-size: 25px;
    }

    @media (max-width: 767.98px) {
        .deskripsi.visi {
            font-size: 20px;
        }

        .img-tentang {
            width: 80%;
        }
    }

</style>
<section class="bg-utama margin-nav overflow-hidden">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12 mt-5 mb-5 ">
                <img src="{{asset('asset/logo.png')}}" alt="" class="img-fluid img-tentang" width="50%" height="auto">
                <h1 class="judul txt-dark-blue mt-5" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">
                    Apa Itu Young Star Championship? </h1>
                <div class="deskripsi txt-dark-blue mt-4" data-aos="fade-right" data-aos-duration="1000"
                    data-aos-once="true"> {!!$company->description!!}
                </div>
                <h1 class="judul txt-dark-blue mt-4" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">
                    Untuk Siapa?</h1>
                <div class="deskripsi txt-dark-blue mt-4" data-aos="fade-right" data-aos-duration="1000"
                    data-aos-once="true">
                    {{$company->apa_kata_mereka}}
                </div>
                <h1 class="txt-dark-blue judul" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">Visi & Misi
                </h1>
                <h1 class="judul txt-dark-blue deskripsi mt-4" data-aos="fade-left" data-aos-duration="1000"
                    data-aos-once="true">Visi</h1>
                <div class="deskripsi txt-dark-blue mt-4 visi" data-aos="fade-right" data-aos-duration="1000"
                    data-aos-once="true">
                    {!!$company->vision!!}
                </div>
                <h1 class="judul txt-dark-blue deskripsi mt-4" data-aos="fade-left" data-aos-duration="1000"
                    data-aos-once="true">Misi</h1>
                <div class="deskripsi txt-dark-blue mt-4" data-aos="fade-right" data-aos-duration="1000"
                    data-aos-once="true">
                    {!!$company->mission!!}
                </div>
            </div>
        </div>
    </div>
    @if (!$teams->isEmpty())
    <div class="container" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
        <div class="section-title">
            <h1 class="txt-dark-blue judul">Team Kita</h1>
        </div>
        <div class="row mt-4">
            @foreach ($teams as $team)
            <div class="col-lg-4 col-md-6">
                <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
                    <img src="{{asset('storage/'.$team->image)}}" alt="" class="foto-anggota " width="50%"
                        height="auto">
                    <h3 class="txt-dark-blue font-weight-bold subjudul">{{$team->name}}</h3>
                    <h4 class="txt-grey subjudul">{{$team->title}}</h4>
                    <p class="txt-dark-blue deskripsi">{{$team->description}}
                    </p>
                </div>
                <div class="text-center">
                    <a class="socialmedia" href="" target="_blank"><i class="icofont-instagram"></i></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endif

</section>
@endsection
