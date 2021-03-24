@extends('layouts.main')
@section('content')
<style>
    .play-btn {
        width: 94px;
        height: 94px;
        background: radial-gradient(#ffa500 50%, rgba(205, 164, 94, 0.4) 52%);
        border-radius: 50%;
        display: block;
        position: relative;
        overflow: hidden;
    }

    .play-btn::after {
        content: '';
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translateX(-40%) translateY(-50%);
        width: 0;
        height: 0;
        border-top: 10px solid transparent;
        border-bottom: 10px solid transparent;
        border-left: 15px solid #fff;
        z-index: 100;
        transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }

    .play-btn::before {
        content: '';
        position: absolute;
        width: 120px;
        height: 120px;
        -webkit-animation-delay: 0s;
        animation-delay: 0s;
        -webkit-animation: pulsate-btn 2s;
        animation: pulsate-btn 2s;
        -webkit-animation-direction: forwards;
        animation-direction: forwards;
        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite;
        -webkit-animation-timing-function: steps;
        animation-timing-function: steps;
        opacity: 1;
        border-radius: 50%;
        border: 5px solid rgba(205, 164, 94, 0.7);
        top: -15%;
        left: -15%;
        background: rgba(198, 16, 0, 0);
    }

    .play-btn:hover::after {
        border-left: 15px solid #ffa500;
        transform: scale(20);
    }

    .play-btn:hover::before {
        content: '';
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translateX(-40%) translateY(-50%);
        width: 0;
        height: 0;
        border: none;
        border-top: 10px solid transparent;
        border-bottom: 10px solid transparent;
        border-left: 15px solid #fff;
        z-index: 200;
        -webkit-animation: none;
        animation: none;
        border-radius: 0;
    }

</style>
<!-- ======= Tentang Section ======= -->
<main id="main">
    <section id="about" class="about mt-5">
        <div class="container" data-aos="fade-up">
            <div class="row mt-1 mb-4">
                <div class="col-md-12">

                </div>
            </div>
        </div>
        <div class="container detail">
            <div class="row mt-5">
                <div class="col-md-12 mx-auto">
                    <div class="detail-lomba">
                        <div class="container aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                            <div class="col-md-12 text-center">
                                <a onclick="lightbox()" data-lightbox="gallery3"
                                    href="{{asset('storage/'.$lomba->image)}}">
                                    <img width="50%" height="auto" style="object-fit: cover;"
                                        src="{{asset('storage/'.$lomba->image)}}"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 mb-4">
                <div class="col-md-8">
                    <div class="title">
                        <h3 style="font-weight: bold;  text-transform: uppercase;">{{$lomba->name}}</h3>
                        <h5>{{$lomba->kategori->name}} / @foreach ($lomba->jenjang as $j)
                            {{$j->name}},
                            @endforeach</h5>
                    </div>
                    <p>{!!$lomba->description!!}</p>
                    <p class="mb-3" style="font-weight:bold; color:black;"> Durasi Lomba <br>
                        Tanggal Mulai : {{$lomba->start_date}} <br>
                        Tanggal Selesai : {{$lomba->end_date}} <br>
                    </p>
                    <div class="container">
                        <div class="text-center">
                            <a href="{{$lomba->link}}" style="color:black;" class="BtnOrange" target="_blank">Ikuti
                                Lomba</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="why-use" class="row why-us mt-5" data-aos="fade-up">
                        <div class="col-md-12 mx-auto mb-3">
                            <div class="row box" data-aos="zoom-in" data-aos-delay="200">
                                <h4>Persyaratan</h4>
                                <p>{!!$lomba->ketentuan!!}</p>
                            </div>
                        </div>
                        <div class="col-md-12 mx-auto">
                            <div class="row box" data-aos="zoom-in" data-aos-delay="200">
                                <h4>Hadiah</h4>
                                <p>{!!$lomba->hadiah!!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if ($lomba->video)
        <div class="container-fluid py-5" style="background-color: black">
            <div class="col-md-12">
                <a href="{{$lomba->video}}" class="venobox play-btn vbox-item mx-auto" data-vbtype="video"
                    data-autoplay="true"></a>
            </div>
        </div>
        @endif
    </section><!-- End About Section -->
</main><!-- End #main -->

@endsection
@section('script')
<script type="text/javascript" src="{{asset('app/vendor/venobox/venobox.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $('.venobox').venobox();
    });

</script>
@endsection
