@extends('admin.panel')
{{-- @extends('layouts.app') --}}
@section('content')

<div class="card card-default" style="padding-left: 20%;">
<div class="container mt-4">
<h2>Data Gejala</h2>
    <a href="{{ route('customer.create') }}"  class="btn btn-primary mb-4">Tambah Data</a>
    <div class="card">
        <div class="card-body">
    <div class="card-header">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama Gejala</th>
                    <th></th>
                    <th></th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php $no = 1 ?>
            @foreach($customers as $customer)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $customer->kode_name }}</td>
                <td>{{ $customer->name_gejala }}</td>
                <td></td>
                <td></td>
                <td>
                    <a class="btn btn-sm btn-warning" href="{{ route('customer.edit', $customer->id) }}">Edit</a>
                    <form method="POST" action="{{ route('customer.destroy', $customer->id) }}" style="display: inline-block;">
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