<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaketDesain extends Model
{
    protected $fillable = [
        'category',
        'tipe',
        'harga',
        'tambahanHarga',
        'durasi',
        'revisi'
    ];

    public function paket()
    {
        return $this->morphMany('App/Paket', 'kodePaket');
    }
}
