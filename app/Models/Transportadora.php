<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transportadora extends Model
{
    protected $fillable = [
        'id', 'razao_social', 'nome_fantasia', 'cnpj', 'logradouro',
        'complemento', 'numero', 'bairro', 'telefone',
        'celular', 'email', 'uf', 'cep', 'ibge', 'cidade'
    ];
}
