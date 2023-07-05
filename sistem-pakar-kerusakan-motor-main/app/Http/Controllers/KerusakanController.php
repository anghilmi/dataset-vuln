<?php

namespace App\Http\Controllers;

use App\Models\Kerusakan;
use Illuminate\Http\Request;

class KerusakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kerusakan = Kerusakan::all();
        return view('kerusakan.index', compact('kerusakan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kerusakan.create');
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
            'kerusakan_code' => 'required|min:3|',
            'kerusakan_name' => 'required|min:8|',
            'kerusakan_penyebab' => 'required|min:10|',
            'kerusakan_perbaikan' => 'required|min:10|',
        ]);

        $kerusakan = new Kerusakan();
        $kerusakan->kerusakan_code = $request->kerusakan_code;
        $kerusakan->kerusakan_name = $request->kerusakan_name;
        $kerusakan->kerusakan_penyebab = $request->kerusakan_penyebab;
        $kerusakan->kerusakan_perbaikan = $request->kerusakan_perbaikan;

        $kerusakan->save();

        return to_route('kerusakan.index')->with('Success.', 'Data Kerusakan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kerusakan  $kerusakan
     * @return \Illuminate\Http\Response
     */
    public function show(Kerusakan $kerusakan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kerusakan  $kerusakan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('kerusakan.edit')->with([
            'kerusakan' => Kerusakan::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kerusakan  $kerusakan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kerusakan_code' => 'required|min:3|',
            'kerusakan_name' => 'required|min:8|',
            'kerusakan_penyebab' => 'required|min:10|',
            'kerusakan_perbaikan' => 'required|min:10|',
        ]);

        $kerusakan = Kerusakan::find($id);
        $kerusakan->kerusakan_code = $request->kerusakan_code;
        $kerusakan->kerusakan_name = $request->kerusakan_name;
        $kerusakan->kerusakan_penyebab = $request->kerusakan_penyebab;
        $kerusakan->kerusakan_perbaikan = $request->kerusakan_perbaikan;


        $kerusakan->save();

        return to_route('kerusakan.index')->with('Success.', 'Data Kerusakan Berhasil Diedit ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kerusakan  $kerusakan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kerusakan = Kerusakan::find($id);
        $kerusakan->delete();
        return back()->with('Success', 'Berhasil Hapus Data');
    }
}
