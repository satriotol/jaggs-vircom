@extends('layouts.main')
@section('css')
<link href="asset/fontawesome/css/all.css" rel="stylesheet">
@endsection
@section('content')
<section class="banner">
    <div class="jumbotron jumbotron-lomba bg-dua d-flex align-items-center">
        <div class="container position-relative">
            <div class="title-jumbotron">
                <h1 class="display-4 font-weight-bold">Young <span class="subtitle-jumbotron">Star</span></h1>
                <p class="lead">
                    Championship
                </p>
            </div>
            <div class="form-cari">
                <div class="form-group">
                    <input type="text" class="form-control br-10" id="Search_name" placeholder="Nama Lomba">
                </div>
                <div class="form-group">
                    <select class="form-control br-10" id="Search_jenjang">
                        <option value="null">Pilih Jenjang</option>
                        @foreach ($jenjangs as $jenjang)
                        <option name="jenjang" value="{{$jenjang->name}}">{{$jenjang->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control br-10" id="Search_kategori">
                        <option value="null">Pilih Kategori</option>
                        @foreach ($categories as $category)
                        <option name="kategori" value="{{$category->name}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="text-right">
                    <a href="#lomba" class="btn-master" id="cari">Cari</a>
                </div>
            </div>
        </div>
</section>
<section class="bg-utama">
    <div class="container">
        <section class="kategori pb-5">
            <h1 class="mb-4 txt-dark-blue" data-aos="fade-left" data-aos-duration="1000">
                <span class="border-blue">Kategori</span> Lomba
            </h1>
            <div class="row" data-aos="fade-right" data-aos-duration="1000">
                @foreach ($categories as $category)
                <div class="col-md-3">
                    <div class="card card-kategori mb-3"
                        style="background: linear-gradient(0deg, rgba(96, 132, 179, 1) 20%, rgba(96, 132, 179, .5) 100%), url(./asset/kategori/sport.jpg);">
                        <div class="card-body card-kategori-text">
                            <div class="text mb-3">
                                <h3 class="card-title">{{$category->name}}</h3>
                                <p class="card-text">
                                    Some quick example text to build on the card title and
                                    make up the bulk of the card's content.
                                </p>
                            </div>
                        </div>
                        <a href="{{route('kategori',$category->id)}}">
                            <div class="card-footer text-right">Lebih Lanjut ></div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        <section id="lomba" class="lomba pb-5">
            <div id="data">
                <h1 class="mb-4 txt-dark-blue" data-aos="fade-left" data-aos-duration="1000">
                    <span class="border-blue">Lomba</span>
                </h1>
                <div data-aos="fade-right" data-aos-duration="1000">
                    @foreach ($lombas as $lomba)
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <a onclick="lightbox()" href="{{route('detail',$lomba->id)}}">
                                <img src="{{asset('storage/'.$lomba->image)}}" alt=""
                                    class="img-thumbnail img-lomba img-lomba" /></a>
                        </div>
                        <div class="col md-9 txt-dark-blue">
                            <a href="{{route('detail',$lomba->id)}}">
                                <h3 class="txt-dark-blue judul-lomba">{{$lomba->name}}</h3>
                            </a>
                            <p class="text-uppercase">{{$lomba->kategori->name}} ({{$lomba->subkategori->name}}) |
                                @foreach ($lomba->jenjang as $lj)
                                {{$lj->name}},
                                @endforeach</p>
                            <p>
                                {!!$lomba->description!!}
                            </p>
                            <div class="status">
                                @if ($lomba->start_date <= now()) @if ( $lomba->end_date >= now())
                                    <button class="btn btn-open btn-sm text-uppercase" disabled>OPEN</button>
                                    @else
                                    <button class="btn btn-close btn-sm text-uppercase" disabled>CLOSE</button>
                                    @endif
                                    @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-md-12  text-center">
                        <div class="center-img">
                            <h1></h1>
                            <a class="icon" href=""><i class="fas fa-arrow-left"></i></a>
                            <a class="icon" href=""><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
@endsection
@section('js')
<script type="text/javascript">
    $('#cari').on('click', function () {
        $name = $(document.getElementById('Search_name')).val();
        $jenjang = $(document.getElementById('Search_jenjang')).val();
        $kategori = $(document.getElementById('Search_kategori')).val();

        console.log($name);
        console.log($jenjang);
        console.log($kategori);
        if ($name === "" && $jenjang === "null" && $kategori !== "null" ){
            console.log("kategori isi name jenjang kosong ")
        }else if ($name === "" && $kategori === "null" && $jenjang !== "null" ){
            console.log("jenjang isi name kategori kosong ")
        }else if ($name !== "" && $kategori === "null" && $jenjang === "null" ){
            console.log("name isi jenjang kategori kosong ")
        }else if ($name !== "" && $kategori === "null" && $jenjang !== "null" ){
            console.log("Name jenjang isi kategori kosong ")
        }else if ($name !== "" && $kategori !== "null" && $jenjang === "null" ){
            console.log("Name kategori isi jenjang kosong ")
        }else if ($name === "" && $kategori !== "null" && $jenjang !== "null" ){
            console.log("jenjang kategori isi name kosong ")
        }else if ($name !== "" && $kategori !== "null" && $jenjang !== "null" ){
            console.log("Semua isi")
        }else {
            console.log("semua kosong")
        }
        // else if($kategori === "null"){
        //     console.log("kategori kosong")
        // }else if($jenjang === "null"){
        //     console.log("jenjang kosong")
        // }else if(){
        //     console.log("semua kosong")
        // }

        // $.ajax({
        //     type: 'get',
        //     url: 'http://127.0.0.1:8000/api/lomba',
        //     data: {
        //         'name': $name,
        //         'jenjang': $jenjang,
        //         'kategori': $kategori
        //     },
        //     success: function (result) {
        //         let status = result.status;
        //         var text = "";
        //         console.log(result.status);
        //         if (status === "Sukses") {
        //             for (i = 0; i < result.meta.total_post; i++) {
        //                 text +=
        //                     '<div class="row mb-3"> <div class="col-md-3"><a href="" > <img src="http://127.0.0.1:8000/storage/' +
        //                     result.data[i].gambar +
        //                     '"alt="" class="img-thumbnail img-lomba" /></a></div><div class="col md-9 txt-dark-blue"><a href=""> <h3 class="txt-dark-blue judul-lomba">' +
        //                     result.data[i].name + '</h3></a><p class="text-uppercase">' + result
        //                     .data[i].kategori.name + ' | ' + result.data[i].jenjang[0] +
        //                     '</p> <p>' + result.data[i].deskripsi +
        //                     '</p><div class="status">' +tgl(result.data[i].end_date) +'</div></div></div>'
        //                 console.log("tgl" + result.data[i].end_date)
        //                 console.log(tgl(result.data[i].end_date))

        //                 // result.data[i].name +'<br class= "wewe">' + result.data[i].gambar + '<br>'+ result.data[i].jenjang[0] + '<br>'+ result.data[i].kategori.name + '<br>';

        //             }
        //             document.getElementById("data").innerHTML =
        //                 '<h1 class="mb-4 txt-dark-blue" data-aos="fade-left" data-aos-duration="1000"><span class="border-blue">Hasil Cari</span></h1>' +
        //                 text;
        //         } else {
        //             document.getElementById("data").innerHTML =
        //                 '<h1 class="mb-4 txt-dark-blue" data-aos="fade-left" data-aos-duration="1000">Lomba Tidak Tersedia</h1>';
        //         }
        //     }
        // });

        // function tgl(end) {
        //     var startbaru = end.toString().replace(/-/g, '');
        //     var Deadline = parseInt(startbaru)
        //     var d = new Date();
        //     var date = d.getDate()
        //     var month = d.getMonth() + 1
        //     var year = d.getFullYear();
        //     if (date < 10) {
        //         var date = "0" + d.getDate()
        //     }
        //     if (month < 10) {
        //         var month = d.getMonth() + 1
        //         var month = "0" + month
        //     }
        //     var date = date.toString()
        //     var month = month.toString()
        //     var year = year.toString()
        //     var todaystr = year + month + date
        //     var today = parseInt(todaystr)
        //     value = today - Deadline
        //     var text = ""
        //     if (value == 0) {
        //         text = '<button class="btn btn-open btn-sm text-uppercase" disabled>OPEN</button>'
        //     } else if (value < 0) {
        //         text = '<button class="btn btn-open btn-sm text-uppercase" disabled>OPEN</button>'
        //     } else {
        //         text = '<button class="btn btn-close btn-sm text-uppercase" disabled>Close</button>'
        //     }
        //     return text
        // }
    });

</script>
@endsection
