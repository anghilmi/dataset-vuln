@extends('layoutadmin.main')
@section('content')
    <h2>Update Jadwal</h2>
    <form method="POST" action="/jadwal/update/{{ $dataJadwal->id }}">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $dataJadwal->id }}">
        <div class="mb-3">
            <label class="form-label">NAMA PEMBOOKING</label>
            <input type="text" name="nama_pembooking" class="form-control" value="{{ $dataJadwal->nama_pembooking }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">NO HP</label>
            <input type="text" name="no_hp" class="form-control" value="{{ $dataJadwal->no_hp}}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">BOOKING UNTUK TANGGAL</label>
            <input type="text" name="bookinguntuk" class="form-control" value="{{ $dataJadwal->bookinguntuk}}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">JAM</label>
            <input type="time" name="jam" class="form-control" value="{{ $dataJadwal->jam }}" required>
        </div>
        <a href="/jadwal" class="btn btn-secondary">KEMBALI</a>
        <button type="submit" class="btn btn-primary">UPDATE</button>
    </form>
@endsection