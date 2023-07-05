@extends('layouts.main')

@section('container')

<div class="container">
    <h3 class="text-center">Diagnosa Kerusakan Sepeda Motor</h3>
        <div class="card mb-lg-5">
            <h5 class="card-header">
                Silakan pilih gejala yang ada pada motor anda
            </h5>
            <div class="card-body">
                <form method="POST" action="{{ route('hasil')}}">
                @csrf
                <div class="row">
                @foreach ($gejala as $data)
                <div class="col-sm-6">
                <div class="form-check">
                    <input class="form-check" type="checkbox"  name="gejala_pilih[{{$data->id}}]" id="flexCheckChecked" style="float: left;">
                    <p>&nbsp;&nbsp;[{{$data->gejala_code}}] {{$data->gejala_name}}</p>
                </div>
                </div>
                @endforeach
                </div>
                <button type="submit" class="btn btn-primary float">Diagnosa</button>
                </form>
            </div>
        </div>
</div>
@endsection
