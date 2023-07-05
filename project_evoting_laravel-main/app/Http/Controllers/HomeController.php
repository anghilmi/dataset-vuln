<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hash;
use Auth;
use File;

use Session;

use App\User;
use App\Kandidat;
use App\Pemilih;
use App\Voting;

class HomeController extends Controller
{

    public function index()
    {
        return view('home');
    }

    public function quickcount()
    {
        $kandidat = Kandidat::all();
        return view('quickcount', ['kandidat' => $kandidat]);
    }

    public function kandidat()
    {
        $kandidat = Kandidat::all();
        return view('kandidat', ['kandidat' => $kandidat]);
    }

    public function kandidat_detail($id)
    {
        $kandidat = Kandidat::find($id);
        return view('kandidat_detail', ['kandidat' => $kandidat]);
    }

    public function voting()
    {

        if(!Session::get('login')){
            // jika belum login
            // return view('login_siswa');
            return redirect(route('depan.login.siswa'))->with('alert','Silahkan login terlebih dahulu untuk melakukan voting');
        }else{
            // jika sudah login
            // cek jika sudah voting
            $id_pemilih = Session::get('id');
            $cek = Voting::where('pemilih_id',$id_pemilih);
            if($cek->count() > 0){
                return view('voting_sudah');
            }else{
                $kandidat = Kandidat::all();
                return view('voting', ['kandidat' => $kandidat]);
            }
        }

    }

    public function voting_aksi(Request $request)
    {
        $kandidat_id = $request->kandidat;
        $pemilih_id = Session::get('id');

        Voting::create([
            'kandidat_id' => $kandidat_id,
            'pemilih_id' => $pemilih_id
        ]);

        return redirect()->back()->with('alert','Login gagal!');
    }




    public function login_siswa()
    {
        return view('login_siswa');
    }

    public function login_siswa_aksi(Request $request){

        $nis = $request->nis;
        $password = $request->password;

        $data = Pemilih::where('nis',$nis)->first();

        if($data){
            if(Hash::check($password,$data->password)){
                Session::put('id',$data->id);
                Session::put('nama',$data->nama);
                Session::put('nis',$data->nis);
                Session::put('login',TRUE);
                return redirect(route('depan.voting'));
            }else{
                return redirect(route('depan.login.siswa'))->with('alert','Login gagal!');
            }
        }
        else{
            return redirect(route('depan.login.siswa'))->with('alert','Login gagal!');
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect(route('depan.login.siswa'))->with('alert','Kamu sudah logout');
    }
    
    public function arahan()
    {
        return view('arahan');
    }

}