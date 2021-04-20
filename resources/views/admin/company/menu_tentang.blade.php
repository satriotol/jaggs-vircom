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
                        <form role="form" autocomplete="off" action="{{route('company.updatetentang',1)}}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="card-body">
                                @include('admin.partials.error')
                                @include('admin.partials.success')
                                <div class="form-group">
                                    <label>Deskripsi Perusahaan <span style="color: red">*</span></label>
                                    <textarea class="textarea" name="description"
                                        placeholder="Masukkan deskrpsi perusahaan..."
                                        style="width: 100%;height:500px;">{{$company->description}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Visi Perusahaan <span style="color: red">*</span></label>
                                    <textarea class="textarea" name="vision" placeholder="Masukkan visi perusahaan..."
                                        style="width: 100%;height:500px;">{{$company->vision}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Misi Perusahaan <span style="color: red">*</span></label>
                                    <textarea class="textarea" name="mission" placeholder="Masukkan misi perusahaan..."
                                        style="width: 100%;height:500px;">{{$company->mission}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Untuk Siapa <span style="color: red">*</span></label>
                                    <textarea class="textarea" name="apa_kata_mereka" placeholder="Masukkan Untuk Siapa..."
                                        style="width: 100%;height:500px;">{{$company->apa_kata_mereka}}</textarea>
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
<script src="{{asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
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
<script type="text/javascript">
    $(document).ready(function () {
        bsCustomFileInput.init();
    });

</script>
@endsection
