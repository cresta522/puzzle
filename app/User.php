<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'token',
        'tokenSecret',
        'twitter_id',
        'nickname',
        'name',
        'email',
        'avatar',
        'avatar_original',
        'login_key',
    ];
}
