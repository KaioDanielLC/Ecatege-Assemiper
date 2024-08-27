<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa_filial extends Model
{
    use HasFactory;
    
    protected $fillable =[
        '',
        'nome_empresa',
        'nome_dono',
        'endereco',
        'telefone',
        'celular',
        'whatapp',
        'email',
    ];
}
