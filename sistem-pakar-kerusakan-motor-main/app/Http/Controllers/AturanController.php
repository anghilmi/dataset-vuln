<?php

namespace App\Http\Controllers;

use App\Models\Aturan;
use App\Models\Gejala;
use App\Models\Kerusakan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class AturanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aturan = DB::select("SELECT kerusakans.id,kerusakan_code,kerusakan_name,
            GROUP_CONCAT('[',gejala_code, ']', gejala_name SEPARATOR '<br>') AS gejala_name_group
            FROM kerusakans
            LEFT JOIN aturans ON kerusakans.id=aturans.aturan_kerusakan_id
            LEFT JOIN gejalas ON gejalas.id=aturans.aturan_gejala_id
        GROUP BY kerusakans.id,kerusakan_code,kerusakan_name ");
        return view('aturan.index', compact('aturan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aturan  $aturan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kerusakan = Kerusakan::find($id);
        $gejala = Gejala::all();
        $collection = new Collection;
        foreach ($gejala as $key => $value) {
            $getnew = Aturan::where(['aturan_gejala_id' => $value['id'], 'aturan_kerusakan_id' => $id])
                ->first();
            if (!isset($getnew)) :
                $collection->push((object)[
                    'gejala_pilih' => "",
                    'gejala_code' => $value->gejala_code,
                    'gejala_name' => $value->gejala_name,
                    'id' => $value->id,
                ]);
            else :
                $collection->push((object)[
                    'gejala_pilih' => "checked",
                    'gejala_code' => $value->gejala_code,
                    'gejala_name' => $value->gejala_name,
                    'id' => $value->id,
                ]);
            endif;
        }

        $gejala = $collection;
        return view('aturan.edit', compact('kerusakan', 'gejala'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aturan  $aturan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //Hapus Dulu Sesuai Kerusakan
        Aturan::where('aturan_kerusakan_id', $id)->delete();
        $data = array();
        foreach ($request->gejala_pilih as $key => $value) {
            $datasingle = [
                'aturan_kerusakan_id' => $id,
                'aturan_gejala_id' => $key,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
            array_push($data, $datasingle);
        }

        Aturan::insert($data); // Eloquent approach
        return to_route('aturan.index')->with('Success.', 'Data Aturan Berhasil Diubah ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aturan  $aturan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Aturan::where('aturan_kerusakan_id', $id)->delete();
        return back()->with('Success', 'Berhasil Hapus Data');
    }
}
