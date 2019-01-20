<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $primaryKey = "id_karyawan";

    protected $fillable = ['nik_karyawan', 'nama_karyawan', 'jabatan', 'alamat', 'no_hp', 'foto_karyawan'];


    public function teknisi()
    {
        return $this->hasOne('App\Teknisi', 'id_teknisi');
    }
}
