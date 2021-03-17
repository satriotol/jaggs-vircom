@extends('layouts.main')
@section('content')
<!-- ======= Tentang Section ======= -->
<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about mt-5">
        <div class="container" data-aos="fade-up">
            <div class="row mt-1 mb-4">
                <div class="col-lg-12">
                    <span style="color:#cda45e;">{{$lomba->name}} - {{$lomba->kategori->name}} -
                        @foreach($lomba->jenjang as $j)
                        {{$j->name}}
                        @endforeach
                    </span>
                </div>
            </div>
        </div>
        <div class="container detail">
            <div class="detail-lomba">
                <img style="width:100%; height:300px; position: relative; object-fit: cover;"
                    src="{{asset('storage/'.$lomba->image)}}">
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="font-italic">
                        Detail lomba
                    </p>
                    <p>{{$lomba->description}}
                    </p>

                    <p class="mb-3" style="color:#cda45e;"> Deadline : {{$lomba->start_date}} - {{$lomba->end_date}}
                    </p>
                    <a href="{{$lomba->link}}" style=" border-radius: 30px; padding: 10px; background-color: #cda45e;"
                        class="btn btn-secondary" target="_blank">Ikuti Lomba</a>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 offset-1">
                    <img src="media.jpg" width="800px" alt="" srcset="">
                </div>
            </div>
        </div>
    </section><!-- End About Section -->
</main><!-- End #main -->

@endsection
