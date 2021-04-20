@extends('layouts.main')
@section('content')
<section class="bg-utama margin-nav overflow-hidden">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12 mt-5 mb-5 ">
                <h1 class="txt-dark-blue mt-5" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true"></h1>
                <h1 class="txt-dark-blue " data-aos="fade-right" data-aos-duration="1000" data-aos-once="true"> <span class="border-blue">
                        Frequently Asked Question</span></h1>
                @foreach ($faqs as $faq)
                <h3 class="txt-dark-blue deskripsi mt-4" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">{{$faq->pertanyaan}}</h3>
                <P class="deskripsi txt-dark-blue mt-2" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">Lorem Ipsum is
                    {{$faq->jawaban}}
                </P>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
