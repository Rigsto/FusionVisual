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

    public function tipedesain()
    {
        return $this->belongsTo('App\TipeDesain');
    }

    public function catdesain()
    {
        return $this->belongsTo('App\CatDesain');
    }
}
