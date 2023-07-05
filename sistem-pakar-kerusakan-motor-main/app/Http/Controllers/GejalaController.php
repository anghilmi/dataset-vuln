<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use Illuminate\Http\Request;

class GejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $gejala = Gejala::all(); //paginate(5);
        return view('gejala.index', compact('gejala'));

        // return view('gejala.index')->with([
        //     'gejala' => Gejala::all(),
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gejala.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'gejala_code' => 'required|min:3|',
            'gejala_name' => 'required|min:8|',
        ]);

        $gejala = new Gejala();
        $gejala->gejala_code = $request->gejala_code;
        $gejala->gejala_name = $request->gejala_name;

        $gejala->save();

        return to_route('gejala.index')->with('Success.', 'Data Gejala Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function show(Gejala $gejala)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('gejala.edit')->with([
            'gejala' => Gejala::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'gejala_code' => 'required|min:3|',
            'gejala_name' => 'required|min:8|',
        ]);

        $gejala = Gejala::find($id);
        $gejala->gejala_code = $request->gejala_code;
        $gejala->gejala_name = $request->gejala_name;

        $gejala->save();

        return to_route('gejala.index')->with('Success.', 'Data Gejala Berhasil Diedit ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gejala = Gejala::find($id);
        $gejala->delete();

        return back()->with('Success', 'Berhasil Hapus Data');
    }
}
