@extends('admin.master')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div>
                <h5>Data Kandidat</h5>
                <small class="text-muted">Tambah kandidat baru</small>
            </div>
            <hr>

            <a href="{{ route('kandidat') }}" class="btn btn-light btn-sm mb-2 bg-white"><i class="fa fa-arrow-left"></i> &nbsp Kembali</a>

            <div class="card">
                <div class="card-header">
                    <b>Tambah Kandidat</b>
                </div>

                <div class="card-body">

                    <form method="POST" action="{{ route('kandidat.aksi') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-lg-6">

                                <div class="alert alert-info">Data Kandidat</div>

                                <div class="form-group">
                                    <div class="form-group has-feedback">
                                        <label class="text-dark">Nomor Urut</label>
                                        <input id="kode" type="text" placeholder="Misal : 01, 02, 03" class="form-control @error('kode') is-invalid @enderror" name="kode" value="{{ old('kode') }}" autocomplete="off">
                                        @error('kode')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="form-group has-feedback">
                                        <label class="text-dark">Visi</label>
                                        <textarea name="visi" id="textarea3" class="form-control" placeholder="Visi">{{ old('visi','') }}</textarea>

                                        @error('visi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-group has-feedback">
                                        <label class="text-dark">Misi</label>
                                        <textarea name="misi" id="textarea4" class="form-control" placeholder="Misi">{{ old('misi') }}</textarea>

                                        @error('misi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6">

                                <div class="alert alert-info">Data Calon Kahim</div>

                                <div class="form-group">
                                    <div class="form-group has-feedback">
                                        <label class="text-dark">Nama Calon Kahim</label>
                                        <input id="nama_ketua" type="text" placeholder="Masukkan nama calon Kahim" class="form-control @error('nama_ketua') is-invalid @enderror" name="nama_ketua" value="{{ old('nama_ketua') }}" autocomplete="off">

                                        @error('nama_ketua')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-group has-feedback">
                                        <label class="text-dark">Quote Calon Kahim</label>
                                        <textarea name="tentang_ketua" id="textarea1" class="form-control" placeholder="Tentang">{{ old('tentang_ketua') }}</textarea>

                                        @error('tentang_ketua')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-group has-feedback">
                                        <label class="text-dark">Foto Calon Kahim</label>
                                        <br>
                                        <input id="foto_ketua" type="file" placeholder="foto_ketua" class="@error('foto_ketua') is-invalid @enderror" name="foto_ketua" value="{{ old('foto_ketua') }}" autocomplete="off">
                                        <br>
                                        <small class="text-muted"><i>Boleh dikosongkan</i></small>
                                        @error('foto_ketua')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <hr>
                                <div class="alert alert-info">Data Calon Wakahim</div>

                                <div class="form-group">
                                    <div class="form-group has-feedback">
                                        <label class="text-dark">Nama Calon Wakahim</label>
                                        <input id="nama_wakil" type="text" placeholder="Masukkan nama calon Wakahim" class="form-control @error('nama_wakil') is-invalid @enderror" name="nama_wakil" value="{{ old('nama_wakil') }}" autocomplete="off">

                                        @error('nama_wakil')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-group has-feedback">
                                        <label class="text-dark">Quote Calon Wakahim</label>
                                        <textarea name="tentang_wakil" id="textarea2" class="form-control" placeholder="Tentang">{{ old('tentang_wakil') }}</textarea>

                                        @error('tentang_wakil')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-group has-feedback">
                                        <label class="text-dark">Foto Calon Wakahim</label>
                                        <br>
                                        <input id="foto_wakil" type="file" placeholder="foto_wakil" class="@error('foto_wakil') is-invalid @enderror" name="foto_wakil" value="{{ old('foto_wakil') }}" autocomplete="off">
                                        <br>
                                        <small class="text-muted"><i>Boleh dikosongkan</i></small>
                                        @error('foto_wakil')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
