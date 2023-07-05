<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets') }}/img/logo.png" rel="icon" />
    <title>Login</title>
    @vite('../resources/css/app.css')
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>
    @include('layouts.navbarStatis')
    <div class="h-screen bg-red-100 flex justify-center">
        <div class="max-w-screen-xl h-screen w-full  flex">
            <div class="h-screen w-7/12 hidden lg:flex justify-center items-center">
                <div>
                    <p class="font-medium text-6xl">
                        Login untuk  <br />
                        melakukan SADARI
                    </p>
                    <div class="pt-8 mt-8">
                        <p>
                            Jika kamu belum punya akun <br />
                            Kamu bisa  <a href="/register" class="text-blue-700">Registrasi Disini!</a>
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
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="row mb-3">
                                    <!-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> -->

                                    <div class="col-md-6 w-100">
                                        <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>Usseraname or password salah</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <!-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> -->

                                    <div class="col-md-6 w-100">
                                        <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="flex justify-end">
                                        <!-- <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div> -->
                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Lupa Password?') }}
                                        </a>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-8 w-100">
                                        <button type="submit" class="w-full btn btn-primary bg-blue-600">
                                            {{ __('Login') }}
                                        </button>


                                    </div>
                                </div>
                            </form>
                        </div>
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
