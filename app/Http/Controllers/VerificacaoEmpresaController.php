<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\VerificacaoEmpresa;

class VerificacaoEmpresaController extends Controller
{
    public readonly VerificacaoEmpresa $verificacao_empresa;

    public function __construct()
    {
        $this->verificacao_empresa = new VerificacaoEmpresa();
    }

    public function index()
    {
        $verificacao_empresas = VerificacaoEmpresa::orderBy('nome_fantasia', 'asc')->get();
        return view('pages.documentacao_empresa.list', ['verificacaoempresa' => $verificacao_empresas]);
    }

    public function create()
    {
        return view('pages.documentacao_empresa.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'inscricao_municipal' => 'required|unique:verificacao_empresas',
        ],['inscricao_municipal.unique' => 'Essa inscrição já está sendo usada',
        
        ]);
    
        $created = $this->verificacao_empresa->create([
            'ano' => $request->input('ano'),
            'nome_fantasia' => $request->input('nome_fantasia'),
            'numero_pasta' => $request->input('numero_pasta'),
            'area_total' => $request->input('area_total'),
            'area_utilizada' => $request->input('area_utilizada'),
            'inscricao_municipal' => $request->input('inscricao_municipal'),
            'data_validade' => $request->input('data_validade'),
            'te_prefeitura' => $request->input('te_prefeitura'),
            'tp_prefeitura' => $request->input('tp_prefeitura'),
            'arq_prefeitura' => $request->input('arq_prefeitura'),
            'ent_prefeitura' => $request->input('ent_prefeitura'),
            'te_bombeiro' => $request->input('te_bombeiro'),
            'tp_bombeiro' => $request->input('tp_bombeiro'),
            'arq_bombeiro' => $request->input('arq_bombeiro'),
            'ent_bombeiro' => $request->input('ent_bombeiro'),
        ]); 
    
        if ($created) {
            return redirect()->route('verificacao_empresa.index')->with('message', 'Empresa cadastrada com sucesso');
        }
    }

    public function show(VerificacaoEmpresa $verificacao_empresa)
    {
        $id = $verificacao_empresa->id;
        $this->verificacao_empresa->where('id', $id)->delete();
        return redirect()->route('verificacao_empresa.index')->with('message', 'Empresa apagada com sucesso');
    }

    public function edit(VerificacaoEmpresa $verificacao_empresa)
    {
        var_dump($verificacao_empresa->id);
        return view('pages.documentacao_empresa.edit', ['verificacaoempresa' => $verificacao_empresa]);
    }

    public function update(Request $request, VerificacaoEmpresa $verificacao_empresa)
    {
    
        $id = $verificacao_empresa->id;
        $update = $this->verificacao_empresa->where('id', $id)->update($request->except(['_token', '_method']));
        if ($update) {

            return redirect()->route('verificacao_empresa.index')->with('message', 'Empresa atualizada com sucesso');
        }
    
    }

    public function destroy(VerificacaoEmpresa $verificacao_empresa)
    {
        $id = $verificacao_empresa->id;
        $this->verificacao_empresa->where('id', $id)->delete();
        return redirect()->route('verificacao_empresa.index')->with('message', 'Empresa apagada com sucesso');
    }


    
}
