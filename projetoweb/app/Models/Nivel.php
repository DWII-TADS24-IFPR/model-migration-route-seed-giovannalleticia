<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    use SoftDeletes;

    protected $table = 'niveis';
    protected $fillable = ['id', 'nome'];
}
