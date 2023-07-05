<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\PuskesmasDetails;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        PuskesmasDetails::create([
            'status' => 'pasien',
            'user_id' => $this->checkUserNew(),
            'puskesmas_id' => $this->generatePuskesmas($data['kecamatan'])
            
        ]);
        return User::create([
            'nik' => $data['nik'],
            'name' => $data['name'],
            'email' => $data['email'],
            'no_hp' => $data['no_hp'],
            'tanggal_lahir' => $data['tanggal_lahir'],
            'pendidikan' => $data['pendidikan'],
            'kecamatan' => $data['kecamatan'],
            'alamat' => $data['alamat'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function generatePuskesmas($kecamatan)
    {
        if ($kecamatan == 'sukagumiwang'){
            return 1;
        }else if($kecamatan == 'sidamulya'){
            return 2;
        }else if($kecamatan == 'anjatan'){
            return 3;
        }else if($kecamatan == 'balongan'){
            return 4;
        }else if($kecamatan == 'kandanghaur'){
            return 5;
        }else if($kecamatan == 'patrol'){
            return 6;
        }else if($kecamatan == 'lelea'){
            return 7;
        }else if($kecamatan == 'kandanghaur'){
            return 8;
        }else if($kecamatan == 'bongas'){
            return 9;
        }else if($kecamatan == 'gabuswetan'){
            return 10;
        }else if($kecamatan == 'kroya'){
            return 11;
        }else if($kecamatan == 'sliyeg'){
            return 12;
        }else if($kecamatan == 'jatibarang'){
            return 13;
        }
    }

    public function checkUserNew()
    {
        $id_new = User::orderBy("id", "desc")->get();
        return $id_new[0]->id + 1;
    }
}








