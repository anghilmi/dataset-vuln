<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    public function index()
    {
        // $akun = Akun::all();
        // dd($akun);
        return view('autentikasi.register');
    }

    public function store(Request $request)
    {
        // dd($request);
    $validatedData = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email:dns|unique:akuns',
            'password' => 'required|min:8|max:255'
        ]);

        // dd('regis berhasil');

        // return $request->all();

        $validatedData['password'] = Hash::make($validatedData['password']);

        Akun::create($validatedData);

        return redirect('/login/login2')->with('success', 'Registration Succesfull! Please Login ');
    }
}
