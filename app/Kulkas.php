<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kulkas extends Model
{
    protected $primaryKey = 'id_kulkas';

    protected $fillable = ['nomor_asset', 'nomor_seri', 'tanggal_masuk', 'id_tipe', 'id_kondisi',];

    public function tipe()
    {
        return $this->belongsTo('App\Tipe', 'id_tipe');
    }

    public function kondisi()
    {
        return $this->belongsTo('App\Kondisi', 'id_kondisi');
    }
}
