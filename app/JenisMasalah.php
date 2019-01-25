<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisMasalah extends Model
{
    protected $primaryKey = 'id_jenis_masalah';

    protected $fillable = ['kode_jenis_masalah', 'keterangan_jenis_masalah'];
}
