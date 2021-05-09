@extends('layouts.admin')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Kategori Form</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active">Kategori Form</li>
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
                            <h3 class="card-title">Kategori Form</h3>
                        </div>
                        @include('admin.partials.error')
                        <form role="form"
                            action="@isset($kategori) {{route('kategori.update',$kategori->id)}} @endisset @empty($kategori) {{route('kategori.store')}} @endempty"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @if (isset($kategori))
                            @method('PUT')
                            @endif
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="Kategori">Nama Kategori</label>
                                    <input type="text" name="name" class="form-control" id="Kategori"
                                        placeholder="Masukkan Kategori..."
                                        value="{{isset($kategori) ? $kategori->name : ''}}">
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi Kategori <span style="color: red">*</span></label>
                                    <textarea class="form-control" maxlength="75" name="description"
                                        placeholder="Masukkan deskripsi ..."
                                        style="width: 100%; height:200px">{{isset($kategori) ? $kategori->description : ''}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="customFile">Image <span style="color: red">*</span></label>
                                    <div class="custom-file">
                                        <input name="image" type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">{{isset($kategori) ? $kategori->image : 'Choose Image'}}</label>
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
<script src="{{asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        bsCustomFileInput.init();
    });

</script>
@endsection
