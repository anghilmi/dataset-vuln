<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\formulir;

class FormulirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Formulir';
        $slug = 'formulir';
        $dataFormulir = formulir::all();
        return view('form.create', compact('title', 'slug', 'dataFormulir'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file_name = $request->image->getClientOriginalName();
        $request->image->storeAs('public/imagedp', $file_name );
        $images = $file_name;

        $result = formulir::insert([
            'id' => $request->id,
            'nama_penyewa' => $request->nama_penyewa,
            'no_hp' => $no_hp,
            'email' => $request->keterangan,
            'bookuntuk' => $request->bookuntuk,
            'jam' => $request->jam,
            'dp' => $request->images,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        if($result){
            return redirect('/postpaket');
        }else{
            return $this->create();
        }
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
