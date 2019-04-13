<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    public function tipe()
    {
        return $this->belongsTo('App/Tipe');
    }

    public function kodePaket()
    {
        return $this->morphTo();
    }
}
