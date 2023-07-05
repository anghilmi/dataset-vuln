
@extends('admin/panel')
@section('content')
<div class="row"style="padding-left: 20%";>
    <div class="col-md-6">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <h2>Tambah Data Gejala</h2>
        <form action="{{ route('customer.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Kode <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="kode_name"/>
            </div>
            <div class="mb-3">
                <label>Gejala <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="name_gejala"/>
            </div>

            <input type="submit" class="btn btn-primary" name="submit" value="Tambah">
            {{-- <button type="submit" id="addRowButton" class="btn btn-primary" name="submit">Add</button> --}}
            <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>

    </form>
    </div>
</div>
@endsection
