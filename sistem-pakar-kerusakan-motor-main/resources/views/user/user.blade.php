@extends('admin.panel')


@section('title', 'Daftar Pengguna')

@section('content')
<div class="card card-default" style="padding-left: 20%;">
<div class="container mt-4">
    <h2>Data User</h2>
    <a href="{{ route('user.create') }}"  class="btn btn-primary mb-4">Tambah Data</a>
    <div class="card">
        <div class="card-body">
            <div class="card-header">
            <table class="table">
                <thead>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </thead>
                @foreach ($user as $data)
                <tbody>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>
                        <form action="{{route('user.destroy', $data->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="{{ route('user.edit', $data->id) }}" class="btn btn-success btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm">Hapus</button>
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
