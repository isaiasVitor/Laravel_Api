<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'tb_nomes';

    protected $fillable = [
        'nome','aniversario','pesquisa' 
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
