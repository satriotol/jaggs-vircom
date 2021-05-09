@extends('layouts.main')
@section('content')
<section id="contact overflow-hidden" class="contact mt-5 mb-5">
    <div class="container" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
        <div class="row ">
            <div class="col-md-4 mt-5">
                <div class="info">
                    <div class="address">
                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-map-marker-alt icon"></i>
                            </div>
                            <div class="col-10">
                                <h4 class="txt-dark-blue">Alamat :</h4>
                                <p class="txt-grey">{{$company->address}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="email">
                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-envelope icon"></i>
                            </div>
                            <div class="col-10">
                                <h4 class="txt-dark-blue">E-mail:</h4>
                                <p class="txt-grey">{{$company->email}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="phone">
                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-phone-alt icon"></i>
                            </div>
                            <div class="col-10">
                                <h4 class="txt-dark-blue">Telepon:</h4>
                                <p class="txt-grey">{{$company->phone_number}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8 mt-5">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group ">
                                <input type="text" class="form-control kontak" id="exampleFormControlInput1"
                                    placeholder="Nama" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group ">
                                <input type="email" class="form-control kontak" id="exampleFormControlInput1"
                                    placeholder="E-mail" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group ">
                                <input type="text" class="form-control kontak" id="exampleFormControlInput1"
                                    placeholder="Subjek" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group ">
                                <textarea class="form-control kontak" id="exampleFormControlTextarea1"
                                    placeholder="Pesan" rows="3" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="text-center"><button class="btn-master" type="submit">Kirim Pesan</button></div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
