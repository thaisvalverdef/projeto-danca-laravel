<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Professor extends Model
{
    use SoftDeletes;
    // tabela do banco de dados que será apresentado pelo model Professor
    protected $table = 'professor';
    // indicando quais colunas da tabela professor iremos trabalhar, seja para inserir ou alterar dados dos registros
    protected $fillable = [
        'nome', 'email', 'apresentacao', 'modalidades', 'niveis', 'plataforma', 'imagem', 'senha'
    ];
}
