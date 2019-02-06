<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisMasalah extends Model
{
    protected $primaryKey = 'id_jenis_masalah';

    protected $fillable = ['kode_masalah', 'keterangan_masalah'];


     public function perbaikan()
    {
        return $this->hasMany('App\Perbaikan', 'id_perbaikan');
    }
}
