@extends('pages.admin2.layoutSuperAdmin.main')
@section('content')
    <form method="POST" action="/keluhan/update/{{ $dataKeluhan->id }}">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $dataKeluhan->id }}">
        <div class="mb-3">
            <label class="form-label">No</label>
            <input type="text" name="id" class="form-control" value="{{ $dataKeluhan->id }}" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">Jenis Keluhan</label>
            <input type="text" name="keluhan" class="form-control" value="{{ $dataKeluhan->keluhan }}" required>
        </div>
        <a href="/keluhan" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-outline-primary">Update</button>
    </form>
@endsection
