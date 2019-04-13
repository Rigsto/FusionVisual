<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaketApp extends Model
{
    protected $fillable = [
        'nama',
        'harga',
        'pages',
        'duration',
        'publish',
        'play_id',
        'connectivity',
        'freeEditPage',
        'troubleshooting',
        'storage',
        'offline',
        'online',
        'admin',
        'language'
    ];

    public function play()
    {
        return $this->belongsTo('App\Play');
    }

    public function paket()
    {
        return $this->morphMany('App/Paket', 'kodePaket');
    }
}
