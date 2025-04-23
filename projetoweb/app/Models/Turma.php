<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    use SoftDeletes;

    protected $table = 'turmas';
    protected $fillable = ['id', 'curso_id', 'ano'];
}
