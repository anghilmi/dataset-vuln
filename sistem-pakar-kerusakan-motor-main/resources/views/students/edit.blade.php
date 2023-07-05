@extends('students.layout')
   
@section('content')
<div class="row"style="padding-left: 20%";>
    <div class="col-md-6">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <h2>Edit Data Kerusakan</h2>
    <form action="{{ route('students.update',$student->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kode:</strong>
                    <input type="number" name="kode" value="{{ $student->kode }}" class="form-control" placeholder="Kode">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input class="form-control" name="name" placeholder="Nama" value="{{ $student->name }}">
                </div>
            </div>
            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kerusakan:</strong>
                    <input class="form-control" name="kerusakan" placeholder="Kerusakan" value="{{ $student->kerusakan }}">
                </div>
            </div> --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Solusi Perbaikan:</strong>
                    <input class="form-control" name="perbaikan" placeholder="Solusi Perbaikan" value="{{ $student->perbaikan }}">
                </div>
            </div>
            <div class="mb-3">
              <button type="submit" class="btn btn-success">Submit</button>
              <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
            </div>
        </div>
   
    </form>
@endsection