<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class userAdminController extends Controller
{
    public function index()
    {
        $title = 'Data User Admin';
        $slug = 'Data User Admin';
        $dataUserAdmin = User::join('puskesmas','users.kecamatan','=','puskesmas.kecamatan')
                        ->where('name', 'like', '%'.'Admin'.'%')
                        ->get();
        return view('pages.admin2.setting.userAdmin.index',compact('title','slug','dataUserAdmin'));
    }

    public function create()
    {
        $title = 'Tambah Data Admin';
        $slug = 'Tambah Admin';
        $dataUserAdmin = User::all();
        return view('pages.admin2.setting.userAdmin.create',compact('title','slug','dataUserAdmin'));
    }

    public function store(Request $request)
    {
        $result = User::insert([
            'name' => $request->name,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'nama' => $request->nama,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        if($result){
            return redirect('/userAdmin');
        }else{
            return $this->create();
        }
    }

    public function edit($id)
    {
        $title = 'Perbarui Daftar Admin';
        $slug = 'User Admin';
        $dataUserAdmin = User::where('id','=',$id)->first();
        return view('pages.admin2.setting.userAdmin.update', compact('title','slug','dataUserAdmin'));
    }

    public function update(Request $request, $id)
    {
        $id = $request->id;
        User::where('id',$id)
                    ->update([
                        'name' => $request->name,
                        'no_hp' => $request->no_hp,
                        'email' => $request->email,
                        'nama' => $request->nama
                    ]);
                    return redirect('/userAdmin');
    }

    public function destroy($id)
    {
        User::where('id',$id)->delete();
        return redirect()->back();
    }
}

