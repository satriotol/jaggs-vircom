@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sub Kategori Form</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active">Sub Kategori Form</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Sub Kategori Form</h3>
                        </div>
                        @include('admin.partials.error')
                        <form role="form" action="{{route('subkategori.update',$kategori->id)}}" method="POST">
                        {{-- <form role="form" action="" method="POST"> --}}
                            @method('PUT')
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Kategori Utama<span style="color: red">*</span></label>
                                    <select class="form-control select2bs4" name="parent_id" style="width: 100%;" required>
                                        <option selected="selected">Pilih Salah Satu</option>
                                        @foreach ($kategoris as $kategori)
                                        <option value="{{$kategori->id}}" @if ($kategori->id === $kategori->kategori_id) selected @endif>
                                            {{$kategori->name}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Kategori">Nama Sub Kategori</label>
                                    <input type="text" name="name" class="form-control" id="Kategori"
                                        placeholder="Masukkan Kategori..." value="{{$subkategori->name}}">
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
