<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sukucadang extends Model
{
    protected $primaryKey = 'id_sukucadang';
    protected $fillable = ['nomor_sukucadang', 'nama_sukucadang', 'id_kategori_sukucadang', 'stok'];

    public function kategorisukucadang()
    {
        return $this->belongsTo('App\KategoriSukucadang', 'id_kategori_sukucadang');
    }

    public function perbaikan()
    {
        return $this->hasMany('App\Perbaikan', 'pemakaian_sukucadangs', 'id_sukucadang', 'id_perbaikan');
    }
}
