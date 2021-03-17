@extends('layouts.admin')
@section('css')
<link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.css')}}">
@endsection
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Company</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active">Company</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Company</h3>
                        </div>
                        <form role="form" autocomplete="off" action="{{route('company.update',1)}}" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="card-body">
                                @include('admin.partials.error')
                                @include('admin.partials.success')
                                <div class="form-group">
                                    <label for="Lomba">Nama Perusahaan</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Masukkan nama perusahaan..." value="{{$company->name}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="Lomba">Alamat Perusahaan</label>
                                    <input type="text" name="address" class="form-control" id="address"
                                        placeholder="Masukkan nama alamat..." value="{{$company->address}}" required>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Lomba">Email Perusahaan</label>
                                            <input type="text" name="email" class="form-control" id="email"
                                                placeholder="Masukkan email perusahaan..." value="{{$company->email}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Lomba">Nomor Perusahaan</label>
                                            <input type="number" name="phone_number" class="form-control"
                                                id="phone_number" placeholder="Masukkan nomor perusahaan..."
                                                value="{{$company->phone_number}}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi Perusahaan</label>
                                    <textarea class="textarea" name="description" placeholder="Masukkan deskrpsi perusahaan..."
                                        style="width: 100%;height:500px;">{{$company->description}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Visi Perusahaan</label>
                                    <textarea class="textarea" name="vision" placeholder="Masukkan visi perusahaan..."
                                        style="width: 100%;height:500px;">{{$company->vision}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Misi Perusahaan</label>
                                    <textarea class="textarea" name="mission" placeholder="Masukkan misi perusahaan..."
                                        style="width: 100%;height:500px;">{{$company->mission}}</textarea>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="customFile">Image</label>
                                    <div class="custom-file">
                                        <input name="image" type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="customFile">Video</label>
                                    <div class="custom-file">
                                        <input name="video" type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Lomba">Link Lomba</label>
                                    <input type="text" name="link" class="form-control" id="Lomba"
                                        placeholder="Masukkan Link Lomba..."
                                        value="{{isset($lomba) ? $lomba->link : ''}}">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tanggal Mulai</label>
                                            <div class="input-group">
                                                <div class="input-group date" id="datetimepicker7"
                                                    data-target-input="nearest">
                                                    <input type="text" name="start_date"
                                                        class="form-control datetimepicker-input"
                                                        placeholder="Masukan Tanggal Akhir ..."
                                                        data-target="#datetimepicker7" data-toggle="datetimepicker"
                                                        value="{{isset($lomba) ? $lomba->start_date : ''}}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tanggal Akhir</label>
                                            <div class="input-group">
                                                <div class="input-group date" id="datetimepicker8"
                                                    data-target-input="nearest">
                                                    <input type="text" placeholder="Masukan Tanggal Akhir ..."
                                                        name="end_date" class="form-control datetimepicker-input"
                                                        data-target="#datetimepicker8" data-toggle="datetimepicker"
                                                        value="{{isset($lomba) ? $lomba->end_date : ''}}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
</div>
@endsection
@section('script')
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
    $(function () {
        // Summernote
        $('.textarea').summernote()
    })

</script>
@endsection
