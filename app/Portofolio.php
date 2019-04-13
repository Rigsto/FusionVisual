<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    protected $fillable = [
        'nama',
        'photo_id',
        'status',
    ];

    public function photo()
    {
        return $this->morphMany('App\Photo', 'photoable');
    }

    public function admin()
    {
        return $this->belongsTo('App\Admin');
    }
}
