@extends('admin.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div>
                <h5>Data Kandidat</h5>
                <small class="text-muted">Data Kandidat Pasangan Calon Kahim & Wakahim</small>
            </div>
            <hr>

            @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif

            <a href="{{ route('kandidat.tambah') }}" class="btn btn-primary mb-2 btn-sm"><i class="fa fa-plus"></i> &nbsp Tambah Kandidat</a>

            <div class="card">
                <div class="card-header"><b>Kandidat</b></div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th width="1%">Kode</th>
                                <th width="1%">Foto</th>
                                <th width="15%">Nama</th>
                                <th>Quote</th>
                                <th>Visi</th>
                                <th>Misi</th>
                                <th width="1%">Opsi</th>
                            </tr>
                            @foreach($kandidat as $k)
                            <tr>
                                <td rowspan="2" class="text-center">{{ $k->kode }}</td>
                                <td>
                                    @if($k->foto_ketua == "")
                                    <img src="{{ asset('gambar/sistem/user.png') }}" style="width: 30px" class="mr-2">
                                    @else
                                    <img src="{{ asset('gambar/kandidat/'.$k->foto_ketua) }}" style="width: 30px" class="mr-2">
                                    @endif
                                </td>
                                <td>
                                    {{ $k->nama_ketua }}
                                    <br>
                                    <small class="badge badge-primary">Calon Kahim</small>
                                </td>
                                <td>{!! $k->tentang_ketua !!}</td>
                                <td rowspan="2">{!! $k->visi !!}</td>
                                <td rowspan="2">{!! $k->misi !!}</td>
                                @if(Auth::user()->level == "admin")
                                <td rowspan="2">    

                                    <div class="btn-group">
                                        <a href="{{ route('kandidat.edit', ['id' => $k->id]) }}" class="btn btn-light btn-sm btn-sm">
                                            <i class="fa fa-cog"></i>
                                        </a>

                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_kandidat_{{ $k->id }}">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </div>

                                    <!-- modal hapus -->
                                    <form method="POST" action="{{ route('kandidat.delete',['id' => $k->id]) }}">
                                        <div class="modal fade" id="hapus_kandidat_{{$k->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                @endif
                            </tr>
                            <tr>
                                <td>
                                    @if($k->foto_wakil == "")
                                    <img src="{{ asset('gambar/sistem/user.png') }}" style="width: 30px" class="mr-2">
                                    @else
                                    <img src="{{ asset('gambar/kandidat/'.$k->foto_wakil) }}" style="width: 30px" class="mr-2">
                                    @endif
                                </td>
                                <td>
                                    {{ $k->nama_wakil }}
                                    <br>
                                    <small class="badge badge-primary">Calon Wakahim</small>
                                </td>
                                <td>{!! $k->tentang_wakil !!}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
