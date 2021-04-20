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
                    <input type="text" name="" id="kategori" value="{{$category->id}}"  hidden>
                    <p class="txt-grey">Beberapa Jenis Lomba Yang Tersedia</p>
                    <div class="border-blue">
                        <div class="row">
                            @foreach ($subcategories as $subcategory)
                            <div class="col-md-6 mb-3">
                                <button class="btn btn-active-blue w-100">{{$subcategory->name}}</button>
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
                            <div class="center-img">
                                <div id="pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="kategori pb-5">
            <h1 class="mb-4 txt-dark-blue" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true"><span class="border-blue">Kategori</span> Lomba
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

            var kategori = {!! json_encode($category->toArray()) !!};
            $name = $(document.getElementById('kategori')).val();
            console.log($name);
    // $(document).ready(function () {
    //     $(function () {
    //         let container = $('#pagination');
    //         var lombas = {!! json_encode($lombas->toArray()) !!};
    //         console.log(lombas);
    //         container.pagination({
    //             dataSource: lombas,
    //             pageSize: 1,
    //             showPageNumbers: false,
    //             showNavigator: true,
    //             callback: function (data, pagination) {
    //                 var dataHtml = '';
    //                 $.each(data, function (index, item) {
    //                     dataHtml +=
    //                         '<div class="col-md-5 mb-3"><a href="http://127.0.0.1:8000/detail/' +item.id + '"><img src="http://127.0.0.1:8000/storage/' + item.image +'" class="foto-rincian-lomba img-thumbnail" height="400" alt=""></a></div><div class="col-md-7 content isi-rincian-lomba"><a class="txt-dark-blue" href="http://127.0.0.1:8000/detail/' +item.id+'"><h3>'+item.name+'</h3></a><p class="text-uppercase txt-grey">'+item.kategori+'('+item.subkategori+')</p><p>'+item.description+'</p></div>';

    //                 });
    //                 $("#data-container").html(dataHtml);
    //             }
    //         })
    //     })

    // });

</script>
@endsection
