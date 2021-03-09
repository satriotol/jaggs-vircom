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
                                        <th>action</th>
                                    </tr>
                                </thead>
                                @foreach ($lombas as $lomba)
                                <tbody>
                                    <td>{{$lomba->name}}</td>
                                    <td>{{$lomba->kategori->name}}</td>
                                    <td>
                                        @foreach ($lomba->jenjang as $j)
                                        {{$j->name}},
                                        @endforeach
                                    </td>
                                    <td><img style="width: 200px;height: auto;" src="{{asset('storage/'.$lomba->image)}}" alt=""></td>
                                    <td><a href="{{route('lomba.edit',$lomba->id)}}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <form class="btn" action="{{route('lomba.destroy', $lomba->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tbody>
                                @endforeach
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
