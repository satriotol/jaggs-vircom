@extends('layouts.main')
@section('content')
<section class="banner">
    <div class="jumbotron jumbotron-fluid" style="background-image: linear-gradient(
        0deg
        , rgba(96, 132, 179, 1) 20%, rgba(96, 132, 179, .5) 100%), url({{$category->image}});">
    </div>
</section>
<section class="bg-utama overflow-hidden">
    <div class="container">
        <section class="lomba pb-5">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="mb-4 txt-dark-blue text-uppercase">
                        {{$category->name}}
                    </h2>
                    <input type="text" name="" id="kategori" value="{{$category->name}}" hidden>
                    <p class="txt-grey">Beberapa Jenis Lomba Yang Tersedia</p>
                    <div class="border-blue">
                        <div class="row">
                            @foreach ($subcategories as $subcategory)
                            <div class="col-md-6 mb-3">
                                <button class="btn btn-active-blue w-100" id="{{$subcategory->name}}"
                                    onclick="subkategori(this.id)">
                                    {{$subcategory->name}}
                                </button>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="detail content">
                        <div class="mt-3">
                            <h3>Lomba Sepak Bola</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam iure, iste
                                officiis dolorem voluptatibus voluptas commodi animi nesciunt quidem exercitationem
                                ipsa, consequuntur repellat atque placeat, ab sit ut tempore alias!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 rincian-lomba">
                    <div class="row" id="data-container">
                    </div>
                    <div class="row ">
                        <div class="col-md-12  text-center">
                            <div class="center-img kategori" id="pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="kategori pb-5">
            <h1 class="mb-4 txt-dark-blue" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true"><span
                    class="border-blue">Kategori</span> Lomba
            </h1>
            <div class="row" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
                @foreach ($categories as $category)
                <div class="col-md-3">
                    <div class="card card-kategori mb-3"
                        style="background: linear-gradient(0deg, rgba(96, 132, 179, 1) 20%, rgba(96, 132, 179, .5) 100%), url({{$category->image}});">
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
    </div>
</section>
@endsection
@section('js')
<script>
    function subkategori(sub_name) {
        $.ajax({
            type: 'get',
            url: 'http://127.0.0.1:8000/api/lomba',
            data: {
                'subkategori': sub_name
            },
            success: function (result) {
                console.log(result);
                let status = result.status;
                // result.data[0].kategori.subkategori.name;
                if(status === "Sukses"){
                    $(function () {
                    let container = $('#pagination');
                    container.pagination({
                        dataSource: result.data,
                        pageSize: 1,
                        showPageNumbers: false,
                        showNavigator: true,
                        callback: function (data, pagination) {
                            var dataHtml = '';
                            $.each(data, function (index, item) {
                                dataHtml +=
                                    '<div class="col-md-5 mb-3"><a href="http://127.0.0.1:8000/detail/' +
                                    item.id +
                                    '"><img src="http://127.0.0.1:8000/storage/' +
                                    item.gambar +
                                    '" class="foto-rincian-lomba img-thumbnail" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" height="400" alt=""></a></div><div class="col-md-7 content isi-rincian-lomba" data-aos="fade-left" data-aos-duration="1000"><a class="txt-dark-blue" href="http://127.0.0.1:8000/detail/' +
                                    item.id + '"><h3>' + item.name +
                                    '</h3></a><p class="text-uppercase txt-grey">' +
                                    item.kategori.name + '(' + item
                                    .kategori.subkategori.name +
                                    ') | ' + item.jenjang[0] +
                                    '</p><p>' + item.deskripsi +
                                    '</p></div>';
                            });
                            $("#data-container").html(dataHtml);
                        }
                    })
                })
                }
                else{
                    var dataHtml='<h1 class="mb-4 mx-auto txt-dark-blue" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">Lomba Tidak Tersedia</h1>';
                    $("#data-container").html(dataHtml);

                }

                // if (sub_name === result.data[0].kategori.subkategori.name) {
                //     $("#" + sub_name).removeClass('btn-active-blue');
                //     $("#" + sub_name).addClass('btn-active-white');
                //     console.log(result.data[0].kategori.subkategori.name);
                // }else{
                //     $("#" + sub_name).removeClass('btn-active-white');
                //     $("#" + sub_name).addClass('btn-active-blue');
                // }
            }
        });
    }
    $(document).ready(function () {
        $kategori = $(document.getElementById('kategori')).val();
        console.log($kategori);
        $.ajax({
            type: 'get',
            url: 'http://127.0.0.1:8000/api/lomba',
            data: {
                'kategori': $kategori
            },
            success: function (result) {
                let status = result.status;
                // result.data[0].kategori.subkategori.name;
                if(status === "Sukses"){
                    $(function () {
                    let container = $('#pagination');
                    container.pagination({
                        dataSource: result.data,
                        pageSize: 1,
                        showPageNumbers: false,
                        showNavigator: true,
                        callback: function (data, pagination) {

                            var dataHtml = '';
                            $.each(data, function (index, item) {
                                dataHtml +=
                                    '<div class="col-md-5 mb-3" ><a href="http://127.0.0.1:8000/detail/' +
                                    item.id +
                                    '"><img src="http://127.0.0.1:8000/storage/' +
                                    item.gambar +
                                    '" class="foto-rincian-lomba img-thumbnail" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" height="400" alt=""></a></div><div class="col-md-7 content isi-rincian-lomba"  data-aos="fade-left" data-aos-duration="1000" data-aos-once="true"><a class="txt-dark-blue" href="http://127.0.0.1:8000/detail/' +
                                    item.id + '"><h3>' + item.name +
                                    '</h3></a><p class="text-uppercase txt-grey">' +
                                    item.kategori.name + '(' + item
                                    .kategori.subkategori.name +
                                    ') | ' + item.jenjang[0] +
                                    '</p><p>' + item.deskripsi +
                                    '</p></div>';
                            });
                            $("#data-container").html(dataHtml);
                        }
                    })
                })
                }
                else{
                    var dataHtml='<h1 class="mb-4 mx-auto txt-dark-blue" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">Lomba Tidak Tersedia</h1>';
                    $("#data-container").html(dataHtml);

                }

            }
        });

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
