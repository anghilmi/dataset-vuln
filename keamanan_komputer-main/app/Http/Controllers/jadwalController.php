<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jadwal;

class jadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Jadwal';
        $slug = 'jadwal';
        $dataJadwal = jadwal::all();
        return view('jadwal.index', compact('title','slug','dataJadwal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Tambah Jadwal';
        $slug = 'jadwal';
        $dataJadwal = jadwal::all();
        return view('jadwal.create', compact('title','slug','dataJadwal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = jadwal::insert([
            'nama_pembooking' => $request->nama_pembooking,
            'no_hp' => $request->no_hp,
            'bookinguntuk' =>$request->bookinguntuk,
            'jam' => $request->jam,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        if($result){
            return redirect('/jadwal');
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
        $title = 'Perbarui Jadwal';
        $slug = 'jadwal';
        $dataJadwal = jadwal::where('id', '=', $id)
        ->first();
        return view('jadwal.update',compact('title','slug','dataJadwal'));
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
        $id = $request->id;
        jadwal::where('id', $id)
                    ->update([
                        'nama_pembooking' => $request->nama_pembooking,
                        'no_hp' => $request->no_hp,
                        'bookinguntuk' => $request->bookinguntuk,
                        'jam' => $request->jam,
                    ]);
        return redirect('/jadwal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        jadwal::where('id', $id)
                ->delete();
        return redirect('/jadwal');
    }
}
