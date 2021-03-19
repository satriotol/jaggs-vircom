@extends('layouts.main')
@section('content')
<!-- ======= Tentang Section ======= -->
<main id="main">
    <section id="about" class="about mt-5">
        <div class="container" data-aos="fade-up">
            <div class="row mt-1 mb-4">
                <div class="col-md-12">
                    <span style="color:#cda45e;">{{$lomba->name}} - {{$lomba->kategori->name}} -
                        @foreach($lomba->jenjang as $j)
                        {{$j->name}}
                        @endforeach
                    </span>
                </div>
            </div>
        </div>
        <div class="container detail">
            <div class="row mt-5">
                <div class="col-md-8 offset-md-4">
                    <div class="detail-lomba">
                        <img width="400px" height="400px" style="object-fit: cover;"
                            src="{{asset('storage/'.$lomba->image)}}">
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

                    <p class="mb-3" style="color:#cda45e;"> Deadline : {{$lomba->start_date}} - {{$lomba->end_date}}
                    </p>
                    <a href="{{$lomba->link}}" style=" border-radius: 30px; padding: 10px; background-color: #cda45e;"
                        class="btn btn-secondary" target="_blank">Ikuti Lomba</a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="video-lomba col-md-6 offset-md-3">
                    <video width="600px" class="mx-auto" height="400px" controls>
                        <source src="" type="video/mp4">
                </div>
            </div>
        </div>
    </section><!-- End About Section -->
</main><!-- End #main -->

@endsection
@section('script')
<script>
</script>
@endsection
