@extends('layouts.main')
@section('container')

<div class="container">
    <h3 class="text-center">Informasi Kerusakan</h3>
    <div class="row mb-5">
        <div class="col-sm-12">
            <div class="card">
                <h5 class="card-header">
                   {{$kerusakan->kerusakan_name}}
                </h5>
                <div class="card-body">
                    <h3>Penyebab Kerusakan</h3>
                    <p> {{$kerusakan->kerusakan_penyebab}}</p>
                    <hr>
                      <h3>Perbaikan Kerusakan</h3>
                    <p> {{$kerusakan->kerusakan_perbaikan}}</p>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>


<div class="container mb-lg-5">
     <a href="/diagnosa" class="btn btn-secondary btn-sm mb-lg-5" style="width: 100px;">Kembali</a>
</div>
@endsection
