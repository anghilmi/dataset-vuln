@extends('master')

@section('content')
<div class="container">

    @if(session('alert'))
        <div class="alert alert-success text-center" role="alert">
            {{ session('alert') }}
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-4">



            <div class="card">
                <center><div class="card-header">Login Mahasiswa</div></center>

                <div class="card-body">
                <form method="POST" action="{{ route('depan.login.siswa.aksi') }}">
                    @csrf

                    <div class="form-group">
                        <div class="form-group has-feedback">
                            <label class="text-dark">NIM</label>
                            <input id="nis" type="text" placeholder="Masukkan NIM" class="form-control @error('nis') is-invalid @enderror" name="nis" value="{{ old('nis') }}" autocomplete="off">
                            @error('nis')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group has-feedback">
                            <label class="text-dark">Password</label>
                            <input id="password" type="password" placeholder="Masukkan Password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" autocomplete="off">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
