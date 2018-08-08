<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Signo extends Model
{
    protected $fillable = [
        'nome','signo', 
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
