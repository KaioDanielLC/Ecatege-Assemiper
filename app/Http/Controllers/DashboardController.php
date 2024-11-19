<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\VerificacaoEmpresa;
use Carbon\Carbon;

class DashboardController extends Controller { 
    public function index()
{
    $hoje = Carbon::today(); $dataLimite = $hoje->copy()->addMonth(1); 
    $verificacao_empresas = VerificacaoEmpresa::whereBetween('data_validade', [$hoje, $dataLimite])->orderBy('data_validade', 'asc')->get(); 
    return view('pages.documentacao_empresa.listalvara', [ 'verificacaoempresa' => $verificacao_empresas, 'today' => $hoje ]);
}

}
