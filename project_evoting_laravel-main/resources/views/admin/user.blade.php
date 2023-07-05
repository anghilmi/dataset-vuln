@extends('admin.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div>
                <h5>Data Pengguna</h5>
                <small class="text-muted">Data pengguna aplikasi ( Admin & Panitia )</small>
            </div>
            <hr>

            @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif
            
            <a href="{{ route('user.tambah') }}" class="btn btn-primary mb-2 btn-sm"><i class="fa fa-plus"></i> &nbsp Tambah Pengguna</a>

            <div class="card">
                <div class="card-header">
                    <b>Data Pengguna ( Admin & Panitia )</b>
                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered" id="table-datatable">
                            <thead>
                                <tr>
                                    <th width="1%">NO</th>
                                    <th>NAMA</th>
                                    <th class="text-center">EMAIL</th>
                                    <th class="text-center">LEVEL</th>
                                    <th class="text-center" width="14%">OPSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                                @endphp
                                @foreach($user as $u)
                                <tr>
                                    <td class="text-center">{{ $no++ }}</td>
                                    <td>
                                        @if($u->foto == "")
                                        <img src="{{ asset('gambar/sistem/user.png') }}" style="width: 30px" class="mr-2">
                                        @else
                                        <img src="{{ asset('gambar/user/'.$u->foto) }}" style="width: 30px" class="mr-2">
                                        @endif


                                        {{ $u->name }}
                                        @if(Auth::id() == $u->id)
                                        <span class="badge badge-primary">Saya</span>
                                        @endif
                                    </td>
                                    <td class="text-center">{{ $u->email }}</td>
                                    <td class="text-center">{{ $u->level }}</td>
                                    <td>    

                                        <div class="text-center">
                                            <a href="{{ route('user.edit', ['id' => $u->id]) }}" class="btn btn-light btn-sm btn-sm">
                                                <i class="fa fa-cog"></i>
                                            </a>

                                            @if($u->id != 1)
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_user_{{ $u->id }}">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            @endif
                                        </div>

                                        <!-- modal hapus -->
                                        <form method="POST" action="{{ route('user.delete',['id' => $u->id]) }}">
                                            <div class="modal fade" id="hapus_user_{{$u->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h6 class="modal-title" id="exampleModalLabel">Peringatan!</h6>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <p>Yakin ingin menghapus data ini ?</p>

                                                            @csrf
                                                            {{ method_field('DELETE') }}


                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light btn-sm" data-dismiss="modal"><i class="ti-close m-r-5 f-s-12"></i> Batal</button>
                                                            <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Ya, Hapus</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>


                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
