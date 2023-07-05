<?php

namespace App\Http\Controllers;
use App\Models\Daftar_keluhan;
use Illuminate\Http\Request;

class keluhanController extends Controller
{
    public function index()
    {
        $title = 'Daftar Keluhan';
        $slug = 'keluhan';
        $dataKeluhan = Daftar_keluhan::all();
        return view('pages.admin2.setting.keluhan.index', compact( 'title','slug', 'dataKeluhan'));
    }

    public function create()
    {
        $title = 'Tambah Daftar Keluhan';
        $slug = 'Tambah Daftar Keluhan';
        $dataKeluhan = Daftar_keluhan::all();
        return view('pages.admin2.setting.keluhan.create',compact('title','slug','dataKeluhan'));
    }

    public function store(Request $request)
    {
        $result = Daftar_keluhan::insert([
            'keluhan' => $request->keluhan,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        if($result){
            return redirect('/keluhan');
        }else{
            return $this->create();
        }
    }

    public function edit($id)
    {
        $title = 'Perbarui Daftar Keluhan';
        $slug = 'keluhan';
        $dataKeluhan = Daftar_keluhan::where('id','=',$id)->first();
        return view('pages.admin2.setting.keluhan.update', compact('title','slug','dataKeluhan'));
    }

    public function update(Request $request, $id)
    {
        $id = $request->id;
        Daftar_keluhan::where('id',$id)
                    ->update([
                        'keluhan' => $request->keluhan
                    ]);
                    return redirect('/keluhan');
    }

    public function destroy($id)
    {
        Daftar_keluhan::where('id',$id)->delete();
        return redirect()->back();
    }
}
