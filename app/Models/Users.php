<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model implements AuthenticatableContract
{
    use Authenticatable;
    use HasFactory;

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $table = 'users';

    protected $fillable = ['username','fullname','gender','email','password','no_hp','image'];
}
