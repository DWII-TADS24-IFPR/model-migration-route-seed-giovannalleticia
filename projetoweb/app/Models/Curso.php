<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use SoftDeletes;

    protected $table = 'cursos';
    protected $fillable = ['id', 'nome', 'sigla', 'total_horas', 'nivel_id'];
}
