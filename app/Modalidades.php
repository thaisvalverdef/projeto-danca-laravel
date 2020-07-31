<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modalidades extends Model
{
    protected $table = 'modalidade';
    // indicando quais colunas da tabela modalidades iremos trabalhar, seja para inserir ou alterar dados
    protected $fillable = [
        'modalidades'
    ];
}
