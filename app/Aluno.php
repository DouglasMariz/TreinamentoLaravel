<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aluno extends Model
{
    use SoftDeletes;

    protected $table = 'alunos';

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $fillable = [
        'nome',
        'termos',
    ];
}
