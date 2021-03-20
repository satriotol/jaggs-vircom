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
                    <h1>Team Form</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active">Team Form</li>
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
                            <h3 class="card-title">Team Form</h3>
                        </div>
                        @include('admin.partials.error')
                        <form role="form"
                            action="@isset($team) {{route('team.update',$team->id)}} @endisset @empty($team) {{route('team.store')}} @endempty"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @if (isset($team))
                            @method('PUT')
                            @endif
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="team">Nama <span style="color: red">*</span></label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Masukkan nama ..." value="{{isset($team) ? $team->name : ''}}">
                                </div>
                                <div class="form-group">
                                    <label for="title">Jabatan <span style="color: red">*</span></label>
                                    <input type="text" name="title" class="form-control" id="name"
                                        placeholder="Masukkan jabatan..." value="{{isset($team) ? $team->title : ''}}">
                                </div>
                                <div class="form-group">
                                    <label for="instagram">Link Instagram</label>
                                    <input type="text" name="instagram" class="form-control" id="name"
                                        placeholder="Masukkan link instagram..."
                                        value="{{isset($team) ? $team->instagram : ''}}">
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi Anggota <span style="color: red">*</span></label>
                                    <textarea name="description" placeholder="Masukkan deskripsi ..."
                                        style="width: 100%; height:200px">{{isset($team) ? $team->description : ''}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="customFile">Foto Anggota @empty($team)
                                        <span style="color: red">*</span>
                                        @endempty </label>
                                    <div class="custom-file">
                                        <input name="image" type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
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
        </div>
    </section>
</div>
@endsection
@section('script')
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script>
    $(function () {
        $('.textarea').summernote()
    })

</script>
<script type="text/javascript">
    $(document).ready(function () {
        bsCustomFileInput.init();
    });

</script>
@endsection
