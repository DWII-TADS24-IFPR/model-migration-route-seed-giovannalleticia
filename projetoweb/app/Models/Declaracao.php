<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Declaracao extends Model
{
    use SoftDeletes;

    protected $table = 'declaracoes';
    protected $fillable = ['id', 'hash', 'data', 'aluno_id', 'comprovante_id'];
}
