@extends('layouts.admin')
@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
@endsection
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Kategori</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active">Data Kategori</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            @include('admin.partials.success')
            @include('admin.partials.error')
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <div class="card-title">Kategori</div>
                        </div>
                        <div class="card-body">
                            <p>Name : {{$kategori->name}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Subkategori</h3>
                        </div>
                        <div class="card-body">
                            <table id="table" class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kategori->children as $kc)
                                    <tr>
                                        <td>{{$kc->name}}</td>
                                        <td><a href="{{route('subkategori.edit',$kc->id)}}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <form class="d-inline" action="{{route('subkategori.destroy', $kc->id)}}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Lomba</h3>
                        </div>
                        <div class="card-body">
                            <table id="table2" class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Jenjang</th>
                                        <th>Subkategori</th>
                                        <th>Tanggal</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kategori->lomba as $lomba)
                                    <tr>
                                        <td>{{$lomba->name}}</td>
                                        <td>@foreach ($lomba->jenjang as $lj)
                                            {{$lj->name}},
                                            @endforeach</td>
                                        <td>{{$lomba->subkategori->name}}</td>

                                        <td
                                        @if ($lomba->start_date <= now())
                                        @if ($lomba->end_date >= now())
                                        class="bg-success"
                                        @else
                                        class="bg-danger"
                                        @endif
                                        @endif>
                                                {{$lomba->start_date}} - {{$lomba->end_date}}</td>
                                        <td><a href="{{route('lomba.show',$lomba->id)}}"
                                                class="btn btn-primary btn-sm">Detail</a>
                                            <a href="{{route('lomba.edit',$lomba->id)}}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <form class="d-inline" action="{{route('lomba.destroy', $lomba->id)}}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@section('script')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function () {
        $('#table').DataTable();
        $('#table2').DataTable();
    });

</script>
@endsection
