<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'nama', 'telepon', 'alamat', 'gender', 'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function pembayaran()
    {
        return $this->hasMany('App\Pembayaran');
    }

    public function setPasswordAttribute($pass)
    {
        if (!empty($pass)) {
            $this->attributes['password'] = bcrypt($pass);
        }
    }

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

//    admin
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

//    cek role
    public function isAdmin(){
        if ($this->role->nama == 'administrator'){
            return true;
        }
        return false;
    }

    public function isUser(){
        if ($this->role->nama == 'user'){
            return true;
        }
        return false;
    }
}
