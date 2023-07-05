@extends('layoutadmin.main')
@section('content')
    <table class="table table-bordered table-striped" id="example1">
        <thead>
            <tr>
              <th>id</th>
              <th>NAMA PAKET</th>
              <th>FOTO PAKET</th>
              <th>KETERANGAN</th>
              <th>
                <a href="/postpaket/create" class="btn btn-success">Post Paket Terbaru</a>
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($dataPostPaket as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama_paket }}</td>
                    <td>{{ $item->foto_paket }}</td>
                    <td>{{ $item->keterangan }}</td>
                    <td>
                        
                        <a href="/postpaket/destroy/{{ $item->id }}" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
          </tbody>
    </table>
@endsection