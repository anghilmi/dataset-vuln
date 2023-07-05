<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResultQuisioner;

class sudahditanganiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Sudah Tertangani';
        $slug = 'sudahditangani';
        $dataKuis = ResultQuisioner::leftjoin('users','result_quisioner.user_id','=','users.id')
                                ->leftjoin('result_keluhan', 'result_keluhan.user_id','=','users.id' )
                                ->where('result_keluhan.status', '=', 'tertangani')->get();
        return view('pages.admin.sudahditangani.index', compact( 'title','slug', 'dataKuis'));
    }

    public function index1()
    {
        $title = 'Sudah Tertangani';
        $slug = 'sudahditangani';
        $dataKuis = ResultQuisioner::leftjoin('users','result_quisioner.user_id','=','users.id')
                                ->leftjoin('result_keluhan', 'result_keluhan.user_id','=','users.id' )
                                ->where('result_keluhan.status', '=', 'tertangani')->get();

        return view('pages.admin2.sudahDitangani.index', compact( 'title','slug', 'dataKuis'));
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
