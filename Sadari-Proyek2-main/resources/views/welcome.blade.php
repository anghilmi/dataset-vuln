{{-- <!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="min-h-screen bg-red-100">

        <div class=" lg:flex lg:justify-center lg:items-center ">
            <div class="h-screen-10vh lg:hidden">
                // this is just for gap
            </div>
            @include('layouts.navbar')

            <div class="max-w-screen-xl  w-full lg:flex ">

                <div class="h-screen/2  flex justify-center lg:h-screen lg:w-3/5">
                    <img src="../assets/img/gambar.png" alt="sadari" />
                </div>
                <div class="h-screen-40vh lg:h-screen flex justify-center items-center lg:w-2/5">
                    <div class="flex flex-col items-center">
                        <p class="font-bold text-center text-2xl">
                            AYO<br />
                            PERIKSA PAYUDARA SENDIRI
                        </p>

                        <p>Deteksi dini kanker payudara</p>
                        <div class="flex justify-center mt-4">
                            <a href="#info-section">
                                <button class=" bg-blue-600 font-bold py-2 px-4 rounded-xl text-white">Go Sadari</button>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- information -->
    <div id="info-section" class="min-h-screen bg-red-100 flex items-center justify-center">

        <div class="max-w-screen-xl  w-full">
            <div class="p-4">
                <p class="font-bold text-xl">INFORMASI</p>
            </div>
            <div class="bg-white lg:flex rounded-xl">

                <!-- Hero Image -->
                <div class="p-4 flex justify-center lg:w-2/5">
                    <img src="../assets/img/sadari.png" alt="sadari" />
                </div>
                <!-- Text Info -->
                <div class="p-4 lg:w-3/5 lg:text-2xl lg:h-5/6  lg:flex lg:flex-col justify-between">
                    <p>Pemeriksaan payudara sendiri (SADARI) adalah cara termudah untuk medeteksi kelaian pada ukuran, tekstur, serta bentukk payudara. Pemeriksaan ini juga bisa membantu deteksi dini kanker payudara, sehingga, Lalu, bagaimana SADARI dilakukan? Adakah tes lainya untuk mendeteksi dini kanker payudara?</p>
                    <div class="flex justify-center mt-4 lg:mt-8">
                        <a href="#info-lanjut">
                            <button class=" bg-blue-600  py-2 px-4 rounded-xl text-gray-300">Info lebih lanjut</button>
                        </a>


                    </div>
                </div>

            </div>
        </div>

    </div>
    <div class="min-h-screen bg-red-100 flex justify-center">
        <div class="max-w-screen-xl   w-full" id="info-lanjut">
            <div class="flex justify-center p-4">
                <h1 class="text-2xl font-medium">Fasilitas Kesehatan</h1>
            </div>
            <div class="flex flex-wrap w-full justify-center ">
                <div class="bg-white p-6 m-2 w-40 lg:w-64  border-t-2 border-red-400 rounded-b-xl">
                    <img class="w-10" src="../assets/img/gambar.png" alt="sadari" />
                    <p class="font-medium">Rawat Inap</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <div class="bg-white p-6 m-2 w-40 lg:w-64 border-t-2 border-red-400 rounded-b-xl">
                    <img class="w-10" src="../assets/img/gambar.png" alt="sadari" />
                    <p class="font-medium">Puskesmas Lohbener</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <div class="bg-white p-6 m-2 w-40 lg:w-64 border-t-2 border-red-400 rounded-b-xl">
                    <img class="w-10" src="../assets/img/gambar.png" alt="sadari" />
                    <p class="font-medium">Unit Gawat Darurat</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <div class="bg-white p-6 m-2 w-40  lg:w-64 border-t-2 border-red-400 rounded-b-xl">
                    <img class="w-10" src="../assets/img/gambar.png" alt="sadari" />
                    <p class="font-medium">Rawat Jalan</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <div class="bg-white p-6 m-2 w-40 lg:w-64 border-t-2 border-red-400 rounded-b-xl">
                    <img class="w-10" src="../assets/img/gambar.png" alt="sadari" />
                    <p class="font-medium">ICU</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <div class="bg-white p-6 m-2 w-40 lg:w-64 border-t-2 border-red-400 rounded-b-xl">
                    <img class="w-10" src="../assets/img/gambar.png" alt="sadari" />
                    <p class="font-medium">Medical Check Up</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>

            </div>
        </div>
    </div>
    @include('layouts.footer')
</body>

</html> --}}
@include('layouts landing page.main');