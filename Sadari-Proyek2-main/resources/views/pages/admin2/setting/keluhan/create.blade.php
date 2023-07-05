@extends('pages.admin2.layoutSuperAdmin.main')
@section('content')
    <form method="POST" action="/keluhan/store">
        {{ csrf_field() }}
        <div class="mb-3">
            <label class="form-label">Jenis Keluhan</label>
            <input type="text" name="keluhan" class="form-control" required>
        </div>
        <a href="/keluhan" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-outline-primary">Simpan</button>
    </form>
@endsection
