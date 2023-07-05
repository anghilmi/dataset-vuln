@extends('admin.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div>
                <h5>Hasil Voting</h5>
                <small class="text-muted">Data Hasil Pemilihan</small>
            </div>
            <hr>

            <div class="">
                <a href="{{ route('voting.cetak') }}" target="_blank" class="btn btn-light"><i class="fa fa-print"></i> Cetak</a>
            </div>

            @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif
            
            <div class="card">
                <div class="card-header"><b>Hasil Voting</b></div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered tableku">
                        <thead>
                            <tr>
                                <th width="1%" class="text-center">No</th>                            
                                <th width="25%">Pemilih</th>
                                <th>Kandidat Dipilih</th>
                                <th width="20%">Waktu Voting</th>
                                @if(Auth::user()->level == "admin")
                                <th width="1%">Opsi</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            ?>
                            @foreach($voting as $p)
                            <tr>
                                <td class="text-center">{{ $no++ }}</td>                               
                                <td>{{ $p->nis }} - {{ $p->nama }}</td>                               
                                <td>
                                <span class="badge badge-primary">{{ $p->kode }}</span> {{ $p->nama_ketua }} & {{ $p->nama_wakil }}
                            </td>
                            <td>{{ date('H:i:s d-m-Y', strtotime($p->created_at)) }}</td>
                            @if(Auth::user()->level == "admin")
                            <td>    

                                <div class="btn-group">
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_voting_{{ $p->id_voting }}">
                                    <i class="fa fa-close"></i> Batalkan Voting
                                </button>
                            </div>

                            <!-- modal hapus -->
                            <form method="POST" action="{{ route('voting.delete',['id' => $p->id_voting]) }}">
                                <div class="modal fade" id="hapus_voting_{{$p->id_voting}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title" id="exampleModalLabel">Peringatan!</h6>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <p>Yakin ingin menghapus voting ini ?</p>

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
