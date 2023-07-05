@extends('layouts.app')
@section('title', 'Tambah Gejala')
@section('content')

<div class="container">
    <h1 class="text-center mb-4">Tambah Data Gejala</h1>
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('gejala.store')}}">
                @csrf
                <div class="mb-3">
                    <label for="gejala_code" class="form-label">Kode Gejala</label>
                    <input id="gejala_code" type="text" class="form-control @error('gejala_code') is-invalid @enderror" name="gejala_code" value="{{ old('gejala_code') }}" required autocomplete="gejala_code" autofocus>

                    @error('gejala_code')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="gejala_name" class="form-label">Nama Gejala</label>
                    <input id="gejala_name" type="text" class="form-control @error('gejala_name') is-invalid @enderror" name="gejala_name" value="{{ old('gejala_name') }}" required autocomplete="gejala_name">

                    @error('gejala_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <button type="submit" class="btn btn-primary float">Simpan</button>
                <a href="/gejala" class="btn btn-danger" style="width: 100px;">Kembali</a>
            </form>

        </div>
    </div>
</div>

@endsection
