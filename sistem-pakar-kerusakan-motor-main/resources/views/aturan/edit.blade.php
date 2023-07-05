@extends('layouts.app')
@section('title', 'Edit Data')
@section('content')
<div class="container">
    <h1 class="text-center mb-4">Aturan Kerusakan</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('aturan.update', $kerusakan->id) }}" method="POST">
                @csrf
                @method('patch')
                <div class="mb-3">
                    <label for="kerusakan_code" class="form-label">Kode kerusakan</label>
                    <input id="kerusakan_code" type="text" class="form-control @error('name') is-invalid @enderror" value="{{$kerusakan->kerusakan_code}}" name="kerusakan_code" readonly autocomplete="kerusakan_code" autofocus>

                    @error('kerusakan_code')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="kerusakan_name" class="form-label">Nama Kerusakan</label>
                    <input id="kerusakan_name" type="text" class="form-control @error('kerusakan_name') is-invalid @enderror" name="kerusakan_name" value="{{$kerusakan->kerusakan_name}}" readonly autocomplete="kerusakan_name">

                    @error('kerusakan_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="kerusakan_name" class="form-label">Pilih Kerusakan</label>

                    <div class="row">
                         @foreach ($gejala as $data)
                        <div class="col-sm-6">
                            <div class="custom-control custom-checkbox m-1">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox2" {{$data->gejala_pilih}} name="gejala_pilih[{{$data->id}}]" >
                                <label for="customCheckbox2" class="custom-control-label">   [{{$data->gejala_code}}] {{$data->gejala_name}}</label>
                            </div>
                        </div>
                        @endforeach
                    </div>


                </div>

                <button type="submit" class="btn btn-primary float">Simpan</button>
                <a href="/aturan" class="btn btn-danger">Kembali</a>
            </form>

        </div>
    </div>
</div>
@endsection
