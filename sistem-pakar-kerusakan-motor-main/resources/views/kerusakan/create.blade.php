@extends('layouts.app')
@section('title', 'Tambah kerusakan')
@section('content')

<div class="container">
    <h1 class="text-center mb-4">Tambah Data kerusakan</h1>
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('kerusakan.store')}}">
                @csrf
                <div class="mb-3">
                    <label for="kerusakan_code" class="form-label">Kode kerusakan</label>
                    <input id="kerusakan_code" type="text" class="form-control @error('kerusakan_code') is-invalid @enderror" name="kerusakan_code" value="{{ old('kerusakan_code') }}" required autocomplete="kerusakan_code" autofocus>

                    @error('kerusakan_code')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="kerusakan_name" class="form-label">Nama kerusakan</label>
                    <input id="kerusakan_name" type="text" class="form-control @error('kerusakan_name') is-invalid @enderror" name="kerusakan_name" value="{{ old('kerusakan_name') }}" required autocomplete="kerusakan_name">

                    @error('kerusakan_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="kerusakan_penyebab" class="form-label">Penyebab Kerusakan</label>
                    <textarea class="form-control @error('kerusakan_penyebab') is-invalid @enderror" name="kerusakan_penyebab" autocomplete="kerusakan_penyebab" rows="4" required>{{ old('kerusakan_penyebab') }}</textarea>

                    @error('kerusakan_penyebab')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="kerusakan_perbaikan" class="form-label">Perbaikan Kerusakan</label>
                    <textarea class="form-control @error('kerusakan_perbaikan') is-invalid @enderror" name="kerusakan_perbaikan" autocomplete="kerusakan_perbaikan" rows="4" required>{{ old('kerusakan_perbaikan') }}</textarea>

                    @error('kerusakan_perbaikan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary float">Simpan</button>
                <a href="/kerusakan" class="btn btn-danger" style="width: 100px;">Kembali</a>
            </form>

        </div>
    </div>
</div>

@endsection
