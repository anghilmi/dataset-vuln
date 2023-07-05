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
    <section class="content">

        <table class="table table-bordered table-striped">
            {{-- <a href="/quisioners/create" class="btn btn-success mb-3"><i class="fa fa-plus"></i> Tambah Daftar Pertanyaan</a> --}}
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Pertanyaan</th>
                    <th scope="col">Opsi 1</th>
                    <th scope="col">Opsi 2</th>
                    <th scope="col">Opsi 3</th>
                    <th scope="col">Opsi 4</th>
                    <th scope="col">Tags</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($dataQuiz as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->pertanyaan }}</td>
                        <td>{{ $item->opsi1 }}</td>
                        <td>{{ $item->opsi2 }}</td>
                        <td>{{ $item->opsi3 }}</td>
                        <td>{{ $item->opsi4 }}</td>
                        <td>{{ $item->tags }}</td>
                        <td>
                            <a href="/quisioners/edit/{{ $item->id }}" class="btn btn-sm btn-warning mb-2"><i class="fa fa-edit"></i></a>
                            <a href="/quisioners/destroy/{{ $item->id }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
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
    <!-- lte for demo purposes -->
    <script src="{{ asset('lte') }}/dist/js/demo.js"></script>
    <!-- lte dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('lte') }}/dist/js/pages/dashboard.js"></script>
@endsection
