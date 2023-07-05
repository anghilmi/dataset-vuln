@extends('layoutadmin.main')
@section('content')
    <table class="table table-bordered table-striped" id="example1">
        <thead>
            <tr>
              <th>id</th>
              <th>NAMA PEMBOOKING</th>
              <th>NO HP</th>
              <th>BOOKING UNTUK TANGGAL</th>
              <th>JAM</th>
              <th>
                <a href="/jadwal/create" class="btn btn-success">Tambah Jadwal</a>
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($dataJadwal as $item)
                <tr>
                    <td>{{ $item->id}}</td>
                    <td>{{ $item->nama_pembooking }}</td>
                    <td>{{ $item->no_hp }}</td>
                    <td>{{ $item->bookinguntuk }}</td>
                    <td>{{ $item->jam }}</td>
                    <td>
                        <a href="/jadwal/edit/{{ $item->id}}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="/jadwal/destroy/{{ $item->id }}" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
          </tbody>
    </table>
@endsection