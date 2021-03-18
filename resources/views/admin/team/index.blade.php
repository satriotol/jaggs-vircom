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
                    <h1>Data Team</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active">Data Team</li>
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
                            <h3 class="card-title">Team</h3>
                        </div>
                        <div class="card-body">
                            <table id="table" class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Jabatan</th>
                                        <th>Deskripsi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @foreach ($teams as $team)
                                <tbody>
                                    <td>{{$team->name}}</td>
                                    <td>{{$team->title}}</td>
                                    <td>{{$team->description}}</td>
                                    <td>
                                        <a href="{{route('team.show',$team->id)}}" class="btn btn-primary btn-sm">Detail</a>
                                        <a href="{{route('team.edit',$team->id)}}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{route('team.destroy', $team->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input class="btn btn-danger btn-sm"  type="submit" value="Delete" onclick="return confirm('Are you sure?')">
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
