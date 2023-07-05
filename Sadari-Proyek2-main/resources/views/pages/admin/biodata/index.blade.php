@extends('pages.admin.layoutadmin.main')
@section('content')
    <form methode="POST" action="">
        {{ csrf_field() }}
        <table class="table table-bordered table-striped table-responsive" id="example1">
            <thead>
                <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">NIK</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">NO HP</th>
                    <th scope="col">TGL LAHIR</th>
                    <th scope="col">PENDIDIKAN</th>
                    <th scope="col">KECAMATAN</th>
                    <th scope="col">ALAMAT</th>
                    <th scope="col">EMAIL</th>
                </tr>
            </thead>

            <tbody>
                @foreach($dataPuskesmas as $currentUser)
                    @if($currentUser->user_id == Auth::user()->id)
                        @php
                            $knowUnser = $currentUser->user_id;
                            $knowPuskesmasId = $currentUser->puskesmas_id;

                        @endphp
                        @break
                    @endif
                @endforeach


                @php
                    $i = 1;
                @endphp
                @foreach($dataPuskesmas as $detail_puskesmas)
                @if($detail_puskesmas->status === "pasien")
                @if($detail_puskesmas->puskesmas_id == $knowPuskesmasId)

                @foreach ($dataUser as $user)
                <tr>

                            @if($detail_puskesmas->user_id == $user->id)
                            <td>{{ $i++ }}</td>
                            <td>{{ $user->nik }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->no_hp }}</td>
                            <td>{{ $user->tanggal_lahir }}</td>
                            <td>{{ $user->pendidikan }}</td>
                            <td>{{ $user->kecamatan }}</td>
                            <td>{{ $user->alamat }}</td>
                            <td>{{ $user->email }}</td>


                    @endif

                </tr>
            @endforeach

                @endif
                @endif
                @endforeach
            </tbody>
        </table>
    @endsection












