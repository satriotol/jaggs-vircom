@extends('layouts.admin')
@section('css')
<link rel="stylesheet" href="{{asset('/plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
@endsection
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Lomba Form</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active">Lomba Form</li>
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
                            <h3 class="card-title">Lomba Form</h3>
                        </div>
                        @include('admin.partials.error')
                        <form role="form" autocomplete="off"
                            action="@isset($lomba) {{route('lomba.update',$lomba->id)}} @endisset @empty($lomba) {{route('lomba.store')}} @endempty"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @if (isset($lomba))
                            @method('PUT')
                            @endif
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="Lomba">Nama Lomba</label>
                                    <input type="text" name="name" class="form-control" id="Lomba"
                                        placeholder="Masukkan nama lomba..."
                                        value="{{isset($lomba) ? $lomba->name : ''}}">
                                </div>
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select class="form-control select2bs4" name="kategori_id" style="width: 100%;">
                                        <option selected="selected">Pilih Salah Satu</option>
                                        @foreach ($kategoris as $kategori)
                                        <option value="{{$kategori->id}}">{{$kategori->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Jenjang</label>
                                    <select class="select2bs4" name="id_jenjang[]" multiple="multiple"
                                        data-placeholder="Pilih Jenjang" style="width: 100%;">
                                        @foreach ($jenjangs as $jenjang)
                                        <option value="{{$jenjang->id}}">{{$jenjang->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi Lomba</label>
                                    <textarea class="form-control" rows="3" placeholder="Masukkan deskripsi lomba ..."
                                        name="description"></textarea>
                                </div>
                                <div class="form-group">
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
                                        value="{{isset($lomba) ? $lomba->name : ''}}">
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
                                                        autocomplete="off" />
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
                                                        autocomplete="off" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
<script src="{{asset('/plugins/select2/js/select2.full.min.js')}}"></script>
<script>
    $(function () {
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        });
    })

</script>
<script type="text/javascript">
    $(function () {
        $('#datetimepicker7').datetimepicker({
            format: 'YYYY/MM/DD',
        });
        $('#datetimepicker8').datetimepicker({
            useCurrent: false,
            format: 'YYYY/MM/DD',
        });
        $("#datetimepicker7").on("change.datetimepicker", function (e) {
            $('#datetimepicker8').datetimepicker('minDate', e.date);
        });
        $("#datetimepicker8").on("change.datetimepicker", function (e) {
            $('#datetimepicker7').datetimepicker('maxDate', e.date);
        });
    });

</script>
<script src="{{asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        bsCustomFileInput.init();
    });
</script>
@endsection
