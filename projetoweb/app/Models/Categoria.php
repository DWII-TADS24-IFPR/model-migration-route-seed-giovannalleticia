<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use SoftDeletes;
    protected $table = 'categorias';
    protected $fillable = ['id', 'nome', 'maximo_horas', 'curso_id'];
}
