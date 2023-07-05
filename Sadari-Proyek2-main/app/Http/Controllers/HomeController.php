<?php

namespace App\Http\Controllers;

use App\Models\Daftar_keluhan;
use App\Models\ResultKeluhan;
use App\Models\ResultQuisioner;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $state = '';
        $cs = '';
        $currentHasil = '';
        return view('home', compact('state', 'currentHasil', 'cs'))->with([
            'result_quisioner' => ResultQuisioner::orderBy("id", "desc")->get(),
            'result_keluhan' => ResultKeluhan::orderBy("created_at", "desc")->get(),
            'daftar_keluhan' => Daftar_keluhan::all()
        ]);
    }
}
