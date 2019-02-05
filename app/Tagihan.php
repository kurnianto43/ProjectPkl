<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{

    protected $primaryKey = 'id_tagihan';
    protected $guarded = [];

    public function perbaikan()
    {
        return $this->hasMany('App\Perbaikan', 'id_perbaikan');
    }
}
