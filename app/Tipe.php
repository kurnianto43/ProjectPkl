<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{
    protected $primaryKey = 'id_tipe';
    protected $fillable = ['nama_tipe', 'keterangan'];

    public function kulkas()
    {
        return $this->hasMany('App\Kulkas', 'id_kulkas');
    }
}
