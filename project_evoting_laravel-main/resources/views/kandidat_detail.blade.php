@extends('master')

@section('content')
<div class="container-fluid">

    <center>
        <h4 class="font-weight-bold">Detail Tentang Kandidat</h4>
    </center>

    <a href="{{ route('depan.kandidat') }}" class="btn btn-sm btn-light mb-3"><i class="fa fa-arrow-left"></i> Kembali</a>

    <div class="row justify-content-center">

        <div class="col-md-5">

            <div class="card">

                <div class="card-body">

                    <center>
                        <h4><b>{{ $kandidat->kode }}</b></h4>
                    </center>
                    <br>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">

                            @if($kandidat->foto_ketua == "")
                            <img src="{{ asset('gambar/sistem/user.png') }}" style="width: 100%">
                            @else
                            <img src="{{ asset('gambar/kandidat/'.$kandidat->foto_ketua) }}" style="width: 100%">
                            @endif

                            <center>
                                {{ $kandidat->nama_ketua }}
                                <div><small class="text-muted">Calon Ketua</small></div>
                            </center>

                            <br>

                            <b>Quote</b>
                            <br>
                            {!! $kandidat->tentang_ketua !!}
                            <hr>
                        </div>
                        <div class="col-lg-6 col-sm-6">

                            @if($kandidat->foto_wakil == "")
                            <img src="{{ asset('gambar/sistem/user.png') }}" style="width: 100%">
                            @else
                            <img src="{{ asset('gambar/kandidat/'.$kandidat->foto_wakil) }}" style="width: 100%">
                            @endif

                            <center>
                                {{ $kandidat->nama_wakil }}
                                <div><small class="text-muted">Calon Wakil</small></div>
                            </center>

                            <br>

                            <b>Quote</b>
                            <br>
                            {!! $kandidat->tentang_wakil !!}
                            <hr>
                        </div>
                    </div>

                </div>
            </div>

        </div>


        <div class="col-md-7">

            <div class="card">
                <div class="card-body">

                    <b>Nomor Urut :</b> 
                    <span class="badge badge-primary">{{ $kandidat->kode }}</span>

                    <hr>

                    <b>Visi:</b>
                    <br>
                    {!! $kandidat->visi !!}

                    <hr>
                    <b>Misi:</b>
                    <br>
                    {!! $kandidat->misi !!}

                </div>
            </div>

        </div>

    </div>
</div>
@endsection