<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perbaikan extends Model
{
    protected $primaryKey = 'id_perbaikan';
    protected $guarded = [];


    public function teknisi()
    {
        return $this->belongsTo('App\Teknisi', 'id_teknisi');
    }

    public function kulkas()
    {
        return $this->belongsTo('App\Kulkas', 'id_kulkas');   
    }

    public function tipepekerjaan()
    {
        return $this->belongsTo('App\TipePekerjaan', 'id_tipe_pekerjaan');
    }

    public function jenismasalah()
    {
        return $this->belongsTo('App\JenisMasalah', 'id_jenis_masalah');
    }   

    public function sukucadang()
    {
        return $this->belongsTo('App\Sukucadang', 'id_sukucadang');
    }

    public function tagihan()
    {
        return $this->belongsTo('App\Tagihan', 'id_tagihan');
    }    
}
