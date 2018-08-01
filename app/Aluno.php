<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = 'alunos';

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $fillable = [
        'nome'
    ];
}
