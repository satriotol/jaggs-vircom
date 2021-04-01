@extends('layouts.main')
@section('content')
<section class="home">
    <div class="container mt-4 mb-5 text-center">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('app/img/home.png')}}" alt="Responsive image" width="100%" height="100%">
            </div>
            <div class="col-md-6">
                <div class="welcome">
                    <h1>Young <span>Star</span></h1>
                    <h2>Championship</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-center mb-5 "
        style="background:url({{asset('app/img/bg-video.png')}}); background-size: 600px;">
        <div class="row">
            <div class="col-md-12 mt-5 mb-5 HomeVid">
                <h1>Video Profil YOUNG STAR CHAMPIONSHIP </h1>
                <iframe class="mt-3 " width="400" height="300" src="https://www.youtube.com/embed/vVy9Lgpg1m8"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>

            </div>
        </div>
    </div>
</section>
@endsection
@section('script')

@endsection
