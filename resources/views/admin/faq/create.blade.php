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
                    <h1>FAQ Form</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active">FAQ Form</li>
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
                            <h3 class="card-title">FAQ Form</h3>
                        </div>
                        @include('admin.partials.error')
                        <form role="form"
                            action="@isset($faq) {{route('faq.update',$faq->id)}} @endisset @empty($faq) {{route('faq.store')}} @endempty"
                            method="POST">
                            @csrf
                            @if (isset($faq))
                            @method('PUT')
                            @endif
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Pertanyaan <span style="color: red">*</span></label>
                                    <textarea name="pertanyaan" placeholder="Masukkan pertanyaan ..."
                                        style="width: 100%; height:200px">{{isset($faq) ? $faq->pertanyaan : ''}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Jawaban <span style="color: red">*</span></label>
                                    <textarea name="jawaban" placeholder="Masukkan jawaban ..."
                                        style="width: 100%; height:200px">{{isset($faq) ? $faq->jawaban : ''}}</textarea>
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
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
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
