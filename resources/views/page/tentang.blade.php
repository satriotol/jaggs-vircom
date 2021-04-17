@extends('layouts.main')
@section('content')
<section class="bg-utama margin-nav">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12 mt-5 mb-5 ">
                <a onclick="lightbox()" class="example-image-link" href="./asset/logo.png"
                    data-lightbox="example-2"><img src="./asset/logo.png" alt="" class="img-fluid " width="50%"
                        height="auto">
                </a>
                <h1 class="txt-dark-blue mt-5" data-aos="fade-left" data-aos-duration="1000">APA ITU YOUNG STAR
                    CHAMPIONSHIP</h1>
                <P class="deskripsi txt-dark-blue mt-4 " data-aos="fade-right" data-aos-duration="1000">
                    {{$company->description}}

                </P>
                <h1 class="txt-dark-blue mt-4" data-aos="fade-left" data-aos-duration="1000">Untuk Siapa ?</h1>
                <P class="deskripsi txt-dark-blue mt-4" data-aos="fade-right" data-aos-duration="1000">
                    {{$company->apa_kata_mereka}}
                </P>
                <h1 class="txt-dark-blue" data-aos="fade-left" data-aos-duration="1000">Visi & Misi</h1>
                <h1 class="txt-dark-blue deskripsi mt-4" data-aos="fade-left" data-aos-duration="1000">Visi</h1>
                <P class="deskripsi txt-dark-blue mt-4" data-aos="fade-right" data-aos-duration="1000">
                    {!!$company->vision!!}
                </P>
                <h1 class="txt-dark-blue deskripsi mt-4" data-aos="fade-left" data-aos-duration="1000">Misi</h1>
                <P class="deskripsi txt-dark-blue mt-4" data-aos="fade-right" data-aos-duration="1000">
                    {!!$company->mission!!}
                </P>
            </div>
        </div>
    </div>
    @if (!$teams->isEmpty())
    <div class="container" data-aos="fade-up" data-aos-duration="1000">
        <div class="section-title">
            <h1 class="txt-dark-blue">Team Kita</h1>
        </div>
        <div class="row mt-4">
            @foreach ($teams as $team)
            <div class="col-lg-4 col-md-6">
                <div data-aos="fade-right" data-aos-duration="1000">
                    <a class="example-image-link" href="./asset/logo.png"><img src="{{asset('storage/'.$team->image)}}"
                            alt="" class="foto-anggota " width="50%" height="auto"></a>
                    <h3 class="txt-dark-blue font-weight-bold">{{$team->name}}</h3>
                    <h4 class="txt-grey">{{$team->title}}</h4>
                    </a>
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
