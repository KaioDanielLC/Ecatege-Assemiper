<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa_filial extends Model
{
    use HasFactory;
    
    protected $fillable =[
        'empresas_id',
        'nome_empresa',
        'nome_dono',
        'endereco',
        'telefone',
        'celular',
        'whatsapp',
        'email',
    ];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'empresas_id');
    }
}
