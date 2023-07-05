<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Puskesmas;
use Illuminate\Http\Request;
use App\Models\ModelHasRoles;

use App\Models\ResultKeluhan;
use App\Http\Controllers\Auth;
use App\Models\ResultQuisioner;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!\Auth::user()->can('read_puskesmas')) {
            abort('403', 'Hak Akses tidak Diijinkan');
        }

        $total_puskesmas = 0;
        $total_pengguna = 0;
        $total_admin = 0;
        $slug = 'home';
        $title = 'Home';
        $jumlahUser = User::whereNot('name', 'like', '%'.'Admin'.'%')->count();
        $jumlahSADARI = ResultQuisioner::all()->count();
        $jumlahTertangani = ResultKeluhan::where('result_keluhan.status', '=', 'tertangani')->get()->count();
        $jumlahBelumTertangani = ResultKeluhan::where('result_keluhan.status', '=', 'belum')->get()->count();
        $dataKuis = ResultQuisioner::join('users','result_quisioner.user_id','=','users.id')
                                ->join('result_keluhan', 'result_keluhan.user_id','=','users.id' )
                                ->where('result_keluhan.status', '=', 'belum')
                                ->whereNot('name', 'like', '%'.'Admin'.'%')->get();

        return view('pages.admin/home', compact('total_puskesmas', 'total_pengguna', 'total_admin', 'slug', 'title', 'dataKuis','jumlahUser', 'jumlahSADARI', 'jumlahTertangani', 'jumlahBelumTertangani'))->with([
            'daftar_puskesmas' => Puskesmas::all(),
            'daftar_admin' => ModelHasRoles::all(),
            'daftar_pengguna' => User::all()
        ]);
    }

    public function index1()
    {
        if (!\Auth::user()->can('read_puskesmas')) {
            abort('403', 'Hak Akses tidak Diijinkan');
        }

        $total_puskesmas = 0;
        $total_pengguna = 0;
        $total_admin = 0;
        $slug = 'super admin';
        $title = 'Super Admin';
        $jumlahUser = User::whereNot('name', 'like', '%'.'Admin'.'%')->count();
        $jumlahSADARI = ResultQuisioner::all()->count();
        $jumlahTertangani = ResultKeluhan::where('result_keluhan.status', '=', 'tertangani')->get()->count();
        $jumlahBelumTertangani = ResultKeluhan::where('result_keluhan.status', '=', 'belum')->get()->count();
        $dataKuis = ResultQuisioner::join('users','result_quisioner.user_id','=','users.id')
                                ->join('result_keluhan', 'result_keluhan.user_id','=','users.id' )
                                ->where('result_keluhan.status', '=', 'belum')
                                ->whereNot('name', 'like', '%'.'Admin'.'%')->get();

        return view('pages.admin2.dashboard', compact('total_puskesmas', 'total_pengguna', 'total_admin', 'slug', 'title', 'dataKuis','jumlahUser', 'jumlahSADARI', 'jumlahTertangani', 'jumlahBelumTertangani'))->with([
            'daftar_puskesmas' => Puskesmas::all(),
            'daftar_admin' => ModelHasRoles::all(),
            'daftar_pengguna' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = ResultKeluhan::where('user_id', $id)->first();

        $statustindakan = $data->status;

        if ($statustindakan == 'belum'){
            ResultKeluhan::join('users','result_keluhan.user_id','=','users.id')
                                ->where('user_id', $id)->update(['status' => 'tertangani']);
            return redirect('/admin');
        }else{
            ResultKeluhan::join('users','result_keluhan.user_id','=','users.id')
                                ->where('user_id', $id)->update(['status' => 'belum']);
            return redirect('/admin');
        }
        return view('pages.admin/home', compact('total_puskesmas', 'total_pengguna', 'total_admin', 'slug', 'title'));
    }

    public function update1(Request $request, $id)
    {
        $data = ResultKeluhan::where('user_id', $id)->first();

        $statustindakan = $data->status;

        if ($statustindakan == 'belum'){
            ResultKeluhan::join('users','result_keluhan.user_id','=','users.id')
                                ->where('user_id', $id)->update(['status' => 'tertangani']);
            return redirect('/superAdmin');
        }else{
            ResultKeluhan::join('users','result_keluhan.user_id','=','users.id')
                                ->where('user_id', $id)->update(['status' => 'belum']);
            return redirect('/superAdmin');
        }
        return view('pages.admin2/dashboard', compact('total_puskesmas', 'total_pengguna', 'total_admin', 'slug', 'title'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
