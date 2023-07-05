@extends('master')

@section('content')
<div class="container">

    <center>
        <h4 class="font-weight-bold">Kandidat</h4>
    </center>

    <br>

    <div class="row justify-content-center">

        @foreach($kandidat as $k)

        <div class="col-md-4">

            <div class="card">
                <div class="card-header text-center font-weight-bold">{{ $k->kode }}</div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-6">

                            @if($k->foto_ketua == "")
                            <img src="{{ asset('gambar/sistem/user.png') }}" style="width: 100%">
                            @else
                            <img src="{{ asset('gambar/kandidat/'.$k->foto_ketua) }}" style="width: 100%">
                            @endif

                            <center>
                                {{ $k->nama_ketua }}
                                <div><small class="text-muted">Calon Ketua</small></div>
                            </center>

                        </div>
                        <div class="col-lg-6">

                            @if($k->foto_wakil == "")
                            <img src="{{ asset('gambar/sistem/user.png') }}" style="width: 100%">
                            @else
                            <img src="{{ asset('gambar/kandidat/'.$k->foto_wakil) }}" style="width: 100%">
                            @endif

                            <center>
                                {{ $k->nama_wakil }}
                                <div><small class="text-muted">Calon Wakil</small></div>
                            </center>

                        </div>
                    </div>

                    <center>
                        <a href="{{ route('depan.kandidat.detail', ['id' => $k->id]) }}" class="btn btn-primary mt-4 mb-2">Visi & Misi <i class="ml-2 fa fa-arrow-right"></i></a>
                    </center>

                </div>
            </div>

        </div>

        @endforeach

    </div>
</div>
@endsection