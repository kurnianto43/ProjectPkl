<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perbaikan extends Model
{
    protected $primaryKey = 'id_perbaikan';

    protected $fillable = ['nomor_dokumen', 'id_teknisi', 'id_kulkas', 'id_tipe_pekerjaan', 'temuan_masalah', 'id_sukucadang', 'jumlah_sukucadang', 'tanggal_perbaikan'];

    public function setTemuanmasalahAttribute($temuan_masalah)
    {
        $this->attributes['temuan_masalah'] = json_encode($temuan_masalah);
    }


    public function kulkas()
    {
        return $this->hasOne('App\Kulkas', 'id_kulkas');
    }


    public function teknisi()
    {
        return $this->hasOne('App\Teknisi', 'id_teknisi');
    }

    public function tipepekerjaan()
    {
        return $this->hasOne('App\TipePekerjaan', 'id_tipe_pekerjaan');
    }

   
    public function sukucadang()
    {
        return $this->hasMany('App\Sukucadang', 'id_sukucadang');
    }
}
