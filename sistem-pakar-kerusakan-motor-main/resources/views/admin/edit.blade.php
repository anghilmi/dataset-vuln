@extends('admin/panel')
@section('content')
<div class="row"style="padding-left: 20%";>
    <div class="col-md-6">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <h2>Edit Data Gejala</h2>
        <form action="{{ route('customer.update', $customer) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>Customer Name <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="kode_name" value="{{ old('kode_name', $customer->kode_name) }}" />
            </div>
            <div class="mb-3">
                <label>Contact Name <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="name_gejala" value="{{ old('name_gejala', $customer->name_gejala) }}" />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Save</button>
                <a class="btn btn-danger" href="{{ route('customer.index') }}">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection