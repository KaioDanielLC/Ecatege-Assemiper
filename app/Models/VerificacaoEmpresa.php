<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class VerificacaoEmpresa extends Model
{
    use HasFactory;

    protected $table = 'verificacao_empresas';

    protected $fillable =[
        'ano',
        'nome_fantasia',
        'numero_pasta',
        'area_total',
        'area_utilizada',
        'inscricao_municipal',
        'data_validade',
        'te_prefeitura',
        'tp_prefeitura',
        'arq_prefeitura',
        'ent_prefeitura',
        'te_bombeiro',
        'tp_bombeiro',
        'arq_bombeiro',
        'ent_bombeiro',
        'te_vigilancia',
        'tp_vigilancia',
        'arq_vigilancia',
        'ent_vigilancia',
        'te_funcionamento',
        'tp_funcionamento',
        'arq_funcionamento',
        'ent_funcionamento',
    ];
    protected $dates = ['data_validade'];

    protected $casts = [
        'data_validade' => 'date',
    ];
}
