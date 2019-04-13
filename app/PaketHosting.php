<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaketHosting extends Model
{
    protected $fillable = [
        'nama',
        'harga',
        'duration'
    ];

    public function paket()
    {
        return $this->morphMany('App/Paket', 'kodePaket');
    }
}
