<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets') }}/img/logo.png" rel="icon" />
    <title>Home</title>
    @vite('resources/css/app.css')
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="flex min-h-screen">
        <div class="hidden lg:flex  " id="sidebarnih">
            <div class="h-100 fixed">
                <div class="d-flex h-screen flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
                    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <svg class="bi me-2" width="40" height="32">
                            <use xlink:href="#bootstrap"></use>
                        </svg>
                        <span class="fs-4">Sidebar</span>
                    </a>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link active" aria-current="page">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#home"></use>
                                </svg>
                                Home
                            </a>
                        </li>

                        @if (Auth::user()->can('read_puskesmas'))

                        <li id='link-admin'>
                            <a href="admin" class="nav-link text-white">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#speedometer2"></use>
                                </svg>
                                Admin
                            </a>
                        </li>

                        @endif
                        @if (Auth::user()->can('read_user'))
                        <li>
                            <a href="superAdmin" class="nav-link text-white">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#speedometer2"></use>
                                </svg>
                                Super Admin
                            </a>
                            <script>
                               // document.getElementById('link-admin').style.display = 'none';
                            </script>
                        </li>
                        @endif

                    </ul>
                    <hr>
                    <div class="dropdown">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="../assets/img/user.png" alt="user" width="32" height="32" class="rounded-circle me-2">
                            <strong>{{ Auth::user()->name }}</strong>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                            {{-- <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li> --}}
                            <!-- <li>
                                <hr class="dropdown-divider">
                            </li> -->
                            <li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="mx-3">
                                        Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="w-72 ">
                <!-- THIS IS JUST FOR GAP -->
            </div>
        </div>
        <div class="w-full h-screen ">
            <!-- Start Header -->
            <div class="bg-red-200 w-full h-screen-10vh flex items-center">
                <div class="mx-4">
                    <button onclick="showHide()" type="button">
                        SHOW/HIDE
                    </button>
                </div>
            </div>
            <!-- End Header -->


            <!-- Start Content -->


            <div class=" flex flex-col-reverse justify-end items-center w-full h-screen-90vh">

                <ul>
                    {{-- <li>
                        <h2>List Keluhan</h2>
                    </li> --}}
                    <?php
                    $cs;
                    ?>
                    @foreach ($result_keluhan as $caritanggal )
                    @if ($caritanggal->user_id == Auth::user()->id )
                    <?php
                    $cs = $caritanggal->created_at;
                    ?>
                    @break
                    @endif
                    @endforeach

                    @foreach ($result_keluhan as $keluhan )

                    @if ($keluhan->user_id == Auth::user()->id )

                    @if ($keluhan->created_at == $cs)
                    <li>
                        @foreach ($daftar_keluhan as $dklhn)
                        @if ($dklhn->id == $keluhan->keluhan)
                        @if( (int)$keluhan->keluhan == 1 || (int)$keluhan->keluhan == 2 || (int)$keluhan->keluhan == 3 || (int)$keluhan->keluhan == 4 || (int)$keluhan->keluhan == 5 || (int)$keluhan->keluhan == 6)
                        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <script>
                            Swal.fire({
                                icon: 'warning',
                                title: 'Jangan Cemas!',
                                text: 'Lakukan Konsultasi Secepat Mungkin',
                                footer: '<a href="https://wa.me/+6285952621784" target="_blank">Hubungi Kami</a>'
                                })
                        </script>

                        @else
                        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <script>
                            Swal.fire({
                                icon: 'success',
                                title: 'Selamat!',
                                text: 'Anda tidak mempunyai keluhan apapun. Lakukan SADARI minimal 1 bulan sekali.',
                                footer: '<a href="https://wa.me/+6285952621784">Hubungi Kami</a>'
                                })
                                </script>

                        @endif
                        {{-- {{ $dklhn->keluhan }} --}}

                        @endif
                        @endforeach
                    </li>


                    @endif

                    @endif

                    @endforeach
                    {{-- <li>{{ $cs }}</li> --}}
                    @php
                        // $nilai = substr('aul',0,2);
                        $tahun = (int)substr($cs,0,4);
                        $bulan = (int)substr($cs,5,2);
                        $hari = (int)substr($cs,8,2);

                        $sekarang = date('Y-m-d H:i:s');
                        $tahunNow = (int)substr($sekarang,0,4);
                        $bulanNow = (int)substr($sekarang,5,2);
                        $hariNow = (int)substr($sekarang,8,2);
                    @endphp
                    @if ($tahunNow > $tahun)
                        @if($bulan == 1 && $hariNow >= $hari )
                        <a href="/quisioner">
                            <button type="button" class="bg-blue-600 font-bold py-2 px-4 rounded-xl text-white w-full">Periksa Lagi</button>
                        </a>
                        @elseif($bulan > 1)
                        <a href="/quisioner">
                            <button type="button" class="bg-blue-600 font-bold py-2 px-4 rounded-xl text-white w-full">Periksa Lagi</button>
                        </a>
                        @endif
                    @endif
                    @if ($tahunNow == $tahun)
                        @if($bulanNow > $bulan)
                            @if($hariNow >= $hari)
                            <a href="/quisioner">
                                <button type="button" class="bg-blue-600 font-bold py-2 px-4 rounded-xl text-white w-full">Periksa Lagi</button>
                            </a>
                            @endif
                        @endif
                    @endif


                </ul>



                <!-- START BELUM PERNAH -->
                @foreach ($result_quisioner as $hasil)
                @if ($hasil->user_id == Auth::user()->id)
                <?php
                $state = 'data ditemukan';

                $currentHasil = $hasil->hasil;
                ?>
                @break
                @else
                <?php
                $state = 'data tidak ditemukan';
                $currentHasil = $hasil->hasil;
                ?>
                @endif
                @endforeach

                @if ($state == 'data ditemukan')
                <div class=" flex flex-col items-center w-full">
                    <table class="table border border-2" style="margin-top: 10px; w-100">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Pengetahuan</th>
                            <th scope="col">Keluhan</th>
                          </tr>
                        </thead>
                        @php
                          $i = 1;
                        @endphp
                        <tbody>
                            @foreach ($result_quisioner as $hasil)
                            @if ($hasil->user_id == Auth::user()->id)

                            <tr>
                                <th scope="row">{{ $i++ }}</th>
                                <td>{{ $hasil->created_at  }}</td>
                                <td>{{ $hasil->hasil  }} % </td>

                                <td>


                                        @foreach ($result_keluhan as $keluhan )
                                            @if ($keluhan->created_at == $hasil->created_at)
                                                @foreach ($daftar_keluhan as $dklhn)
                                                @if ($dklhn->id == $keluhan->keluhan)
                                                <p>{{ $dklhn->keluhan }}</p>
                                                @endif
                                                @endforeach

                                            @endif
                                        @endforeach

                                </td>
                              </tr>
                            @endif
                            @endforeach


                        </tbody>
                      </table>
                </div>
                @else
                <!-- START UDAH PERNAH -->
                <div class=" flex flex-col h-screen justify-center items-center">

                    <img style="width:100px ; height:60px" src="../assets/img/no_data.png" alt="sadari">
                    <div>
                        <h1 class="text-center">Anda belum melakukan Cek</h1>
                    </div>
                    <a href="/quisioner">
                        <button type="button" class="bg-blue-600 font-bold py-2 px-4 rounded-xl text-white w-full">Cek dulu yuk</button>
                    </a>
                </div>
                <!-- END UDAH PERNAH -->
                @endif


                <!-- END BELUM PERNAH -->


            </div>
            <!-- End Content -->
        </div>
    </div>
    <script>
        function showHide() {
            // const sidebarnih = document.getElementById('sidebarnih').style.display = 'none'
            if (document.getElementById('sidebarnih').style.display == 'flex') {
                document.getElementById('sidebarnih').style.display = 'none'
            } else {
                document.getElementById('sidebarnih').style.display = 'flex'
            }

        }
    </script>
</body>

</html>
