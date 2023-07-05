<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kandidat extends Model
{
	public $table = "kandidat";
	
    protected $fillable = [
        'kode','nama_ketua','tentang_ketua','foto_ketua','nama_wakil','tentang_wakil','foto_wakil','visi','misi'
    ];

    public function pemilih()
    {
        return $this->belongsToMany('App\Pemilih');
    }
}
