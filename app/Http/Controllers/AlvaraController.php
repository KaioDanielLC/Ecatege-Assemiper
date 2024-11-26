<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\VerificacaoEmpresa;
use Carbon\Carbon;

class AlvaraController extends Controller { 

    public function index(Request $request)
    {

        $hoje = Carbon::today(); 
        $dataLimite = $hoje->copy()->addMonth(1); 
        
        // Captura o termo de pesquisa da requisição
        $search = $request->input('search');

        // Consulta ao banco de dados com a pesquisa
        $verificacao_empresas = VerificacaoEmpresa::when($search, function ($query, $search) {
            return $query->where('nome_fantasia', 'like', "%{$search}%");
        })
        ->orderBy('data_validade', 'asc')
        ->get();

        return view('pages.alvara.list', [
            'verificacaoempresa' => $verificacao_empresas,
            'today' => $hoje
        ]);
}
}
