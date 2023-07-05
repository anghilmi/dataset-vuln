<!DOCTYPE html>
<html>
<head>
<title>Administrator - E-Voting pemilihan Kahim dan Wakahim Jurusan Teknik Informatika 2022</title>
<link rel="icon" href="gambar/sistem/himatif-logo.png" type="image/x-icon">
</head>
<body>
<style type="text/css">
    .x {
        border-collapse: collapse;
    }

    .x,.x th,.x td {
        border: 1px solid black;
    }
</style>

<center>
    <h4>Rekapitulasi Voting</h4>
</center>

<?php if(isset($_GET['jk'])){ ?>


    <div class="card">


        <div class="card-body">

            <table>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <?php echo $_GET['jk']; ?>
                    </td>
                </tr>

                <tr>
                    <td>Umur</td>
                    <td>:</td>
                    <td>
                        <?php if($_GET['umur'] == "0"){ echo "semua"; }else{ echo $_GET['umur']; } ?>
                    </td>
                </tr>

                <tr>
                    <td>Kandidat</td>
                    <td>:</td>
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
                <table class="x">
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
<script type="text/javascript">
        window.print();
    </script>
</body>
</html>