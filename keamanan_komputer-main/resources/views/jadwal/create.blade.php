@extends('layoutadmin.main')
@section('content')
    <h2>Form Tambah Jadwal</h2>
    <form method="POST" action="/jadwal/store">
        {{ csrf_field() }}
        <div class="mb-3">
            <label class="form-label">NAMA PEMBOOKING</label>
            <input type="text" name="nama_pembooking" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">NO HP</label>
            <input type="text" name="no_hp" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">BOOKING UNTUK TANGGAL</label>
            <input type="date" name="bookinguntuk" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">JAM</label>
            <input type="time" name="jam" class="form-control" required>
        </div>
        <a href="/jadwal" class="btn btn-secondary">KEMBALI</a>
        <button type="submit" class="btn btn-primary">SIMPAN</button>
    </form>
@endsection