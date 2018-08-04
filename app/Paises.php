<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paises extends Model
{
    protected $table = 'paises';

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $fillable = [
        'nome'
    ];
}
