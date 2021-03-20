@extends('layouts.main')
@section('content')
<style>
    .tentang-box {
        margin: 0;
        font-size: 36px;
        font-weight: 700;
        font-family: "Playfair Display", serif;
        color: #ffa500;
    }

</style>
<!-- ======= Tentang Section ======= -->

<main>
    <section id="tentang" class="tentang mt-5">
        <div class="container">
            <div class="row">
                <div class="offset-md-4 col-md-4">
                    <div class="text-center">
                        <p class="tentang-box">Profil Perusahaan</p>
                    </div>
                </div>
            </div>
            <div class="row mt-2 mb-4">
                @if ($company->image_desc)
                <div class="col-md-6 ">
                    <a onclick="lightbox()" href="{{asset('storage/'.$company->image_desc)}}" data-lightbox="gallery1">
                        <img src="{{asset('storage/'.$company->image_desc)}}" alt="" width="100%" height="300px"
                            style="object-fit: cover"></a>
                </div>
                <div class="col-md-6">
                    {!!$company->description!!}
                </div>
                @else
                <div class="col-md-12">
                    <div class="text-center">
                        <p>
                            {!!$company->description!!}
                        </p>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </section><!-- End Chefs Section -->
    <!-- ======= Testimonials Section ======= -->
    {{-- <section id="testimonials" class="testimonials section-bg">
        <div class="container owl-carousel testimonials-carousel" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-md-12 text-center">
                <h1 style="color: #aaaaaa;; ">{{$lomba}} Aktif</h1>
    </div>
    </div>
    </section><!-- End Testimonials Section --> --}}

    <section id="" class="section-bg" data-aos="fade-right" data-aos-delay="100">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center">
                    <h4 style="color: #ffa500;">LOMBA</h4>
                    <h1 style="color: #ffa500; ">{{$lomba}}</h1>
                </div>
                <div class="col-md-4 text-center">
                    <h4 style="color: #ffa500;">KATEGORI</h4>
                    <h1 style="color: #ffa500; ">{{$kategori}}</h1>
                </div>
                <div class="col-md-4 text-center">
                    <h4 style="color: #ffa500;">JENJANG</h4>
                    <h1 style="color: #ffa500; ">{{$jenjang}}</h1>
                </div>
            </div>
        </div>
    </section><!-- End Testimonials Section -->
    <div class="container mt-5" style="padding-right: 0px; padding-left: 0px;">
        <div class="row">
            <div class="offset-md-4 col-md-4">
                <div class="text-center">
                    <p class="tentang-box">Visi Misi</p>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12 ">
                    <h1>Visi</h1>
                    <p>{!!$company->vision!!}</p>
                </div>
                <div class="col-md-12 mt-4">
                    <h1>Misi</h1>
                    <p>{!!$company->mission!!}</p>
                </div>
            </div>
        </div>
        <!-- ======= Chefs Section ======= -->
        <section id="tentang" class="tentang">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Team Kita</h2>
                    <p>Our Team</p>
                </div>
                <div class="row">
                    @foreach ($teams as $team)
                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="100">
                            <a onclick="lightbox()" href="{{asset('storage/'.$team->image)}}" data-lightbox="gallery1">
                                <img src="{{asset('storage/'.$team->image)}}" width="100%" height="300px"
                                    style="object-fit: cover" data-lightbox="gallery1" alt=""></a>
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4 style="font-weight:bold;">{{$team->name}}</h4>
                                    <span style="color:  #ffa500; font-weight:bold;">{{$team->title}}</span>
                                    <p>{!!$team->description!!}</p>
                                </div>
                                @if ($team->instagram)
                                <div class="text-center">
                                    <a class="socialmedia" href="{{$team->instagram}}" target="_blank"><i
                                        class="icofont-instagram"></i></a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section><!-- End Chefs Section -->

</main>

<!-- End #main -->
@endsection
@section('script')
@endsection
