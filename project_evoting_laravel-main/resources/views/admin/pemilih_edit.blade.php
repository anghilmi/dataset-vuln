@extends('admin.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div>
                <h5>Data Pemilih</h5>
                <small class="text-muted">Edit data pemilih</small>
            </div>
            <hr>

            <a href="{{ route('pemilih') }}" class="btn btn-light btn-sm mb-2 bg-white"><i class="fa fa-arrow-left"></i> &nbsp Kembali</a>

            <div class="card">
                <div class="card-header">
                    <b>Edit Pemilih</b>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('pemilih.update', ['id' => $pemilih->id]) }}">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <div class="form-group has-feedback">
                                <label class="text-dark">Nama</label>
                                <input id="nama" type="text" placeholder="Masukkan Nama" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $pemilih->nama) }}" autocomplete="off">
                                @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-group has-feedback">
                                <label class="text-dark">NIM</label>
                                <input id="nis" type="number" placeholder="Masukkan NIM" class="form-control @error('nis') is-invalid @enderror" name="nis" value="{{ old('nis', $pemilih->nis) }}" autocomplete="off">

                                @error('nis')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- <div class="form-group">
                            <div class="form-group has-feedback">
                                <label class="text-dark">Kelas</label>
                                <textarea id="alamat" placeholder="Masukkan Kelas" class="form-control @error('alamat') is-invalid @enderror" name="alamat" autocomplete="off">{{ old('alamat', $pemilih->alamat) }}</textarea>

                                @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div> -->

                        <div class="form-group">
                            <div class="form-group has-feedback">
                                <label class="text-dark">Kelas</label>
                                <select class="form-control @error('alamat') is-invalid @enderror" name="alamat">
                                    <option value="">- Pilih</option>
                                    <option <?php if(old("alamat", $pemilih->alamat) == "D3TI.1C"){echo "selected='selected'";} ?> value="D3TI.1C">D3TI.1C</option>
                                    <option <?php if(old("alamat", $pemilih->alamat) == "D3TI.2A"){echo "selected='selected'";} ?> value="D3TI.2A">D3TI.2A</option>
                                    <option <?php if(old("alamat", $pemilih->alamat) == "D4RPL.1B"){echo "selected='selected'";} ?> value="D4RPL.1B">D4RPL.1B</option>
                                    <option <?php if(old("alamat", $pemilih->alamat) == "D4RPL.2D"){echo "selected='selected'";} ?> value="D4RPL.2D">D4RPL.2D</option>
                                </select>

                                @error('jk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-group has-feedback">
                                <label class="text-dark">Jenis Kelamin</label>
                                <select class="form-control @error('jk') is-invalid @enderror" name="jk">
                                    <option value="">- Pilih</option>
                                    <option <?php if(old("jk", $pemilih->jk) == "Laki-laki"){echo "selected='selected'";} ?> value="Laki-laki">Laki-laki</option>
                                    <option <?php if(old("jk", $pemilih->jk) == "Perempuan"){echo "selected='selected'";} ?> value="Perempuan">Perempuan</option>
                                </select>

                                @error('jk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-group has-feedback">
                                <label class="text-dark">Umur</label>
                                <input id="umur" type="number" placeholder="Masukkan Umur" class="form-control @error('umur') is-invalid @enderror" name="umur" value="{{ old('umur', $pemilih->umur) }}" autocomplete="off">

                                @error('umur')
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
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
