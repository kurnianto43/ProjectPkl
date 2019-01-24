<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriSukucadang extends Model
{
     protected $primaryKey = 'id_kategori_sukucadang';
     protected $fillable = ['nama_kategori', 'keterangan_kategori'];

    public function sukucadang()
    {
        return $this->hasMany('App\SukuCadang', 'id_sukucadang');
    }
}
