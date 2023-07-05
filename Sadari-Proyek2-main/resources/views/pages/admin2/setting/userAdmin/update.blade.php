@extends('pages.admin2.layoutSuperAdmin.main')
@section('content')
    <form method="POST" action="/userAdmin/update/{{ $dataUserAdmin->id }}">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $dataUserAdmin->id }}">
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="name" class="form-control" value="{{ $dataUserAdmin->name }}" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">No WhatsApp</label>
            <input type="text" name="no_hp" class="form-control" value="{{ $dataUserAdmin->no_hp }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control" value="{{ $dataUserAdmin->email }}" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">Faskes</label>
            <input type="text" name="nama" class="form-control" value="{{ $dataUserAdmin->nama }}" disabled>
        </div>
        <a href="/userAdmin" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-outline-primary">Update</button>
    </form>
@endsection
