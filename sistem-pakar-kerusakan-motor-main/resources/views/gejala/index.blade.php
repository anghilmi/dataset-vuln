@extends('admin.panel')
@section('title', 'Daftar Gejala')

@section('content')
<div class="card card-default" style="padding-left: 20%;">
    <div class="container mt-4">
        <h2>Data Gejala</h2>
        <a href="{{ route('gejala.create') }}" class="btn btn-primary mb-4">Tambah Data</a>
        <div class="card">
            <div class="card-body">
                <div class="card-header">
                    <table class="table">
                        <thead>
                            <th>No</th>
                            <th>Kode Gejala</th>
                            <th>Nama Gejala</th>
                            <th>Aksi</th>
                        </thead>
                        @foreach ($gejala as $data)
                        <tbody>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$data->gejala_code}}</td>
                            <td>{{$data->gejala_name}}</td>
                            <td>
                                <form action="{{route('gejala.destroy', $data->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('gejala.edit', $data->id) }}" class="btn btn-success"><i class="fa fa-edit"></i></a>

                                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
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
