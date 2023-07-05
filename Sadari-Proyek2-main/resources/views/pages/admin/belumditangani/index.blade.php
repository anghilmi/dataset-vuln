@extends('pages.admin.layoutadmin.main')
@section('content')
    <form methode="POST" action="">
        {{ csrf_field() }}
        <table class="table table-bordered table-striped table-responsive" id="example1">
            <thead>
                <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">TANGGAL</th>
                    <th scope="col">NIK</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">PENGETAHUAN</th>
                    <th scope="col">KELUHAN</th>
                    <th scope="col">STATUS</th>
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
                                <a href="" class="btn btn-secondary ">
                                    <i class="fa fa-window-close"></i>
                                </a>
                            @else
                                <a href="" class="btn btn-success ">
                                    <i class="fa fa-solid fa-check"></i>
                                </a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection
