@extends('pages.admin2.layoutSuperAdmin.main')
@section('content')
    <form method="POST" action="/quisioners/store">
        {{ csrf_field() }}
        <div class="mb-3">
            <label class="form-label">Pertanyaan</label>
            <input type="text" name="pertanyaan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Opsi 1</label>
            <input type="text" name="opsi1" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Opsi 2</label>
            <input type="text" name="opsi2" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Opsi 3</label>
            <input type="text" name="opsi3" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Opsi 4</label>
            <input type="text" name="opsi4" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Tags</label>
            <input type="text" name="tags" class="form-control" required>
        </div>
        <a href="/quisioners" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-outline-primary">Simpan</button>
    </form>
@endsection
