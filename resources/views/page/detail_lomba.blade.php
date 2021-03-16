@extends('layouts.main')
@section('content')
<!-- ======= Tentang Section ======= -->
<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about mt-5">
        <div class="container" data-aos="fade-up">
            <div class="row mt-4 mb-4">
                <div class="col-lg-6">
                    <h3>{{$lomba->name}} - {{$lomba->kategori->name}} - @foreach ($lomba->jenjang as $j)
                        {{$j->name}}
                    @endforeach</h3>
                    <p class="font-italic">
                        Detail lomba
                    </p>
                    <p>
                        {{$lomba->description}}
                    </p>
                </div>
                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="about-img">
                        <img src="{{asset('storage/'.$lomba->image)}}" >
                    </div>
                </div>
                <div class="container-fluid mt-3">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{$lomba->link}}"
                                style=" border-radius: 30px; padding: 20px; background-color: #cda45e;"
                                class="btn btn-secondary" target="_blank">Ikuti Lomba</a>
                        </div>
                        <div class="col-md-6">
                            <p class="font-italic">
                                Deadline lomba
                            </p>
                            <h1 id="deadline" style="margin-top: -30px;"> {{$lomba->start_date}} - {{$lomba->end_date}}</h1>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6 offset-1">
                    <img src="media.jpg" width="800px" alt="" srcset="">
                </div>
            </div>
        </div>

        </div>
    </section><!-- End About Section -->
</main><!-- End #main -->

@endsection
