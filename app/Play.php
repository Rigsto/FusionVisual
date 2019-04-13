<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Play extends Model
{
    protected $fillable = [
        'nama',
        'price',
        'featureGraphics',
        'shortDesc',
        'description',
        'icon',
        'screenshot',
        'country'
    ];
}
