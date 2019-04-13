<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MeetUs extends Model
{
    protected $fillable = [
        'user_id',
        'dateMeet',
        'timeMeet',
        'placeMeet',
        'notes',
        'admin_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function admin()
    {
        return $this->belongsTo('App\Admin');
    }
}
