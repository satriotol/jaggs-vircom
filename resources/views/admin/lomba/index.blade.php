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
                    <h1>Data Lomba</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active">Data Lomba</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('admin.partials.success')
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Lomba</h3>
                        </div>
                        <div class="card-body">
                            <table id="table" class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Kategori</th>
                                        <th>Jenjang</th>
                                        <th>Foto</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lombas as $lomba)
                                    <tr>

                                        <td>{{$lomba->name}}</td>
                                        <td>{{$lomba->kategori->name}}</td>
                                        <td>
                                            @foreach ($lomba->jenjang as $j)
                                            {{$j->name}},
                                            @endforeach
                                        </td>
                                        @if ($lomba->image)
                                        <td><a href="{{asset('storage/'.$lomba->image)}}" target="_blank">Click
                                                Here!</a></td>
                                        @else
                                        <td>Image Not Found</td>
                                        @endif
                                        <td>
                                            <a href="{{route('lomba.show',$lomba->id)}}"
                                                class="btn btn-primary btn-sm">Detail</a>
                                            <a href="{{route('lomba.edit',$lomba->id)}}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{route('lomba.destroy', $lomba->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input class="btn btn-danger btn-sm" type="submit" value="Delete"
                                                    onclick="return confirm('Are you sure?')">
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
    });

</script>
@endsection
