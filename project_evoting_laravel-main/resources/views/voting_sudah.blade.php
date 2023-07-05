@extends('master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div class="alert alert-info text-center">
                <b>Terima kasih!</b>
                <br>
                Anda sudah melakukan voting.
                <br>
                Lihat hasil hitung cepat <a href="{{ route('depan.quickcount') }}">Di Sini</a>
            </div>

        </div>
    </div>
</div>

@endsection
