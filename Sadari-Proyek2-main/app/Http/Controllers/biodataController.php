<?php

namespace App\Http\Controllers;

use App\Models\PuskesmasDetails;
use App\Models\User;
use Illuminate\Http\Request;

class biodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Biodata';
        $slug = 'biodata';
        $knowUnser =0;
        $knowPuskesmasId =-1;
        $dataUser = User::all();
        $dataPuskesmas = PuskesmasDetails::all();
        return view('pages.admin.biodata.index', compact('title', 'slug', 'dataUser', 'dataPuskesmas','knowUnser','knowPuskesmasId'));
        // return view('pages.admin2.biodata.index', compact('title', 'slug', 'dataUser', 'dataPuskesmas','knowUnser','knowPuskesmasId'));
    }

    public function index1()
    {
        $title = 'Biodata';
        $slug = 'biodata';
        $knowUnser =0;
        $knowPuskesmasId =-1;
        $dataUser = User::whereNot('name', 'like', '%'.'Admin'.'%')->get();;
        $dataPuskesmas = PuskesmasDetails::all();
        return view('pages.admin2.biodata.index', compact('title', 'slug', 'dataUser', 'dataPuskesmas','knowUnser','knowPuskesmasId'));
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
