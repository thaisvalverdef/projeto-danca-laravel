<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Niveis extends Model
{
    protected $table = 'niveis';
    // indicando quais colunas da tabela niveis iremos trabalhar, seja para inserir ou alterar dados
    protected $fillable = [
        'niveis'
    ];
}
