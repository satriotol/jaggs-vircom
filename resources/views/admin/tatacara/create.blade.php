@extends('layouts.admin')
@section('css')
<link rel="stylesheet" href="{{asset('/plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.css')}}">
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
                            action="@isset($lomba) {{route('tatacara.update',$lomba->id)}} @endisset @empty($lomba) {{route('tatacara.store')}} @endempty"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @if (isset($lomba))
                            @method('PUT')
                            @endif
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="Lomba">Nomor <span style="color: red">*</span></label>
                                    <input type="text" name="name" class="form-control" id="Lomba"
                                        placeholder="Masukkan nama lomba..."
                                        value="{{isset($lomba) ? $lomba->name : ''}}" required>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi Tata Cara <span style="color: red">*</span></label>
                                    <textarea class="textarea" rows="3" placeholder="Masukkan deskripsi lomba ..."
                                        name="description">{{isset($lomba) ? $lomba->description:''}}</textarea>
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
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
    $('.textarea').summernote({
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['para', ['ul', 'ol', 'paragraph']],
        ],
        callbacks: {
            onPaste: function (e) {
                var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData(
                    'Text');
                e.preventDefault();
                document.execCommand('insertText', false, bufferText);
            }
        }
    });

</script>
@endsection
