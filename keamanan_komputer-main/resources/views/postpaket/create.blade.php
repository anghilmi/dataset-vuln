@extends('layoutadmin.main')
@section('content')
    <h2>Form Tambah Paket</h2>
    <form method="POST" action="/postpaket/store" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="nama_paket" class="form-label">NAMA PAKET</label>
            <input type="text" name="nama_paket" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">FOTO PAKET</label>
            <input type="file" name="image" class="form-control-file" required>
        </div>
        <div class="mb-3">
            <label class="form-label">KETERANGAN</label>
            <input type="text" name="keterangan" class="form-control" required>
        </div>
        <a href="/postpaket" class="btn btn-secondary">KEMBALI</a>
        <button type="submit" class="btn btn-primary">SIMPAN</button>
    </form>
@endsection