@extends('pages.admin.layoutadmin.main')
@section('content')
    <div class="card kontent ">
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
                    <a href="/laporan" class="small-box-footer">More info <i class="fas fa-arrowcircle-right"></i></a>
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
                    <a href="/sudahditangani" class="small-box-footer">More info <i
                            class="fas fa-arrowcircle-right"></i></a>
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
                    <a href="/belumditangani" class="small-box-footer">More info <i
                            class="fas fa-arrowcircle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>

        <div class="card-body">
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
                            <td>
                                @if ($item->status == 'belum')
                                    <a href="/admin/{{ $item->user_id }}" class="btn btn-secondary ">
                                        <i class="fa fa-window-close"></i>
                                    </a>
                                @else
                                    <a href="/admin/{{ $item->user_id }}" class="btn btn-success ">
                                        <i class="fa fa-solid fa-check"></i>
                                    </a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- /.row -->
        <!-- Main row -->

    </div>
    <!-- /.row (main row) -->
@endsection

















{{-- @extends('pages/admin/panel')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <div style="display: none;">
                                @foreach ( $daftar_puskesmas as $puskemas )
                                {{ $total_puskesmas++ }}
                                @endforeach
                            </div>

                            <h3>{{$total_puskesmas}}</h3>

                            <p>Puskesmas</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <div style="display: none;">
                                @foreach ( $daftar_admin as $admin )

                                @if ($admin->model_id != 1)
                                @break
                                @endif
                                {{ $total_admin++ }}
                                @endforeach
                            </div>

                            <h3>{{$total_admin}}</h3>

                            <p>Admin Puskesmas</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <div style="display: none;">
                                @foreach ( $daftar_pengguna as $pengguna )
                                {{ $total_pengguna++ }}
                                @endforeach
                            </div>

                            <h3>{{$total_pengguna}}</h3>

                            <p>Pengguna</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>65</h3>

                            <p>Perlu Penganan</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <div class="col-md-12">
                    <!-- DONUT CHART -->
                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title">Donut Chart</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection --}}
