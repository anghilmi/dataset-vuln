@extends('layouts.app')
@section('title', 'Tambah kerusakan')
@section('content')

<div class="container">
    <h1 class="text-center mb-4">Edit Data Kerusakan</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('kerusakan.update', $kerusakan->id) }}" method="POST">
                @csrf
                @method('patch')
                <div class="mb-3">
                    <label for="kerusakan_code" class="form-label">Kode Kerusakan</label>
                    <input id="kerusakan_code" type="text" class="form-control @error('kerusakan_code') is-invalid @enderror" name="kerusakan_code" value="{{$kerusakan->kerusakan_code}}" required autocomplete="kerusakan_code" autofocus>

                    @error('kerusakan_code')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="kerusakan_name" class="form-label">Nama Kerusakan</label>
                    <input id="kerusakan_name" type="text" class="form-control @error('kerusakan_name') is-invalid @enderror" name="kerusakan_name" value="{{$kerusakan->kerusakan_name}}" required autocomplete="kerusakan_name">

                    @error('kerusakan_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="kerusakan_penyebab" class="form-label">Penyebab Kerusakan</label>
                    <textarea class="form-control @error('kerusakan_penyebab') is-invalid @enderror" name="kerusakan_penyebab" autocomplete="kerusakan_penyebab" rows="4" required>{{$kerusakan->kerusakan_penyebab}}</textarea>

                    @error('kerusakan_penyebab')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="kerusakan_perbaikan" class="form-label">Perbaikan Kerusakan</label>
                    <textarea class="form-control @error('kerusakan_perbaikan') is-invalid @enderror" name="kerusakan_perbaikan" autocomplete="kerusakan_perbaikan" rows="4" required>{{$kerusakan->kerusakan_perbaikan}}</textarea>

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
