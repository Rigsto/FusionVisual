<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MeetUs extends Model
{
    protected $fillable = [
//        'user_id',
        'dateMeet',
        'timeMeet',
        'name',
        'email',
        'methodmeet',
        'phoneOrSkype',
        'placeMeet',
        'topics',
        'notes',
        'admin_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function admin()
    {
        return $this->belongsTo('App\User', 'admin_id', 'id');
    }
}
