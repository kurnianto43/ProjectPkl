<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kondisi extends Model
{
     protected $primaryKey = 'id_kondisi';
     protected $fillable = ['nama_kondisi', 'keterangan_kondisi'];

    public function kulkas()
    {
        return $this->hasMany('App\Kulkas', 'id_kulkas');
    }
}
