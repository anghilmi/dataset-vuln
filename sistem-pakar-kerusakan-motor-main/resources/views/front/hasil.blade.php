@extends('layouts.main')
@section('container')

<div class="container">
    <h3 class="text-center">Hasil Diagnosa Kerusakan Sepeda Motor</h3>
    <div class="row mb-5">
        <div class="col-sm-6">
            <div class="card">
                <h5 class="card-header">
                Gejala yang dialami
                </h5>
                <div class="card-body">
                        <ul class="list-group p-0">
                    @foreach ($gejala as $data)
                        <li class="list-group-item">[{{$data->gejala_code}}] {{$data->gejala_name}}</li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="card">
                <h5 class="card-header">
                    Hasil Kerusakan
                </h5>
                <div class="card-body">

                    @if(count($hasil) < 1)
                        <div class="alert alert-warning">
                            <strong>Maaf!</strong> Tidak ditemukan kerusakan.
                        </div>
                    @else
                        <ul class="list-group p-0">
                        @foreach ($hasil as $data)
                            <li class="list-group-item">
                            <a href="{{ route('detail', $data->id) }}" class="link-secondary" target="_blank" style="text-decoration: none">
                                [{{$data->kerusakan_code}}] {{$data->kerusakan_name}} <b>{{ number_format($data->presentase, 2) }} %</b>
                            </a>
                            </li>
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container mb-lg-5">
     <a href="/diagnosa" class="btn btn-secondary btn-sm mb-lg-5" style="width: 100px;">Kembali</a>
</div>
@endsection
