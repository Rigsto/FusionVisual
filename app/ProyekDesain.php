<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProyekDesain extends Model
{
    protected $fillable = [
        'nama',
        'penjelasan',
        'color_id',
        'link',
        'deadline',
        'admin_id',
        'zipData'
    ];

    public function pesanan()
    {
        return $this->belongsTo('App\Pesanan');
    }

    public function color()
    {
        return $this->belongsTo('App\Color');
    }

    public function admin()
    {
        return $this->belongsTo('App\Admin');
    }
}
