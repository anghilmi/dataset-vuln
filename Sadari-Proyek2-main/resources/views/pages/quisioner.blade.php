<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quisioner</title>
    @vite('../resources/css/app.css')
    @vite('../resources/js/quisionerHandler.js')
</head>

        <body>
                    @foreach ($result_keluhan as $caritanggal )
                    @if ($caritanggal->user_id == Auth::user()->id )
                    <?php
                    $cs = $caritanggal->created_at;
                    ?>
                    @break
                    @endif
                    @endforeach

                    @foreach ($result_keluhan as $r_klhn)
                    @if(Auth::user()->id == $r_klhn->user_id)
                    @php
                    //    $nilai = substr('aul',0,2);
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

                        @elseif($bulan > 1)

                        @else
                        <script>window.location.href = "/home";</script>
                        @endif
                    @endif
                    @if ($tahunNow == $tahun)
                        @if($bulanNow > $bulan)
                            @if($hariNow >= $hari)
                            @else
                            <script>window.location.href = "/home";</script>
                            @endif
                        @else
                        <script>window.location.href = "/home";</script>
                        @endif
                    @endif
                    @else

@endif

                    @endforeach



    <div class="h-screen bg-red-100 flex justify-center">
        <div class="max-w-screen-xl h-screen w-full flex flex-col items-center">
            <!-- NAVBAR SECTION -->
            <div class="flex justify-between w-full items-center h-max mt-16 px-20">
                <img style="width:100px ; height:60px" src="../assets/img/logo.png" alt="sadari">
                {{-- <h1>KUIOSIONER</h1> --}}
                {{-- <div>
                    x
                </div> --}}
            </div>

            <!-- QUESTION SECTION -->
            <div class="p-2  xxs:w-96  my-4"  >
                <form id="form-pengetahuan" action="{{ route('resultquisioner.store') }}" method="POST">
                    @csrf


                    @foreach ($dataPertanyaan as $value )
                    <div id="{{ $value->id }}" style="display: none;">
                        {{-- menghilangkan py-20 u/ merapihkan halaman --}}
                        <div class="flex justify-center ">
                            <h1 id="q-list" style="margin-bottom: 20px" class="text-center text-2xl">{{ $value->pertanyaan }}</h1>
                        </div>
                        <input style="display: none;" type="text" name="user_id" value="{{ Auth::user()->id }}">
                        <input style="display: none;" type="text" name="nik" value="{{ Auth::user()->nik }}">
                        <input style="display: none;" type="text" name="nama" value="{{ Auth::user()->name }}">
                        <div>
                            <div class="flex items-center mt-4 bg-white border border-blue-300 border border-slate-300 rounded-lg p-1">
                                <input class="inputan mx-3" type="radio" id="a{{ $value->id }}" name="q{{ $value->id }}" value="a">
                                <label class="w-full" for="a{{ $value->id }}">{{ $value->opsi1}}</label><br>
                            </div>
                            <div class="flex items-center mt-4 bg-white border-blue-300 border border-slate-300  rounded-lg p-1">
                                <input class="inputan mx-3" type="radio" id="b{{ $value->id }}" name="q{{ $value->id }}" value="b">
                                <label class="w-full" for="b{{ $value->id }}">{{ $value->opsi2}}</label><br>
                            </div>
                            <div class="flex items-center mt-4 bg-white border border-blue-300 border border-slate-300  rounded-lg p-1">
                                <input class="inputan mx-3" type="radio" id="c{{ $value->id }}" name="q{{ $value->id }}" value="c">
                                <label class="w-full" for="c{{ $value->id }}">{{ $value->opsi3}}</label>
                            </div>
                            <div class="flex items-center mt-4 bg-white border border-blue-300 border border-slate-300  rounded-lg p-1">
                                <input class="inputan mx-3" type="radio" id="d{{ $value->id }}" name="q{{ $value->id }}" value="d">
                                <label class="w-full" for="d{{ $value->id }}">{{ $value->opsi4}}</label>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div id="11" style="display: none;" class="table-responsive" >
                        {{-- mengubah margin-top 50% u/ merapihkan tampilan layar --}}
                        <div style="margin-top:50px">
                            <h2 class="mb-4">Centang keluhan yang ada alami dibawah ini:</h2>
                        <input style="display: none;" type="text" name="user_id" value="{{ Auth::user()->id }}">


                        <table class="table table-striped  table-hover">
                            <tbody >
                                @foreach ($dataKeluhan as $keluhan)
                                <tr>
                                    <td class=" flex items-start mr-4">{{ $keluhan->id }}</td>
                                    <td class="">
                                        {{ $keluhan->keluhan }}
                                    </td>
                                    <td class=" flex items-start px-2">
                                        <input class="myCheckBox" id="check{{$keluhan->id}}" type="checkbox" name="a{{$keluhan->id}}" value="{{ $keluhan->id }}">
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>




                        <input type="hidden" name="jumlah" value="6">
                        </div>
                        <!-- <button type="submit" id="btn-keluhan" class="btn btn-success">SIMPAN</button> -->
                    </div>

                    <div onclick="kirim()" id="sendNow" class="py-4" style="display: none;">
                        <button class="bg-blue-600 font-bold py-2 px-4 rounded-xl text-white">Kirim Sekarang</button>
                    </div>

                </form>


            </div>

        </div>
    </div>

    <div class="h-20 fixed bottom-0 left-0 right-0 bg-white flex justify-center">
        <div class="max-w-screen-xl w-full  flex justify-evenly items-center">
            <div class="flex items-center">
                <div class="w-36 h-3 bg-blue-400 rounded-lg">
                    <div id='sesion-bar' class="w-1/2 h-3 bg-blue-700 rounded-lg">

                    </div>
                </div>
                <span id="angka" class="px-2">1</span>/ 11
            </div>
            <div class="flex">
                {{-- penambahan button back --}}
                <button for='form-kuesioner' id='btnBack' onclick="prevQuestion()" class="bg-blue-600 font-bold py-2 px-4 rounded-xl text-white mr-2">Back</button>
                <button for='form-kuesioner' id='btn' onclick="runMyFunction()" class="bg-blue-600 font-bold py-2 px-4 rounded-xl text-white">Next</button>
            </div>

        </div>
    </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // penambahan sesion bar
        document.getElementById(`sesion-bar`).style.width = '5%';
        document.getElementById('1').style.display = "block";
        document.getElementById('btnBack').style.display = "none";


        let banyak = 1
        console.log('banyak', banyak)
        const runMyFunction = () => {
            banyak += 1;
            document.getElementById('angka').innerHTML = banyak;
            if (banyak == 11) {
                document.getElementById('sendNow').style.display = 'block'
            }else{
                document.getElementById('sendNow').style.display = 'none'
            }
            console.log('banyak', banyak);
            switch (banyak) {
                case 1:
                    // penambahan btn back
                    document.getElementById('btnBack').style.display = "none";
                    document.getElementById(`sesion-bar`).style.width = '5%';
                    document.getElementById(`1`).style.display = 'block';
                    document.getElementById(`2`).style.display = 'none';
                    break;
                case 2:
                    // alert('case 2')
                    document.getElementById('btnBack').style.display = "flex";
                    document.getElementById(`sesion-bar`).style.width = '10%';
                    document.getElementById(`1`).style.display = 'none';
                    document.getElementById(`2`).style.display = 'block';
                    document.getElementById(`3`).style.display = 'none';
                    break;
                case 3:
                document.getElementById(`sesion-bar`).style.width = '20%';
                    document.getElementById(`2`).style.display = 'none';
                    document.getElementById(`3`).style.display = 'block';
                    document.getElementById(`4`).style.display = 'none';
                    break;
                case 4:
                document.getElementById(`sesion-bar`).style.width = '30%';
                    document.getElementById(`3`).style.display = 'none';
                    document.getElementById(`4`).style.display = 'block';
                    document.getElementById(`5`).style.display = 'none';
                    break;
                case 5:
                document.getElementById(`sesion-bar`).style.width = '40%';
                    document.getElementById(`4`).style.display = 'none';
                    document.getElementById(`5`).style.display = 'block';
                    document.getElementById(`6`).style.display = 'none';
                    break;
                case 6:
                document.getElementById(`sesion-bar`).style.width = '50%';
                    document.getElementById(`5`).style.display = 'none';
                    document.getElementById(`6`).style.display = 'block';
                    document.getElementById(`7`).style.display = 'none';
                    break;
                case 7:
                document.getElementById(`sesion-bar`).style.width = '60%';
                    document.getElementById(`6`).style.display = 'none';
                    document.getElementById(`7`).style.display = 'block';
                    document.getElementById(`8`).style.display = 'none';
                    break;
                case 8:
                document.getElementById(`sesion-bar`).style.width = '70%';
                    document.getElementById(`7`).style.display = 'none';
                    document.getElementById(`8`).style.display = 'block';
                    document.getElementById(`9`).style.display = 'none';
                    break;
                case 9:
                document.getElementById(`sesion-bar`).style.width = '80%';
                    document.getElementById(`8`).style.display = 'none';
                    document.getElementById(`9`).style.display = 'block';
                    document.getElementById(`10`).style.display = 'none';
                    break;
                case 10:
                document.getElementById(`sesion-bar`).style.width = '90%';
                    document.getElementById(`9`).style.display = 'none';
                    document.getElementById(`10`).style.display = 'block';
                    document.getElementById(`11`).style.display = 'none';
                    break;
                case 11:
                document.getElementById(`sesion-bar`).style.width = '100%';
                document.getElementById(`btn`).style.display = 'none';
                    document.getElementById(`10`).style.display = 'none';
                    document.getElementById(`11`).style.display = 'block';
                    document.getElementById(`1`).style.display = 'none';
                    break;
                default:
                    // document.getElementById(`q${banyak}`).style.display = 'none';
                    break;
            }
        }
        // const togel = document.getElementById('check7');
        const togel = document.querySelector("input[name=a7]");;
        togel.addEventListener('change', () => {
            document.getElementById('check1').checked = false;
            document.getElementById('check2').checked = false;
            document.getElementById('check3').checked = false;
            document.getElementById('check4').checked = false;
            document.getElementById('check5').checked = false;
            document.getElementById('check6').checked = false;
        })
        // penambahan fungsi handle bcak
        function prevQuestion(){
            banyak -= 1;
            document.getElementById('angka').innerHTML = banyak;
            if (banyak != 11) {
                document.getElementById('sendNow').style.display = 'none'
            }
            console.log('banyak', banyak);
            switch (banyak) {
                case 1:
                    // penambahan btn back dan session bar
                    document.getElementById('btnBack').style.display = "none";
                    document.getElementById(`sesion-bar`).style.width = '5%';
                    document.getElementById(`1`).style.display = 'block';
                    document.getElementById(`2`).style.display = 'none';
                    break;
                case 2:
                    // alert('case 2')
                    document.getElementById(`btn`).style.display = 'flex';
                    document.getElementById(`sesion-bar`).style.width = '10%';
                    document.getElementById(`1`).style.display = 'none';
                    document.getElementById(`2`).style.display = 'block';
                    document.getElementById(`3`).style.display = 'none';
                    break;
                case 3:
                document.getElementById(`btn`).style.display = 'flex';
                document.getElementById(`sesion-bar`).style.width = '20%';
                    document.getElementById(`2`).style.display = 'none';
                    document.getElementById(`3`).style.display = 'block';
                    document.getElementById(`4`).style.display = 'none';
                    break;
                case 4:
                document.getElementById(`btn`).style.display = 'flex';
                document.getElementById(`sesion-bar`).style.width = '30%';
                    document.getElementById(`3`).style.display = 'none';
                    document.getElementById(`4`).style.display = 'block';
                    document.getElementById(`5`).style.display = 'none';
                    break;
                case 5:
                document.getElementById(`sesion-bar`).style.width = '40%';
                    document.getElementById(`4`).style.display = 'none';
                    document.getElementById(`5`).style.display = 'block';
                    document.getElementById(`6`).style.display = 'none';
                    break;
                case 6:
                document.getElementById(`btn`).style.display = 'flex';
                document.getElementById(`sesion-bar`).style.width = '50%';
                    document.getElementById(`5`).style.display = 'none';
                    document.getElementById(`6`).style.display = 'block';
                    document.getElementById(`7`).style.display = 'none';
                    break;
                case 7:
                document.getElementById(`btn`).style.display = 'flex';
                document.getElementById(`sesion-bar`).style.width = '60%';
                    document.getElementById(`6`).style.display = 'none';
                    document.getElementById(`7`).style.display = 'block';
                    document.getElementById(`8`).style.display = 'none';
                    break;
                case 8:
                document.getElementById(`btn`).style.display = 'flex';
                document.getElementById(`sesion-bar`).style.width = '70%';
                    document.getElementById(`7`).style.display = 'none';
                    document.getElementById(`8`).style.display = 'block';
                    document.getElementById(`9`).style.display = 'none';
                    break;
                case 9:
                document.getElementById(`btn`).style.display = 'flex';
                document.getElementById(`sesion-bar`).style.width = '80%';
                    document.getElementById(`8`).style.display = 'none';
                    document.getElementById(`9`).style.display = 'block';
                    document.getElementById(`10`).style.display = 'none';
                    break;
                case 10:
                document.getElementById(`btn`).style.display = 'flex';
                document.getElementById(`sesion-bar`).style.width = '90%';
                    document.getElementById(`9`).style.display = 'none';
                    document.getElementById(`10`).style.display = 'block';
                    document.getElementById(`11`).style.display = 'none';
                    break;
                case 11:
                document.getElementById(`sesion-bar`).style.width = '100%';
                document.getElementById(`btn`).style.display = 'none';
                    document.getElementById(`10`).style.display = 'none';
                    document.getElementById(`11`).style.display = 'block';
                    document.getElementById(`1`).style.display = 'none';
                    break;
                default:
                    // document.getElementById(`q${banyak}`).style.display = 'none';
                    break;
            }

        }
        for (let index = 1; index < 7; index++) {
            document.querySelector(`input[name=a${index}]`).addEventListener('change', () => {
                document.getElementById('check7').checked = false;
            })
        }

        const form1 = document.getElementById('form-pengetahuan')

        form1.addEventListener('submit', function(e) {
            e.preventDefault()
        })
        const kirim = async () => {
            // alert('heai')
            await form1.submit()
            // form2.submit()
        }
    </script>

</body>

</html>
