@extends('layouts.main')
@section('content')
<section class="bg-utama margin-nav">
    <div class="container pt-5">
        <section class="lomba-detail pb-5">
            <div class="row">
                <div class="col-lg-4 side-detail-lomba mb-2 order-2 order-lg-1">
                    <div class="menu mb-3" data-aos="fade-right">
                        <div class="menu-empty p-3"></div>
                        @foreach ($categories as $category)
                        <button class="btn dropdown-custom menu-title p-3 mt-2 " id="{{$category->id}}" onclick="Dropdown(this.id)">
                            <h2 class="txt-dark-blue">{{$category->name}}</h2>
                        </button>
                        <ul class="list-group dropdown-custom-menu " id="menu-{{$category->id}}">
                            @foreach ($category->children as $cc)
                            {{-- <a class="dropdown-item dropdown-item-custom active txt-dark-blue" href="{{route('kategori',$category->id)}}">{{$cc->name}}</a> --}}
                            <a class="dropdown-item dropdown-item-custom txt-dark-blue" href="{{route('kategori',$category->id)}}">{{$cc->name}}</a>
                            @endforeach
                        </ul>
                        @endforeach
                        <div class="menu-empty p-3 mt-2 mt-2"></div>
                    </div>
                    <div class="related-lomba mt-2" data-aos="fade-right">
                        <div class="related-lomba-title txt-dark-blue">
                            <h2><span class="border-blue">LOMBA LAINNYA</span></h2>
                        </div>
                        @foreach ($lombaOthers as $l)
                        <div class="related-lomba-content mt-4">
                            <div class="related-lomba-image">
                                <a href="{{route('detail',$l->id)}}"><img class="img-thumbnail" src="{{asset('storage/'.$l->image)}}" alt=""></a>
                                <div class="related-lomba-image-kategori">
                                    <p>{{$l->kategori->name}}</p>
                                </div>
                            </div>
                            <div class="mt-2 related-lomba-image-title">
                                <a href="" class="txt-dark-blue"><h2>{{$l->name}}</h2></a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-8 order-1 order-lg-2 mb-3">
                    <div class="detail-lomba p-3" data-aos="fade-left">
                        <div class="detail-lomba-image text-center">
                            <a onclick="lightbox()" href="{{asset('storage/'.$lomba->image)}}" data-lightbox="gallery1">
                                <img src="{{asset('storage/'.$lomba->image)}}" class="img-thumbnail" alt="" /></a>
                        </div>
                        <div class="detail-lomba-isi mt-5">
                            <h3 class="txt-dark-blue">{{$lomba->name}}</h3>
                            <p class="txt-grey text-capitalize">Deskripsi Lomba</p>
                            <div class="txt-dark-blue">
                                {!! $lomba->description !!}
                            </div>
                        </div>
                        <div class="detail-lomba-syarat mt-5">
                            <h3 class="txt-dark-blue">Syarat Dan Ketentuan</h3>
                            <div class="txt-dark-blue">
                                {!! $lomba->ketentuan !!}
                            </div>
                        </div>
                        <div class="detail-lomba-hadiah mt-5">
                            <h3 class="txt-dark-blue">Hadiah</h3>
                            <div class="txt-dark-blue">
                                {!! $lomba->hadiah !!}
                            </div>
                        </div>
                        <div class="detail-lomba-deadline mt-5">
                            <h3 class="txt-red">Deadline Lomba</h3>
                            <p class="txt-red">{{$lomba->start_date}} sampai {{$lomba->end_date}}</p>
                        </div>
                        <div class="detail-lomba-daftar mt-5 text-center">
                            <a href="{{$lomba->link}}" target="_blank" class="btn btn-active-blue">Daftar Lomba</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="container-fluid bg-dua mb-5">
        <div class="text-center py-5">
            <div class="embed-responsive embed-responsive-16by9 mx-auto">
                <iframe class="embed-responsive-item" src="{{$lomba->video_link}}"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
<script>
    function Dropdown(clicked_id) {
        console.log(clicked_id);
        var x = document.getElementById("menu-" + clicked_id);
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

</script>
@endsection
