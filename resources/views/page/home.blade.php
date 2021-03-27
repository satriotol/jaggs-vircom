@extends('layouts.main')
@section('content')
<section id="hero" class="d-flex align-items-center"
    style="background:url({{asset('app/img/karate.jpg')}}) top center; background-size: cover;">
    <div class="container position-relative text-center text-lg-left" data-aos="zoom-in" data-aos-delay="100">
        <div class="row mb-5">
            <div class="col-md-8">
                <h1>Young <span>Star</span></h1>
                <h2>Championship</h2>
            </div>
            @if ($company->video_profile)
            <div class="col-md-4">
                <a href="{{$company->video_profile}}" class="venobox play-btn ml-auto" data-vbtype="video">
            </div>
            @endif
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <input type="email" class="form-control" id="fieldsearch" placeholder="Nama Lomba">
                </div>
                <div class="form-group">
                    <select class="form-control select2bs4" id="exampleFormControlSelect1">
                        <option value="">Pilih Jenjang</option>
                        @foreach ($jenjangs as $jenjang)
                        <option value="{{$jenjang->id}}">{{$jenjang->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control" id="kategori">
                        <option value="kosong">Pilih Kategori</option>
                        @foreach ($kategoris as $kategori)
                        <option value="{{$kategori->name}}">{{$kategori->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <a href="#about" class="ml-auto mr-3"> <button id="Search" class="BtnOrange"> Cari</button> </a>
        </div>
    </div>
</section>
<main id="main">
    <section id="about" class="about"
        style="background:url({{asset('app/img/bg.jpeg')}}) center center;  background-size: cover;">
        <div id="data" class="container" data-aos="fade-up">
            @foreach ($lombas as $lomba)
            <div class="row mt-4 mb-3 judul" style=" padding:20px; border-radius:20px; background-color:#00000096;"
                data-aos="fade-up">
                <div class="col-lg-8">
                    <h3> <a style="font-weight: bold;" href="{{route("detail",$lomba->id)}}">{{$lomba->name}}</a></h3>
                    <p style="font-weight: bold;">
                        {{$lomba->kategori->name}}
                    </p>

                    <p style="font-weight: bold;">
                        @foreach ($jenjangs as $jenjang) {{$jenjang->name}} @endforeach
                    </p>

                    <p style="font-weight: bold;">{!! substr(strip_tags($lomba->description),0,200)!!}...</p>
                    @if ($lomba->start_date <= now()) @if ($lomba->end_date >= now())
                        <span class="ket-lomba"
                            style=" color: #fff;background-color:  #28a745; border-color: white;">Open</span>
                        @else
                        <span class="ket-lomba"
                            style="color: #fff;background-color: #dc3545; border-color: white;">Closed</span>
                        @endif
                        @endif
                </div>
                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="about-img img-fluid">
                        <a href="{{route('detail',$lomba->id)}}"><img src="{{asset('storage/'.$lomba->image)}}"
                                class="img-fluid" alt=""></a>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="container">
                <div class="row">
                    <div class="mx-auto">
                        {{ $lombas->links() }}
                    </div>
                </div>
            </div>
            {{-- <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-4">
                        <ul class="pagination pagination-md p-md-5">
                            <li class="page-item disabled">
                                <a class="page-link p-3" href="#" tabindex="-1">1</a>
                            </li>
                            <li class="page-item"><a class="page-link p-3" href="#">2</a></li>
                            <li class="page-item"><a class="page-link p-3" href="#">3</a></li>
                        </ul>
                    </div>
                </div>
            </div> --}}
        </div>
    </section><!-- End About Section -->
</main><!-- End #main -->
@endsection
@section('script')
<script type="text/javascript">
    $('#Search').on('click', function () {
        $value = $(document.getElementById('kategori')).val();

        $.ajax({
            type: 'get',
            url: 'http://127.0.0.1:8000/api/kategori',
            data: {
                'name': $value
            },
            success: function (result) {

                let sukses = result.meta.total_post;
                if (sukses > 0) {
                    let hasil = result.data;
                    $.each(hasil, function (key, value) {
                        $('#data').html(value.name);
                    });
                } else {
                    $.ajax({
                        type: 'get',
                        url: 'http://127.0.0.1:8000/api/kategori',
                        data: {
                            'name': ''
                        },
                        success: function (result) {
                            let sukses = result.meta.total_post;
                            let hasil = result.data;
                            var text = "";
                            var i;
                            for (i = 0; i < sukses; i++) {
                                text += hasil[i].name + "<br>";
                            }
                            document.getElementById("data").innerHTML = text;
                        }
                    });
                }

            }
        });
    });

</script>
@endsection
