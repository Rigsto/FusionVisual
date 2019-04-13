<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $fillable = [
        'namaBank',
        'nomorRekening',
        'atasNama'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
