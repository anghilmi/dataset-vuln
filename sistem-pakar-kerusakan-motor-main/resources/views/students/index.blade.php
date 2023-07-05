@extends('students.layout')

@section('contents')

<div style="padding-left: 20%;">
    <div class="container mt-4">
    <h2>Data Kerusakan</h2>
        <a href="{{ route('students.create') }}"  class="btn btn-primary mb-4">Tambah Data</a>
        <div class="card">
            <div class="card-body">
        <div class="card-header">
            <table class="table">
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama Kerusakan</th>
                    {{-- <th>Kerusakan</th> --}}
                    <th>Solusi</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($students as $student)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $student->kode }}</td>
                    <td>{{ $student->name }}</td>
                    {{-- <td>{{ $student->kerusakan }}</td> --}}
                    <td>{{ $student->perbaikan }}</td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="{{ route('students.edit',$student->id) }}">Edit</a>
                        <form method="POST" action="{{ route('students.destroy',$student->id) }}" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Delete?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    @endsection