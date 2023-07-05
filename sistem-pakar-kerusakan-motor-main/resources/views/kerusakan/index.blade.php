@extends('admin.panel')
@section('title', 'Daftar kerusakan')

@section('content')
<div class="card card-default" style="padding-left: 20%;">
    <div class="container mt-4">
        <h2>Data Kerusakan</h2>
        <a href="{{ route('kerusakan.create') }}" class="btn btn-primary mb-4">Tambah Data</a>
        <div class="card">
            <div class="card-body">
                <div class="card-header">
                    <table class="table">
                        <thead>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Kerusakan</th>
                            <th>Penyebab</th>
                            <th>Perbaikan</th>
                            <th>Aksi</th>
                        </thead>
                        @foreach ($kerusakan as $data)
                        <tbody>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$data->kerusakan_code}}</td>
                            <td>{{$data->kerusakan_name}}</td>
                            <td>{{$data->kerusakan_penyebab}}</td>
                            <td>{{$data->kerusakan_perbaikan}}</td>
                            <td>
                                <form action="{{route('kerusakan.destroy', $data->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('kerusakan.edit', $data->id) }}" class="btn btn-success"><i class="fa fa-edit"></i></a>

                                    <button class="btn btn-danger" onclick="return confirm('Apakah data akan dihapus ?')"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tbody>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>

    @endsection
