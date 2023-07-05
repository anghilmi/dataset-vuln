<?php

namespace App\Http\Controllers;
use App\Models\Quisioners;
use Illuminate\Http\Request;

class quisionersController extends Controller
{
    public function index()
    {
        $title = 'Daftar Pertanyaan';
        $slug = 'quisioners';
        $dataQuiz = quisioners::all();
        return view('pages.admin2.setting.kuisioner.index', compact( 'title','slug', 'dataQuiz'));
    }

    public function create()
    {
        $title = 'Tambah Data Quisioner';
        $slug = 'Tambah Quisioner';
        $dataQuiz = Quisioners::all();
        return view('pages.admin2.setting.kuisioner.create',compact('title','slug','dataQuiz'));
    }

    public function store(Request $request)
    {
        $result = Quisioners::insert([
            'pertanyaan' => $request->pertanyaan,
            'opsi1' => $request->opsi1,
            'opsi2' => $request->opsi2,
            'opsi3' => $request->opsi3,
            'opsi4' => $request->opsi4,
            'tags' => $request->tags,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        if($result){
            return redirect('/quisioners');
        }else{
            return $this->create();
        }
    }

    public function edit($id)
    {
        $title = 'Perbarui Daftar Pertanyaan';
        $slug = 'quisioners';
        $dataQuiz = Quisioners::where('id','=',$id)->first();
        return view('pages.admin2.setting.kuisioner.update', compact('title','slug','dataQuiz'));
    }

    public function update(Request $request, $id)
    {
        $id = $request->id;
        Quisioners::where('id',$id)
                    ->update([
                        'pertanyaan' => $request->pertanyaan,
                        'opsi1' => $request->opsi1,
                        'opsi2' => $request->opsi2,
                        'opsi3' => $request->opsi3,
                        'opsi4' => $request->opsi4,
                        'tags' => $request->tags
                    ]);
                    return redirect('/quisioners');
    }

    public function destroy($id)
    {
        quisioners::where('id',$id)->delete();
        return redirect()->back();
    }
}
