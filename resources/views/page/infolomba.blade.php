@extends('layouts.main')
@section('css')
<link href="asset/fontawesome/css/all.css" rel="stylesheet">
@endsection
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.1.4/pagination.css" />
<style>


</style>
<section class="banner overflow-hidden">
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
                        <option value="">Pilih Jenjang</option>
                        @foreach ($jenjangs as $jenjang)
                        <option name="jenjang" value="{{$jenjang->name}}">{{$jenjang->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control br-10" id="Search_kategori">
                        <option value="">Pilih Kategori</option>
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
            <h1 class="mb-4 judul txt-dark-blue" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">
            Kategori Lomba
            </h1>
            <div class="row" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
                @foreach ($categories as $category)
                <div class="col-md-3">
                    <div class="card card-kategori mb-3"
                        style="background: linear-gradient(0deg, rgba(96, 132, 179, 1) 20%, rgba(96, 132, 179, .5) 100%), url({{asset('storage/'.$category->image)}});">
                        <div class="card-body card-kategori-text">
                            <div class="text mb-3">
                                <h3 class="card-title">{{$category->name}}</h3>
                                <p class="card-text">
                                    {{$category->description}}
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
                <h1 class="mb-4 judul txt-dark-blue" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">
                    Lomba
                </h1>
                <div id="data-container" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">

                </div>
                <section>
                    <div class="col-md-4 offset-md-4 text-center">
                            <div class="center-img" id="pagination"></div>
                    </div>
                </section>
            </div>
        </section>
    </div>
</section>

@endsection
@section('js')
<script type="text/javascript">
    $(document).ready(function () {
        $.ajax({
            type: 'get',
            url: 'http://127.0.0.1:8000/api/lomba',
            data: {

            },
            success: function (result) {
                console.log(result.data)
                $(function () {
                    let container = $('#pagination');
                    container.pagination({
                        dataSource: result.data,
                        pageSize: 3,
                        showPageNumbers: false,
                        showNavigator: true,
                        callback: function (data, pagination) {
                            var dataHtml = '';
                            $.each(data, function (index, item) {
                                link = '"http://127.0.0.1:8000/detail/' +item.id +'" ';
                                gambar = '"http://127.0.0.1:8000/storage/' +item.gambar +'" ';
                                deskripsi= item.deskripsi.replace('</p>','').replace('<p>','');
                                dataHtml +=
                                    '<div class="row mb-3"> <div class="col-md-3"><a href='+link+'> <img src='+gambar+'alt="" class="img-thumbnail img-lomba" /></a></div><div class="col md-9 txt-dark-blue"><a href='+link+'> <h3 class="txt-dark-blue judul-lomba">' +
                                    item.name +
                                    '</h3></a><p class="text-uppercase">' +
                                    item.kategori.name + ' | ' + item
                                    .jenjang + '</p> <p class="txt-dark-blue ">' +  des(deskripsi) +' </p><div class="status">' + tgl(
                                        item.end_date) +
                                    '</div></div></div>';
                                console.log(item)
                            });

                            $("#data-container").html(dataHtml);
                        }
                    })
                })
            }
        });
        function des(str){
            var deskripsi = '';
            if (str.length > 500){
                deskripsi += str.substring(0,500) + '...'
            }else{
                deskripsi += str
            }
            return deskripsi;
        }
        function tgl(end) {
            var startbaru = end.toString().replace(/-/g, '');
            var Deadline = parseInt(startbaru)
            var d = new Date();
            var date = d.getDate()
            var month = d.getMonth() + 1
            var year = d.getFullYear();
            if (date < 10) {
                var date = "0" + d.getDate()
            }
            if (month < 10) {
                var month = d.getMonth() + 1
                var month = "0" + month
            }
            var date = date.toString()
            var month = month.toString()
            var year = year.toString()
            var todaystr = year + month + date
            var today = parseInt(todaystr)
            value = today - Deadline
            var text = ""
            if (value == 0) {
                text = '<button class="btn btn-open btn-sm text-uppercase" disabled>OPEN</button>'
            } else if (value < 0) {
                text = '<button class="btn btn-open btn-sm text-uppercase" disabled>OPEN</button>'
            } else {
                text = '<button class="btn btn-close btn-sm text-uppercase" disabled>Close</button>'
            }
            return text
        }
    });
    $('#cari').on('click', function () {
        $name = $(document.getElementById('Search_name')).val();
        $jenjang = $(document.getElementById('Search_jenjang')).val();
        $kategori = $(document.getElementById('Search_kategori')).val();

        console.log($name);
        console.log($jenjang);
        console.log($kategori);

        $.ajax({
            type: 'get',
            url: 'http://127.0.0.1:8000/api/lomba',
            data: {
                'name': $name,
                'kategori': $kategori,
                'jenjang':$jenjang
            },
            success: function (result) {
                let status = result.status;
                var text = "";
                console.log(result.status);
                if (status === "Sukses") {
                    for (i = 0; i < result.meta.total_post; i++) {
                        console.log(result)
                        link = '"http://127.0.0.1:8000/detail/' +result.data[i].id +'" ';
                        gambar = '"http://127.0.0.1:8000/storage/' +result.data[i].gambar  +'" ';
                        deskripsi= result.data[i].deskripsi.replace('</p>','').replace('<p>','');
                        text +=
                            '<div class="row mb-3"> <div class="col-md-3"><a href='+link+' > <img src='+gambar+'alt="" class="img-thumbnail img-lomba" /></a></div><div class="col md-9 txt-dark-blue"><a href='+link+'> <h3 class="txt-dark-blue judul-lomba">' + result.data[i].name + '</h3></a><p class="text-uppercase">' + result
                            .data[i].kategori.name + ' | ' + result.data[i].jenjang+
                            '</p> <p class="txt-dark-blue " id="deskripsi" style="border: none; pointer-events: none; overflow:hidden;"  name="w3review" rows="5" cols="100">' +  des(deskripsi) +
                            '</p><div class="status">' + tgl(result.data[i].end_date) +
                            '</div></div></div>'
                        console.log("tgl" + result.data[i].end_date)
                        console.log(tgl(result.data[i].end_date))
                        // result.data[i].name +'<br class= "wewe">' + result.data[i].gambar + '<br>'+ result.data[i].jenjang[0] + '<br>'+ result.data[i].kategori.name + '<br>';
                    }
                    document.getElementById("data").innerHTML =
                        '<h1 class="mb-4 txt-dark-blue" data-aos="fade-left" data-aos-duration="1000"><span class="border-blue">Hasil Cari</span></h1>' +
                        text;
                } else {
                    document.getElementById("data").innerHTML =
                        '<h1 class="mb-4 txt-dark-blue" data-aos="fade-left" data-aos-duration="1000">Lomba Tidak Tersedia</h1>';
                }

            }
        });
        function des(str){
            var deskripsi = '';
            if (str.length > 500){
                deskripsi += str.substring(0,500) + '...'
            }else{
                deskripsi += str
            }
            return deskripsi;
        }
        function tgl(end) {
            var startbaru = end.toString().replace(/-/g, '');
            var Deadline = parseInt(startbaru)
            var d = new Date();
            var date = d.getDate()
            var month = d.getMonth() + 1
            var year = d.getFullYear();
            if (date < 10) {
                var date = "0" + d.getDate()
            }
            if (month < 10) {
                var month = d.getMonth() + 1
                var month = "0" + month
            }
            var date = date.toString()
            var month = month.toString()
            var year = year.toString()
            var todaystr = year + month + date
            var today = parseInt(todaystr)
            value = today - Deadline
            var text = ""
            if (value == 0) {
                text = '<button class="btn btn-open btn-sm text-uppercase" disabled>OPEN</button>'
            } else if (value < 0) {
                text = '<button class="btn btn-open btn-sm text-uppercase" disabled>OPEN</button>'
            } else {
                text = '<button class="btn btn-close btn-sm text-uppercase" disabled>Close</button>'
            }
            return text
        }
    });

</script>
@endsection
