<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;
use App\Models\Daftar_keluhan;
use App\Models\ResultQuisioner;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Laporan SADARI';
        $slug = 'laporan';
        $pieces ='';
        $nilai = 0;
        $dataKuis = ResultQuisioner::leftjoin('users','result_quisioner.user_id','=','users.id')
                                ->leftjoin('result_keluhan', 'result_keluhan.user_id','=','users.id' )->get();
        // $dataKuis = password::join('users','quisioner_results.user_id','=','users.id')->get();
        return view('pages.admin.laporan.index', compact( 'title','slug','pieces','nilai', 'dataKuis'))->with([
            'daftar_keluhan' => Daftar_keluhan::all(),
            'laporan' => Laporan::all()
        ]);
    }

    public function index1()
    {
        $title = 'Laporan SADARI';
        $slug = 'laporan';
        $pieces ='';
        $nilai = 0;
        $dataKuis = ResultQuisioner::leftjoin('users','result_quisioner.user_id','=','users.id')
                                ->leftjoin('result_keluhan', 'result_keluhan.user_id','=','users.id' )->get();
        // $dataKuis = password::join('users','quisioner_results.user_id','=','users.id')->get();
        return view('pages.admin2.laporanSadari.index', compact( 'title','slug','pieces','nilai', 'dataKuis'))->with([
            'daftar_keluhan' => Daftar_keluhan::all(),
            'laporan' => Laporan::all()
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
        //
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
