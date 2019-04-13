<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'username',
        'nama',
        'telepon',
        'email'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($pass)
    {
        if (!empty($pass)) {
            $this->attributes['password'] = bcrypt($pass);
        }
    }

    public function proyekWeb()
    {
        return $this->hasMany('App\ProyekWeb');
    }

    public function proyekApp()
    {
        return $this->hasMany('App\ProyekApp');
    }

    public function proyekDesain()
    {
        return $this->hasMany('App\ProyekDesain');
    }

    public function meeting()
    {
        return $this->hasMany('App\MeetUs');
    }
}
