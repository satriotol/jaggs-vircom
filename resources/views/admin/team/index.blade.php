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
                                        <th>Foto</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($teams as $team)
                                    <tr>
                                        <td>{{$team->name}}</td>
                                        <td>{{$team->title}}</td>
                                        <td><img src="{{asset('storage/'.$team->image)}}" width="100" height="100"
                                                style="object-fit: cover" alt=""></td>
                                        <td>
                                            <a href="{{route('team.edit',$team->id)}}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <form class="d-inline" action="{{route('team.destroy', $team->id)}}" method="POST">
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
