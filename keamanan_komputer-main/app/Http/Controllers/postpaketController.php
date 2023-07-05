<?php

namespace App\Http\Controllers;
use App\Models\postpaket;
use Illuminate\Http\Request;

class postpaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'PostPaket';
        $slug = 'postpaket';
        $dataPostPaket = postpaket::all();
        return view('postpaket.index', compact('title','slug','dataPostPaket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $title = 'Tambah Paket';
        $slug = 'postpaket';
        $dataPostPaket = postpaket::all();
        return view('postpaket.create', compact('title','slug','dataPostPaket'));
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
        $request->image->storeAs('public/imagepaket', $file_name );
        $images = $file_name;

        $result = postpaket::insert([
            'id' => $request->id,
            'nama_paket' => $request->nama_paket,
            'foto_paket' => $images,
            'keterangan' => $request->keterangan,
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
        ;
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        postproduk::where('id', $id)
                ->delete();
        return redirect('/postproduk');
    }
}
