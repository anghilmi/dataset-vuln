@extends('master')

@section('content')
<div class="container">

    <center>
        <h4 class="font-weight-bold">Hitung Cepat</h4>
    </center>

    <br>

    <div class="row justify-content-center">

        @foreach($kandidat as $k)

        <div class="col-md-4">

            <div class="card">
                <div class="card-header text-center font-weight-bold">{{ $k->kode }}</div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-6">

                            @if($k->foto_ketua == "")
                            <img src="{{ asset('gambar/sistem/user.png') }}" style="width: 100%">
                            @else
                            <img src="{{ asset('gambar/kandidat/'.$k->foto_ketua) }}" style="width: 100%">
                            @endif

                            <center>
                                {{ $k->nama_ketua }}
                                <div><small class="text-muted">Calon Kahim</small></div>
                            </center>

                        </div>
                        <div class="col-lg-6">

                            @if($k->foto_wakil == "")
                            <img src="{{ asset('gambar/sistem/user.png') }}" style="width: 100%">
                            @else
                            <img src="{{ asset('gambar/kandidat/'.$k->foto_wakil) }}" style="width: 100%">
                            @endif

                            <center>
                                {{ $k->nama_wakil }}
                                <div><small class="text-muted">Calon Wakahim</small></div>
                            </center>

                        </div>
                    </div>

                    <center>
                    
                        <?php 
                        $id_kandidat = $k->id;
                        $jumlah = DB::table('voting')->where('kandidat_id',$id_kandidat)->count();
                        ?>
                        <br>
                        <div class="alert alert-info">
                            <b><?php echo $jumlah ?></b> Suara
                        </div>
                        <?php 
                        ?>
                    </center>

                </div>
            </div>

        </div>

        @endforeach

    </div>

    <br>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Grafik hasil voting</div>
                <div class="card-body p-0">
                    <br>
                    <canvas id="grafik1" style="position: relative; height: 300px;"></canvas>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection