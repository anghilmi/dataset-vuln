@extends('admin.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div>
                <h5>Data Pemilih</h5>
                <small class="text-muted">Data Pemilih Aktif</small>
            </div>
            <hr>

            @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif
            
            <a href="{{ route('pemilih.tambah') }}" class="btn btn-primary mb-2 btn-sm"><i class="fa fa-plus"></i> &nbsp Tambah Pemilih</a>

            <div class="card">
                <div class="card-header"><b>Pemilih</b></div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered tableku">
                        <thead>
                            <tr>
                                <th width="1%" class="text-center">No</th>                            
                                <th width="15%">Nama</th>
                                <th>NIM</th>
                                <th>Umur</th>
                                <th>Jenis Kelamin</th>
                                <th>Kelas</th>
                                <th width="1%">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            ?>
                            @foreach($pemilih as $p)
                            <tr>
                                <td class="text-center">{{ $no++ }}</td>                               
                                <td>{{ $p->nama }}</td>                               
                                <td>{{ $p->nis }}</td>
                                <td>{{ $p->umur }}</td>
                                <td>{{ $p->jk }}</td>
                                <td>{{ $p->alamat }}</td>
                                <td>    

                                    <div class="btn-group">
                                        <a href="{{ route('pemilih.edit', ['id' => $p->id]) }}" class="btn btn-light btn-sm btn-sm">
                                            <i class="fa fa-cog"></i>
                                        </a>

                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_pemilih_{{ $p->id }}">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </div>

                                    <!-- modal hapus -->
                                    <form method="POST" action="{{ route('pemilih.delete',['id' => $p->id]) }}">
                                        <div class="modal fade" id="hapus_pemilih_{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
