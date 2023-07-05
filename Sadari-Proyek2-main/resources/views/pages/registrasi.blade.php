<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    @vite('../resources/css/app.css')
</head>

<body>
    <div class="h-screen relative flex justify-center">
        <div class="fixed top-0 left-0 bottom-0 bg-red-100 h-screen w-1/2 ">

        </div>
        <div class="max-w-screen-xl bg-red-100 h-screen w-full flex z-10">
            <div class="w-1/2 hidden lg:flex items-center justify-center ">
                <div class="w-3/4">
                    <img src="../assets/img/logo.png" alt="sadari">
                    <img src="../assets/img/gambar.png" alt="sadari">
                </div>

            </div>
            <div class="flex w-full bg-white lg:rounded-tl-[50px] lg:rounded-bl-[50px] lg:w-1/2 justify-center items-center">
                <div class="">
                    <div class="pb-12">
                        <p class="text-blue-500 text-2xl text-center font-medium">Create Account</p>
                    </div>
                    <div>
                        <div class="p-2  xxs:w-96  ">
                            <form>
                                <div class="flex items-center mt-4 bg-white border border-slate-300 border border-slate-300 rounded-lg">
                                    <p onclick="setValueNik()" class="px-4">x</p>
                                    <input id='nik' placeholder="NIK" type="text" class=" block w-full px-3 py-2  border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500" />

                                </div>
                                <div class="flex items-center mt-4 bg-white border border-slate-300 border border-slate-300  rounded-lg">
                                    <p onclick="setValueNik()" class="px-4">x</p>
                                    <input placeholder="Full Name" type="text" class=" block w-full px-3 py-2  border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500" />

                                </div>
                                <div class="flex items-center mt-4 bg-white border border-slate-300 border border-slate-300  rounded-lg">
                                    <p onclick="setValueNik()" class="px-4">x</p>
                                    <input placeholder="Name" type="text" class=" block w-full px-3 py-2  border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500" />

                                </div>
                                <div class="flex items-center mt-4 bg-white border border-slate-300 border border-slate-300  rounded-lg">
                                    <p onclick="setValueNik()" class="px-4">x</p>
                                    <input placeholder="Email" type="text" class=" block w-full px-3 py-2  border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500" />

                                </div>
                                <div class="flex items-center mt-4 bg-white border border-slate-300 border border-slate-300  rounded-lg">
                                    <p onclick="setValueNik()" class="px-4">x</p>
                                    <input placeholder="kecamatan" type="text" class=" block w-full px-3 py-2  border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500" />

                                </div>
                                <div class="flex items-center mt-4 bg-white border border-slate-300 border border-slate-300 rounded-lg">
                                    <p onclick="setValueNik()" class="px-4">x</p>
                                    <input placeholder="kabupaten" type="text" class=" block w-full px-3 py-2  border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500" />

                                </div>
                                <div class="flex items-center mt-4 bg-white border border-slate-300 border border-slate-300 rounded-lg">
                                    <p onclick="setValueNik()" class="px-4">x</p>
                                    <input id='password' placeholder="password" type="password" class=" block w-full px-3 py-2   text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500" />
                                    <p onclick="setShowPasswd()" class="px-4">x</p>
                                </div>

                                <div class="flex  py-8">
                                    <input type="checkbox" name="" value="">
                                    <a href="">i agree with terms and privacy</a>
                                </div>
                                <div>
                                    <a href="/quisioner">
                                        <button type="button" class="bg-blue-600 font-bold py-2 px-4 rounded-xl text-white w-full">Sign In</button>
                                    </a>

                                </div>
                            </form>
                        </div>
                    </div>
                    <div>
                        <p class="text-center mt-8">
                            Already have an account?
                            <a href="login"> Log in </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>