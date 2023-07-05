<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemilih extends Model
{
    public $table = "pemilih";

    protected $fillable = [
        'nama','nis','jk','umur','alamat','password'
    ];

    public function kandidat()
    {
        return $this->belongsToMany('App\Kandidat');
    }
}
