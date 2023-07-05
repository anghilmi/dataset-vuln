@extends('admin.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div>
                <h5>Rekapitulasi</h5>
                <small class="text-muted">Data Hasil Pemilihan</small>
            </div>
            <hr>


            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">

                            <form method="GET" action="">

                                <div class="row">
                                    <div class="col-lg-3">

                                        <div class="form-group">
                                            <div class="form-group has-feedback">
                                                <label class="text-dark">Jenis Kelamin</label>
                                                <select name="jk" class="form-control">
                                                    <option value="semua">- Semua</option>
                                                    <option <?php if(isset($_GET['jk'])){ if($_GET['jk'] == "Laki-laki"){ echo "selected='selected'"; }} ?> value="Laki-laki">Laki-laki</option>
                                                    <option <?php if(isset($_GET['jk'])){ if($_GET['jk'] == "Perempuan"){ echo "selected='selected'"; }} ?> value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-3">

                                        <div class="form-group">
                                            <div class="form-group has-feedback">
                                                <label class="text-dark">Umur</label>
                                                <input type="number" placeholder="Umur pemilih" class="form-control" name="umur" value="<?php if(isset($_GET['umur'])){echo $_GET['umur'];}else{echo "0"; } ?>">
                                                <small>Biarkan "0" menampilkan semua umur</small>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-lg-4">

                                        <div class="form-group">
                                            <div class="form-group has-feedback">
                                                <label class="text-dark">Kandidat</label>

                                                <select name="kandidat" class="form-control">
                                                    <option value="semua">Semua kandidat</option>
                                                    @foreach($kandidat as $k)
                                                    <option <?php if(isset($_GET['kandidat'])){ if($_GET['kandidat'] == $k->id){ echo "selected='selected'"; }} ?> value="{{ $k->id}}">({{ $k->kode}}) {{ $k->nama_ketua}} & {{ $k->nama_ketua}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-lg-2">

                                        <br>
                                        <button type="submit" class="btn btn-primary btn-sm">Filter</button>
                                        <a href="{{ route('rekapitulasi') }}" class="btn btn-danger btn-sm">Reset</a>

                                    </div>
                                </div>

                            </form>


                        </div>
                    </div>
                </div>
            </div>

            <br>


            <?php if(isset($_GET['jk'])){ ?>

                <div class="">
                    <a target="_blank" href="{{ route('rekapitulasi.cetak', ['jk' => $_GET['jk'], 'umur' => $_GET['umur'], 'kandidat' => $_GET['kandidat']]) }}" target="_blank" class="btn btn-light"><i class="fa fa-print"></i> Cetak</a>
                </div>

                <div class="card">
                    <div class="card-header"><b>Rekapitulasi Voting</b></div>

                    <div class="card-body">

                        <table>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <th>:</th>
                                <td>
                                    <?php echo $_GET['jk']; ?>
                                </td>
                            </tr>

                            <tr>
                                <th>Umur</th>
                                <th>:</th>
                                <td>
                                    <?php if($_GET['umur'] == "0"){ echo "semua"; }else{ echo $_GET['umur']; } ?>
                                </td>
                            </tr>

                            <tr>
                                <th>Kandidat</th>
                                <th>:</th>
                                <td>
                                    <?php 
                                    $cek_kandidat = DB::table('kandidat')->where('id',$_GET['kandidat'])->count();
                                    $kandidat = DB::table('kandidat')->where('id',$_GET['kandidat'])->first();
                                    if($cek_kandidat > 0){
                                        ?>
                                        (<?php echo $kandidat->kode ?>) <?php echo $kandidat->nama_ketua ?> & <?php echo $kandidat->nama_wakil ?>
                                        <?php 
                                    }else{
                                        echo "Semua";
                                    }
                                    ?>
                                </td>
                            </tr>


                        </table>

                        <br>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th width="1%" class="text-center">No</th>                            
                                        <th width="25%">Pemilih</th>
                                        <th>Kandidat Dipilih</th>
                                        <th width="20%">Waktu Voting</th>
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
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            <?php } ?>

        </div>
    </div>
</div>
@endsection
