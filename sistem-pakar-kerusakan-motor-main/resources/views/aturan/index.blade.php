@extends('admin.panel')
@section('title', 'Daftar aturan')

@section('content')
<div class="card card-default" style="padding-left: 20%;">
    <div class="container mt-4">
        <h2>Data Aturan</h2>
        <div class="card">
            <div class="card-body">
                <div class="card-header">
                    <table class="table">
                        <thead>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Kerusakan</th>
                            <th>Gejala</th>
                            <th>Aksi</th>
                        </thead>
                        @foreach ($aturan as $data)
                        <tbody>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$data->kerusakan_code}}</td>
                            <td>{{$data->kerusakan_name}}</td>
                            <td>{!!$data->gejala_name_group!!}</td>
                            <td>
                                <form action="{{route('aturan.destroy', $data->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('aturan.edit', $data->id) }}" class="btn btn-success"><i class="fa fa-edit"></i></a>

                                    <button class="btn btn-danger" onclick="return confirm('Apakah aturan akan dihapus?')"><i class="fa fa-trash"></i></button>
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
