@extends('layoutadmin.main')
@section('content')
    <table class="table table-bordered table-striped" id="example1">
        <thead>
            <tr>
              <th>id</th>
              <th>FOTO PRODUK</th>
              <th>
                <a href="/postproduk/create" class="btn btn-success">Post Produk GAZEWHY</a>
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($dataPostProduk as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->foto_produk }}</td>
                    <td>
                        <a href="/postproduk/destroy/{{ $item->id }}" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
          </tbody>
    </table>
@endsection