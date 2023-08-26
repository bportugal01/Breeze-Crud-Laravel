<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;
    protected $table = 'servico';
    protected $fillable = [
        'Nome',
        'Telefone',
        'Endereco',
        'Bairro',
        'Cep',
        'Cidade',
        'Estado',
    ];
}
