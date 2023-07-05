@extends('admin.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Jumlah Pengguna</div>
                <div class="card-body">
                    <h2>{{ $jumlah_pengguna }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Jumlah Pemilih</div>
                <div class="card-body">
                    <h2>{{ $jumlah_pemilih }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Jumlah Kandidat</div>
                <div class="card-body">
                    <h2>{{ $jumlah_kandidat }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Voting</div>
                <div class="card-body">
                    <div><b>{{ $jumlah_sudah }}</b> Sudah voting</div>
                    <div><b>{{ $jumlah_belum }}</b> Belum Voting</div>
                </div>
            </div>
        </div>

    </div>

    <br>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Grafik hasill voting</div>
                <div class="card-body p-0">
                    <canvas id="grafik1" style="position: relative; height: 300px;"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
