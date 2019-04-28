<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string nama
 */
class Role extends Model
{
    protected $fillable = ['nama'];
}
