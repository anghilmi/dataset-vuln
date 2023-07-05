<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Administrator - E-Voting Pemilihan Kahim & Wakahim Jurusan Teknik Informatika 2022</title>
    <link rel="icon" href="gambar/sistem/himatif-logo.png" type="image/x-icon">

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugin/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugin/datatables/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm border shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
            <img src="gambar/sistem/himatif-logo.png" alt="" width="30" me-5>
                <b>HIMATIF</b>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}"><i class="fa fa-home"></i> Dashboard</a></li>
                    @if(Auth::user()->level == "admin")
                    <li class="nav-item"><a class="nav-link" href="{{ route('kandidat') }}"><i class="fa fa-users"></i> Data Kandidat</a></li>
                    @endif
                    <li class="nav-item"><a class="nav-link" href="{{ route('pemilih') }}"><i class="fa fa-users"></i> Data Pemilih</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('voting') }}"><i class="fa fa-pencil"></i> Hasil Voting</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('rekapitulasi') }}"><i class="fa fa-file"></i> Rekapitulasi Voting</a></li>
                    @if(Auth::user()->level == "admin")
                    <li class="nav-item"><a class="nav-link" href="{{ route('user') }}"><i class="fa fa-user"></i> Data Pengguna</a></li>
                    @endif
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            @if(Auth::user()->foto == "")
                            <img src="{{ asset('gambar/sistem/user.png') }}" style="width: 20px" class="mr-2">
                            @else
                            <img src="{{ asset('gambar/user/'.Auth::user()->foto) }}" style="width: 20px" class="mr-2">
                            @endif
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right mt-2" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('password') }}"><i class="fa fa-lock"></i> Ganti Password</a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-power-off"></i>
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>

    <div class="text-center text-muted py-5">
        <small>E-Voting - Pemilihan Kahim & Wakahim Jurusan Teknik Informatika 2022</small>
    </div>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/plugin/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/plugin/datatables/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/plugin/datatables/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('assets/plugin/chart.js/chart.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            CKEDITOR.replace('textarea1');
            CKEDITOR.replace('textarea2');
            CKEDITOR.replace('textarea3');
            CKEDITOR.replace('textarea4');

            $(".tableku").DataTable();
        });
    </script>


    <script>
        var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

        var barChartData = {
            labels : [
            <?php 
            use Illuminate\Support\Facades\DB;
            $kandidat = DB::table('kandidat')->get();
            foreach($kandidat as $k){
                ?>
                "(<?php echo $k->kode ?>) <?php echo $k->nama_ketua ?> & <?php echo $k->nama_wakil ?>",
                <?php 
            }
            ?>
            ],
            datasets : [
            {
                label: 'Suara',
                fillColor : "rgba(51, 240, 113, 0.61)",
                strokeColor : "rgba(11, 246, 88, 0.61)",
                highlightFill: "rgba(220,220,220,0.75)",
                highlightStroke: "rgba(220,220,220,1)",
                data : [

                <?php 
                $kandidat = DB::table('kandidat')->get();
                foreach($kandidat as $k){
                    $id_kandidat = $k->id;
                    $jumlah = DB::table('voting')->where('kandidat_id',$id_kandidat)->count();
                    ?>
                    "<?php echo $jumlah ?>",
                    <?php 
                }
                ?>
                ]
            },

            ]

        }


        window.onload = function(){
            var ctx = document.getElementById("grafik1").getContext("2d");
            window.myBar = new Chart(ctx).Bar(barChartData, {
                responsive : true,
                animation: true,
                barValueSpacing : 5,
                barDatasetSpacing : 1,
                tooltipFillColor: "rgba(0,0,0,0.8)",
                multiTooltipTemplate: "<%= datasetLabel %> - Rp.<%= value.toLocaleString() %>,-"
            });
        }
    </script>
</body>
</html>
