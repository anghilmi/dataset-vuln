<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets') }}/img/logo.png" rel="icon" />
    <title>Registrasi</title>
    @vite('../resources/css/app.css')
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
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
                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="row mb-3">
                                        <!-- <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label> -->

                                        <div class="col-md-6 w-100">
                                            <input id="nik" placeholder="Nik" type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ old('nik') }}" required autocomplete="nik" autofocus>

                                            @error('nik')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <!-- <label for="nik" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label> -->

                                        <div class="col-md-6 w-100">
                                            <input id="name" placeholder="Nama" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <!-- <label for="kecamatan" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> -->

                                        <div class="col-md-6 w-100">
                                            <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <!-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> -->

                                        <div class="col-md-6 w-100">
                                            <input id="no_hp" placeholder="No HP" type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{ old('no_hp') }}" required autocomplete="no_hp">

                                            @error('no_hp')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <!-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> -->

                                        <div class="col-md-6 w-100">
                                            <input id="tanggal_lahir" placeholder="Tanggal Lahir" type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ old('kabupaten') }}" required autocomplete="kabupaten">

                                            @error('tanggal_lahir')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="row mb-3">
                                        <!-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> -->

                                        <div class="col-md-6 w-100">
                                            <select name="pendidikan" class="form-select" aria-label="Default select example" required>
                                                <option disabled selected>Pendidikan</option>
                                                <option value="sd/sederajat">SD/Sederajat</option>
                                                <option value="smp/mts/sederajat">SMP/MTS/Sederajat</option>
                                                <option value="sma/smk/sederajat">SMA/SMK/Sederajat</option>
                                                <option value="s1">S1</option>
                                                <option value="s2">S2</option>
                                                <option value="s3">S3</option>
                                            </select>

                                            @error('pendidikan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <!-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> -->

                                        <div class="col-md-6 w-100">
                                            <select name="kecamatan" class="form-select" aria-label="Default select example" required>
                                                <option disabled selected>Pilih Kecamatan</option>
                                                <option value="sukagumiwang">Sukagumiwang</option>
                                                <option value="bongas">Bongas</option>
                                                <option value="anjatan">Anjatan</option>
                                                <option value="kandanghaur">Kandanghaur</option>
                                                <option value="balongan">Balongan</option>
                                                <option value="lelea">Lelea</option>
                                                <option value="patrol">Patrol</option>
                                                <option value="jatibarang">Jatibarang</option>
                                                <option value="kroya">Kroya</option>
                                            </select>

                                            @error('kecamatan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <!-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> -->

                                        <div class="col-md-6 w-100">
                                            <input id="alamat" placeholder="Desa Blok RT RW" type="selectoption" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('kabupaten') }}" required autocomplete="kabupaten">

                                            @error('alamat')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <!-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> -->

                                        <div class="col-md-6 w-100">
                                            <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <!-- <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label> -->

                                        <div class="col-md-6 w-100">
                                            <input id="password-confirm" placeholder="Konfirmasi Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="row mb-0">
                                        <div class="w-100">
                                            <button type="submit" class="btn btn-primary w-100">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
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