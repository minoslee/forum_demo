<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminUser extends Authenticatable
{
    //
    protected $table = 'admin_users';
    protected $fillable = ['name','password'];
}
