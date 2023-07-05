<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('../resources/css/app.css')
</head>

<body>
    @include('layouts.navbarStatis')
    <div class="h-screen bg-red-100 flex justify-center">
        <div class="max-w-screen-xl h-screen w-full  flex">
            <div class="h-screen w-7/12 hidden lg:flex justify-center items-center">
                <div>
                    <p class="font-medium text-6xl">
                        Sign to lorem <br />
                        lorem ipsum dolor
                    </p>
                    <div class="pt-8 mt-8">
                        <p>
                            if you don't have an account <br />
                            You can <a href="/register" class="text-blue-700">Register here!</a>
                        </p>

                    </div>
                </div>
            </div>
            <div class="h-screen w-full lg:w-5/12  flex items-center justify-center">
                <div>
                    <div class="flex justify-center mb-8">
                        <h1 class="text-4xl">Welcome back</h1>
                    </div>

                    <div class="p-2  xxs:w-96  ">
                        <form>
                            <div class="flex items-center bg-white rounded-lg">
                                <input id='nik' placeholder="NIK" type="text" class=" block w-full px-3 py-2  border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500" />
                                <p onclick="setValueNik()" class="px-4">x</p>
                            </div>
                            <div class="flex items-center mt-4 bg-white rounded-lg">
                                <input id='password' placeholder="password" type="password" class=" block w-full px-3 py-2  border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500" />
                                <p onclick="setShowPasswd()" class="px-4">x</p>
                            </div>

                            <div class="flex justify-end py-8">
                                <a href="">Forgot Password?</a>
                            </div>
                            <div>
                                <button class="bg-blue-600 font-bold py-2 px-4 rounded-xl text-white w-full">Sign In</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const password = document.getElementById('password');
        const setShowPasswd = () => {
            if (password.type == 'text') {
                password.type = 'password'
            } else {
                password.type = 'text'
            }
        }
        const nik = document.getElementById('nik');
        const setValueNik = () => {
            nik.value = ''
        }
    </script>
</body>

</html>