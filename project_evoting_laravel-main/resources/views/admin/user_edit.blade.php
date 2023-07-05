@extends('admin.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div>
                <h5>Data Pengguna</h5>
                <small class="text-muted">Edit data pengguna</small>
            </div>
            <hr>

            <a href="{{ route('user') }}" class="btn btn-light btn-sm mb-2 bg-white"><i class="fa fa-arrow-left"></i> &nbsp Kembali</a>

            <div class="card">
                <div class="card-header">
                    <b>Edit Pengguna</b>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.update', ['id' => $user->id]) }}" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <div class="form-group has-feedback">
                                <label class="text-dark">Nama</label>
                                <input id="nama" type="text" placeholder="Masukkan Nama" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $user->name) }}" autocomplete="off">
                                @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-group has-feedback">
                                <label class="text-dark">Email</label>
                                <input id="email" type="email" placeholder="Masukkan Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}" autocomplete="off">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-group has-feedback">
                                <label class="text-dark">Level</label>
                                <select class="form-control @error('level') is-invalid @enderror" name="level">
                                    <option <?php if(old("level", $user->level) == "admin"){echo "selected='selected'";} ?> value="admin">Admin</option>
                                    <option <?php if(old("level", $user->level) == "panitia"){echo "selected='selected'";} ?> value="panitia">Panitia</option>
                                </select>

                                @error('level')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="form-group has-feedback">
                                <label class="text-dark">Password</label>
                                <input id="password" type="password" placeholder="Masukkan Password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
                                <small class="text-muted"><i>Kosongkan jika tidak ingin mengubah password</i></small>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-group has-feedback">
                                <label class="text-dark">Foto Profil</label>
                                <br>
                                <input id="foto" type="file" placeholder="foto" class="@error('foto') is-invalid @enderror" name="foto" value="{{ old('foto') }}" autocomplete="off">
                                <br>
                                <small class="text-muted"><i>Boleh dikosongkan</i></small>
                                @error('foto')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
