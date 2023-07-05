<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Kerusakan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth')->except('hello');
        $this->middleware('auth', ['except' => ['diagnosa', 'hasil', 'detail']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }

    public function diagnosa()
    {
        $gejala = Gejala::all();
        return view('front.diagnosa', compact('gejala'));
    }

    public function detail($id)
    {
        return view('front.detail')->with([
            'kerusakan' => Kerusakan::find($id),
        ]);
    }

    public function hasil(Request $request)
    {
        $MINIMUM_PRESENTASE = 67;
        $LIMIT_SHOW = 12;

        $stringgejala = "";
        foreach ($request->gejala_pilih as $key => $value) {
            if ($stringgejala == '') :
                $stringgejala .= "$key";
            else :
                $stringgejala .= ",$key";
            endif;
        }

        //get Gejala Dipilih
        $gejala = DB::select("SELECT * FROM gejalas WHERE id IN ($stringgejala)");

        //Get Forward Chaining From QUERY
        $hasil = DB::select("SELECT kerusakans.id,kerusakan_code,kerusakan_name,kerusakan_penyebab,kerusakan_perbaikan,
                            COUNT(aturans.aturan_kerusakan_id) AS jum_aturan_terpenihi,
                            (SELECT COUNT(*) FROM aturans atrs WHERE atrs.aturan_kerusakan_id=kerusakans.id) AS jum_aturan,
                            (COUNT(aturans.aturan_kerusakan_id) /(SELECT COUNT(*) FROM aturans atrs WHERE atrs.aturan_kerusakan_id=kerusakans.id))*100
                            AS presentase
                            FROM kerusakans
                                LEFT JOIN aturans ON aturans.aturan_kerusakan_id=kerusakans.id
                            WHERE aturan_gejala_id IN ($stringgejala)
                                GROUP BY kerusakans.id,kerusakan_code,kerusakan_name,kerusakan_penyebab,kerusakan_perbaikan
                            HAVING
                            (
                                COUNT(aturans.aturan_kerusakan_id)
                                /
                                (SELECT COUNT(*) FROM aturans atrs WHERE atrs.aturan_kerusakan_id=kerusakans.id)
                                *
                                100
                            )>$MINIMUM_PRESENTASE
                            ORDER BY
                                (
                                    COUNT(aturans.aturan_kerusakan_id)
                                    /
                                    (SELECT COUNT(*) FROM aturans atrs WHERE atrs.aturan_kerusakan_id=kerusakans.id)
                                    *
                                    100
                                )DESC
                            limit $LIMIT_SHOW");

        return view('front.hasil', compact('hasil', 'gejala'));
    }
}
