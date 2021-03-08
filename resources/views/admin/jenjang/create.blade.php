@extends('layouts.admin')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Jenjang Form</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active">Jenjang Form</li>
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
                            <h3 class="card-title">Jenjang Form</h3>
                        </div>
                        @include('admin.partials.error')
                        <form role="form" action="@isset($jenjang) {{route('jenjang.update',$jenjang->id)}} @endisset @empty($jenjang) {{route('jenjang.store')}} @endempty" method="POST">
                            @csrf
                            @if (isset($jenjang))
                            @method('PUT')
                            @endif
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="Jenjang">Nama Jenjang</label>
                                    <input type="text" name="name" class="form-control" id="Jenjang"
                                        placeholder="Masukkan Jenjang..." value="{{isset($jenjang) ? $jenjang->name : ''}}">
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
