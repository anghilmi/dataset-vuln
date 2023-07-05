@extends('master')

@section('content')
<div class="container">

    <center>
        <h4 class="font-weight-bold">Voting</h4>
    </center>

    <br>


    <center>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            BACA PANDUAN & PERATURAN
        </button>
    </center>

    <br>
    <br>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Panduan & Peraturan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <b>PERATURAN</b>

                    <ul>
                        <li>Pelaksanaan pemungutan suara dilakukan di Tempat Pemungutan suara (TPS) yang telah ditentukan oleh panitia.</li>
                        <li>Setiap Mahasiswa hanya memiliki kesempatan memilih satu kali saja.</li>
                        <li>Calon pemilih menyerahkan kartu mahasiswa kemudian akan mendapat token yang digunakan sebagai akses web seiring dengan pengembalian kartu mahasiswa oleh panitia.</li>
                        <li>Pemilih mengakses sendiri web  yang telah disediakan oleh panitia.</li>
                    </ul>

                    <div class="alert alert-info text-center">
                        Pemilih setelah memilih kandidat calon Kahim dan Wakahim wajib mencelupkan jari kelingking kiri (sampai batas kuku) pada tinta yang telah disediakan oleh panitia pada pintu keluar Tempat Pemungutan Suara.
                    </div>

                    <b>Selama acara pemungutan suara berlangsung, pemilih dan/atau calon <span class="text-danger">DILARANG</span>:</b>

                    <ul>
                        <li>Melakukan kampanye.</li>
                        <li>Menggunakan kata-kata yang mengandung fitnah, dan/atau umpatan terhadap  calon lainnya, panitia dan publik, serta menyinggung suku, agama, ras dan antar golongan serta membawa, bahkan mengatasnamakan dan menyinggung suatu lembaga.</li>
                        <li>Melakukan perbuatan yang melanggar kesopanan, kesusilaan, dan membahayakan pihak-pihak lain.</li>
                        <li>Melakukan tindakan kekerasan kepada siapapun dalam bentuk apapun.</li>
                        <li>Merusak properti apapun di lingkungan kampus.</li>
                        <li>Mengotori lokasi pemungutan suara.</li>
                        <li>Merokok di area steril.</li>
                        <li>Mengganggu kelancaran kerja panitia dalam proses pemungutan suara.</li>
                        <li>Pemilih yang akan menggunakan hak suaranya diwajibkan mendatangi TPS yang telah ditentukan.</li>
                        <li>Pemilih menentukan pilihan dengan cara mengakses web yang telah disediakan lalu mengklik tombol  pilih pada salah satu kandidat.</li>
                    </ul>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Oke, Saya Mengerti</button>
                </div>
            </div>
        </div>
    </div>


    <center>
        <h3>
            BATAS WAKTU VOTING <span id="countdown">120</span> seconds
        </h3>
    </center>


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
                                <div><small class="text-muted">Calon Ketua</small></div>
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
                                <div><small class="text-muted">Calon Wakil</small></div>
                            </center>

                        </div>
                    </div>

                    <br>
                    <br>

                    <center>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#hapus_pemilih_{{ $k->id }}">
                            <i class="fa fa-pencil"></i> PILIH
                        </button>
                    </center>

                    <!-- modal hapus -->
                    <form method="POST" action="{{ route('depan.voting.aksi') }}">
                        <div class="modal fade" id="hapus_pemilih_{{$k->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="exampleModalLabel">Konfirmasi</h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Apakah anda yakin ingin memilih kandidat ini?</p>
                                        @csrf
                                        <input type="hidden" name="kandidat" value="{{ $k->id }}">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light btn-sm" data-dismiss="modal"><i class="ti-close m-r-5 f-s-12"></i> Batal</button>
                                        <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Ya, Saya Yakin</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>


                </div>
            </div>

        </div>

        @endforeach

    </div>
</div>


<?php 
$x = route('depan.login.siswa.logout');
?>

<script type="text/javascript">

    var seconds = 120;

    function countdown() {
        seconds = seconds - 1;
        if (seconds < 0) {

            alert('Waktu voting kamu habis');
            window.location = "<?php echo $x; ?>";

        } else {

            document.getElementById("countdown").innerHTML = seconds;

            window.setTimeout("countdown()", 1000);
        }
    }

    countdown();

</script>
@endsection