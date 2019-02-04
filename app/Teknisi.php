<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teknisi extends Model
{
    protected $primaryKey = 'id_teknisi';

    protected $fillable =['kode_teknisi', 'nama_teknisi', 'alamat_teknisi', 'nomor_hp'];
    

    public function perbaikan()
    {
        return $this->hasMany('App\Perbaikan', 'id_perbaikan');
    }
}
