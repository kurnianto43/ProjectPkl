<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teknisi extends Model
{
    protected $primaryKey = 'id_teknisi';

    protected $fillable =['kode_teknisi', 'id_karyawan'];

    public function karyawan()
    {
        return $this->belongsTo('App\Karyawan', 'id_karyawan');
    }
}
