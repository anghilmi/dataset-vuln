@extends('students.layout')

@section('content')
<div class="row"style="padding-left: 20%";>
    <div class="col-md-6">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <h2>Tambah Data Kerusakan</h2>
        <form action="{{ route('students.store') }}" method="POST">
    @csrf
        <div class="mb-3">
                <strong>Kode:</strong>
                <input type="text" name="kode" class="form-control">
            </div>
        <div class="mb-3">
                <strong>Nama:</strong>
                <input class="form-control" name="name"></input>
            </div>
        {{-- <div class="mb-3">
                <strong>Kerusakan:</strong>
                <input class="form-control" name="kerusakan"></input>
            </div> --}}
        <div class="mb-3">
                <strong>Solusi Perbaikan:</strong>
                <input class="form-control" name="perbaikan"></input>
            </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-success">Tambah</button>
            <a class="btn btn-primary" href="{{ route('students.index') }}"> Kembali</a>
        </div>
    </div>
</form>
    </div>
</div>
@endsection
