<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipePekerjaan extends Model
{
    protected $primaryKey = 'id_tipe_pekerjaan';

    protected $fillable = ['kode_tipe_pekerjaan', 'keterangan_tipe_pekerjaan', 'tarif'];

    public function perbaikan()
    {
        return $this->hasMany('App\Perbaikan', 'id_perbaikan');
    }
}
