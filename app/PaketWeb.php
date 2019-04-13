<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaketWeb extends Model
{
    protected $fillable = [
        'nama',
        'harga',
        'freeDomain',
        'freeSubdomain',
        'pages',
        'seo',
        'duration',
        'freeEditPage',
        'troubleshooting',
        'responsive',
        'ftp',
        'slideshow',
        'cms',
        'ssl',
        'login',
        'siteSearch'
    ];

    public function paket()
    {
        return $this->morphMany('App\Paket', 'kodePaket');
    }
}
