@extends('layouts.main')
@section('content')
<style>
    h1.position-relative {
        top: 40%;
    }

    @media (max-width: 767.98px) {
        h1 {
            font-size: 1.6rem
        }

        h1.position-relative {
            top: 0%;
        }

        h3 {
            font-size: 1.4rem
        }

        p {
            font-size: 1.2rem
        }
    }

</style>
<section class="bg-utama margin-nav overflow-hidden">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12 my-5">
                <h1 class="txt-dark-blue " data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">
                    Frequently Asked Question</h1>
                @foreach ($faqs as $index => $faq)
                <div class="row txt-dark-blue deskripsi mt-4">
                    <div class="col-sm-1 text-center">
                        <h1 class="position-relative" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
                            {{$index +1}}
                        </h1>
                    </div>
                    <div class="col-sm-11">
                        <h3 data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">{{$faq->pertanyaan}}</h3>
                        <p data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="my-0">
                            {{$faq->jawaban}}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
