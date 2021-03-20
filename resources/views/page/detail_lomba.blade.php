@extends('layouts.main')
@section('content')
<!-- ======= Tentang Section ======= -->
<main id="main">
    <section id="about" class="about mt-5">
        <div class="container" data-aos="fade-up">
            <div class="row mt-1 mb-4">
                <div class="col-md-12">
                    <p style="font-weight:bold; color:black;">{{$lomba->name}} - {{$lomba->kategori->name}} -
                        @foreach($lomba->jenjang as $j)
                        {{$j->name}}
                        @endforeach
                    </p>
                </div>
            </div>
        </div>
        <div class="container detail">
            <div class="row mt-5">
                <div class="col-md-12 mx-auto">
                    <div class="detail-lomba">
                        <div class="container aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                            <div class="col-md-12 text-center">
                                <a onclick="lightbox()" data-lightbox="gallery3" href="{{asset('storage/'.$lomba->image)}}">
                                <img width="50%" height="50%" style="object-fit: cover;"
                                src="{{asset('storage/'.$lomba->image)}}"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 mb-4">
                <div class="col-md-12">
                    <p class="font-italic">
                        Detail lomba
                    </p>
                    <p>{{$lomba->description}}
                    </p>

                    <p class="mb-3" style="font-weight:bold; color:black;"> Deadline : {{$lomba->start_date}} - {{$lomba->end_date}}
                    </p>
                    <a href="{{$lomba->link}}" style="color:black;"class="BtnOrange" target="_blank">Ikuti Lomba</a>
                </div>
            </div>
            <section id="" class="section-bg">
                <div class="container aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-md-12 text-center">
                        <video width="100%" height="80%" controls>
                            <source src="{{asset('storage/'.$lomba->video)}}" type="video/mp4">
                    </div>
                </div>
            </section>
        </div>
    </section><!-- End About Section -->
</main><!-- End #main -->

@endsection
@section('script')
<script>
</script>
@endsection
