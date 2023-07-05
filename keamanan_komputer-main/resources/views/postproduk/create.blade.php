@extends('layoutadmin.main')
@section('content')
    <h2>Form Post Produk GAZEWHY</h2>
    <form method="POST" action="/postproduk/store" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="image" class="form-label">FOTO PRODUK</label>
            <input type="file" name="image" class="form-control-file" required>
        </div>
        <a href="/postproduk" class="btn btn-secondary">KEMBALI</a>
        <button type="submit" class="btn btn-primary">SIMPAN</button>
    </form>
@endsection