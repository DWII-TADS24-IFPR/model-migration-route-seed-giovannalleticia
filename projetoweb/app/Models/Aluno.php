<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use SoftDeletes;
    protected $table = 'alunos';
    protected $fillable = ['id', 'nome', 'cpf', 'email', 'senha', 'user_id', 'curso_id', 'turma_id'];
}
