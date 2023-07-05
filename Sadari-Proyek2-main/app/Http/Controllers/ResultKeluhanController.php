<?php

namespace App\Http\Controllers;

use App\Models\Daftar_keluhan;
use App\Models\ResultKeluhan;
use Illuminate\Http\Request;

class ResultKeluhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return to_route('resultquisioner.index')->with('success', 'data berhasil ditambah');
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


        if ($request->a1 != "") {
            $keluhan = new ResultKeluhan();
            $keluhan->keluhan = $request->a1;
            $keluhan->user_id = (int)$request->user_id;
            $keluhan->save();
        }
        if ($request->a2 != "") {
            $keluhan = new ResultKeluhan();
            $keluhan->keluhan = $request->a2;
            $keluhan->user_id = (int)$request->user_id;
            $keluhan->save();
        }
        if ($request->a3 != "") {
            $keluhan = new ResultKeluhan();
            $keluhan->keluhan = $request->a3;
            $keluhan->user_id = (int)$request->user_id;
            $keluhan->save();
        }
        if ($request->a4 != "") {
            $keluhan = new ResultKeluhan();
            $keluhan->keluhan = $request->a4;
            $keluhan->user_id = (int)$request->user_id;
            $keluhan->save();
        }
        if ($request->a5 != "") {
            $keluhan = new ResultKeluhan();
            $keluhan->keluhan = $request->a5;
            $keluhan->user_id = (int)$request->user_id;
            $keluhan->save();
        }
        if ($request->a6 != "") {
            $keluhan = new ResultKeluhan();
            $keluhan->keluhan = $request->a6;
            $keluhan->user_id = (int)$request->user_id;
            $keluhan->save();
        }
        if ($request->a7 != "") {
            $keluhan = new ResultKeluhan();
            $keluhan->keluhan = $request->a7;
            $keluhan->user_id = (int)$request->user_id;
            $keluhan->save();
        }
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     
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
