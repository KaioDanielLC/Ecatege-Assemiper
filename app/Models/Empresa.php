<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable =[
        'nome_empresa',
        'nome_dono',
        'endereco',
        'telefone',
        'celular',
        'whatsapp',
        'email',
    ];
    public function filiais()
    {
        return $this->hasMany(Empresa_Filial::class, 'empresa_id');
    }
    
}
