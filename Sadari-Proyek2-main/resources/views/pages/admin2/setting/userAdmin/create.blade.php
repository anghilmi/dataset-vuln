@extends('pages.admin2.layoutSuperAdmin.main')
@section('content')
    <form method="POST" action="/userAdmin/store">
        {{ csrf_field() }}
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">No WhatsApp</label>
            <input type="text" name="no_hp" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Faskes</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <a href="/userAdmin" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-outline-primary">Simpan</button>
    </form>
@endsection
