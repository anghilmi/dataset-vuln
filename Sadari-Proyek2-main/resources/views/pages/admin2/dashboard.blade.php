@extends('pages.admin2.layoutSuperAdmin.main')
@section('css')
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('lte') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('lte') }}/plugins/jqvmap/jqvmap.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('lte') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('lte') }}/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('lte') }}/plugins/summernote/summernote-bs4.min.css">
@endsection
@section('content')
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{$jumlahUser}}</h3>
                    <p>Pengguna</p>
                </div>
                <div class="icon">
                    <i class="fa fa-users" aria-hidden="true"></i>
                </div>
                <a href="/biodata" class="small-box-footer">More info <i class="fas fa-arrowcircle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{$jumlahSADARI}}</sup></h3>
                    <p>SADARI</p>
                </div>
                <div class="icon">
                    <i class="fa fa-users" aria-hidden="true"></i>
                </div>
                <a href="/statistik" class="small-box-footer">More info <i class="fas fa-arrowcircle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{$jumlahTertangani}}</h3>
                    <p>Sudah ditangani</p>
                </div>
                <div class="icon">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </div>
                <a href="/sudahditangani" class="small-box-footer">More info <i class="fas fa-arrowcircle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{$jumlahBelumTertangani}}</h3>
                    <p>Belum ditangani</p>
                </div>
                <div class="icon">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </div>
                <a href="/belumditangani" class="small-box-footer">More info <i class="fas fa-arrowcircle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>


    <section class="content">
        <div class="col-lg-3 col-6 mt-3 mb-3 text-bold">
            <h4>Riwayat SADARI</h4>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Pengetahuan</th>
                    <th scope="col">Keluhan</th>
                    <th scope="col">Faskes</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>

            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($dataKuis as $item)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->nik }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->hasil }}</td>
                        <td>{{ $item->keluhan }}</td>
                        <td>{{ $item->kecamatan }}</td>
                        <td>
                            @if ($item->status == 'belum')
                                <a href="/superAdmin/{{ $item->user_id }}" class="btn btn-secondary ">
                                    <i class="fa fa-window-close"></i>
                                </a>
                            @else
                                <a href="/superAdmin/{{ $item->user_id }}" class="btn btn-success ">
                                    <i class="fa fa-solid fa-check"></i>
                                </a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>

    <!-- /.row -->
    <!-- Main row -->


    <!-- /.row (main row) -->
@endsection
@section('javascript')
    <!-- ChartJS -->
    <script src="{{ asset('lte') }}/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="{{ asset('lte') }}/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="{{ asset('lte') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{ asset('lte') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('lte') }}/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('lte') }}/plugins/moment/moment.min.js"></script>
    <script src="{{ asset('lte') }}/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('lte') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="{{ asset('lte') }}/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('lte') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('lte') }}/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('lte') }}/dist/js/pages/dashboard.js"></script>
@endsection
