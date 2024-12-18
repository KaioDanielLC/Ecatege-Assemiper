<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\VerificacaoEmpresa;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;

class VerificacaoEmpresaController extends Controller
{
    public readonly VerificacaoEmpresa $verificacao_empresa;

    public function __construct()
    {
        $this->verificacao_empresa = new VerificacaoEmpresa();
    }

    public function index()
    {
        

        $search = request('search');
    
        if ($search) {
            $verificacao_empresas = VerificacaoEmpresa::where(function ($query) use ($search) {
                $query->where('nome_fantasia', 'like', '%' . $search . '%')
                    ->orWhere('numero_pasta', 'like', '%' . $search . '%')
                    ->orWhere('inscricao_municipal', 'like', '%' . $search . '%');
            })->orderBy('nome_fantasia', 'asc')->get();
        } else {
            $verificacao_empresas = VerificacaoEmpresa::orderBy('nome_fantasia', 'asc')->get();
        }
        
        
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
            'pdf_ambiental' => 'nullable|file|mimes:pdf|max:2048',
            'pdf_bombeiro' => 'nullable|file|mimes:pdf|max:2048',
            'pdf_vigilancia' => 'nullable|file|mimes:pdf|max:2048',
            'pdf_sanitario' => 'nullable|file|mimes:pdf|max:2048',
            'pdf_extra' => 'nullable|file|mimes:pdf|max:2048',
        ], [
            'inscricao_municipal.unique' => 'Essa inscrição já está sendo usada',
        ]);
    
        // Array para armazenar os nomes dos arquivos
        $pdfFiles = ['pdf_ambiental', 'pdf_bombeiro', 'pdf_vigilancia', 'pdf_sanitario', 'pdf_extra'];
        $uploadedFiles = [];
    
        // Processar os arquivos PDF
        foreach ($pdfFiles as $file) {
            if ($request->hasFile($file) && $request->file($file)->isValid()) {
                $uploadedFile = $request->file($file);
                $extension = $uploadedFile->extension();
                $fileName = md5($uploadedFile->getClientOriginalName() . strtotime("now")) . '.' . $extension;
                $uploadedFile->move(public_path('img/pdf'), $fileName);
                $uploadedFiles[$file] = $fileName;
            } else {
                $uploadedFiles[$file] = null; // Caso o arquivo não seja enviado
            }
        }
    
        // Criar o registro no banco de dados
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
            'te_vigilancia' => $request->input('te_vigilancia'),
            'tp_vigilancia' => $request->input('tp_vigilancia'),
            'arq_vigilancia' => $request->input('arq_vigilancia'),
            'ent_vigilancia' => $request->input('ent_vigilancia'),
            'te_funcionamento' => $request->input('te_funcionamento'),
            'tp_funcionamento' => $request->input('tp_funcionamento'),
            'arq_funcionamento' => $request->input('arq_funcionamento'),
            'ent_funcionamento' => $request->input('ent_funcionamento'),
            // PDFs
            'pdf_ambiental' => $uploadedFiles['pdf_ambiental'],
            'pdf_bombeiro' => $uploadedFiles['pdf_bombeiro'],
            'pdf_vigilancia' => $uploadedFiles['pdf_vigilancia'],
            'pdf_sanitario' => $uploadedFiles['pdf_sanitario'],
            'pdf_extra' => $uploadedFiles['pdf_extra'],
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
        return view('pages.documentacao_empresa.edit', ['verificacaoempresa' => $verificacao_empresa]);
    }

    public function update(Request $request, VerificacaoEmpresa $verificacao_empresa)
    {
        // Validação dos arquivos PDF
        $request->validate([
            'pdf_ambiental' => 'nullable|file|mimes:pdf|max:2048',
            'pdf_vigilancia' => 'nullable|file|mimes:pdf|max:2048',
            'pdf_sanitario' => 'nullable|file|mimes:pdf|max:2048',
            'pdf_bombeiro' => 'nullable|file|mimes:pdf|max:2048',
            'pdf_extra' => 'nullable|file|mimes:pdf|max:2048',
        ]);
    
        // Array de arquivos PDF
        $pdfFiles = ['pdf_ambiental', 'pdf_vigilancia', 'pdf_sanitario', 'pdf_bombeiro', 'pdf_extra'];
        $uploadedFiles = [];
    
        foreach ($pdfFiles as $file) {
            if ($request->hasFile($file) && $request->file($file)->isValid()) {
                // Apagar o PDF anterior, se houver
                if ($verificacao_empresa->$file) {
                    Storage::delete(public_path('img/pdf/' . $verificacao_empresa->$file));
                }
    
                // Armazenar o novo arquivo
                $uploadedFile = $request->file($file);
                $fileName = md5($uploadedFile->getClientOriginalName() . strtotime("now")) . '.' . $uploadedFile->extension();
                $uploadedFile->move(public_path('img/pdf'), $fileName);
                $uploadedFiles[$file] = $fileName;
            } else {
                // Caso não tenha enviado um novo PDF, manter o atual
                $uploadedFiles[$file] = $verificacao_empresa->$file;
            }
        }
    
        // Atualizar os dados no banco de dados
        $verificacao_empresa->update([
            'pdf_ambiental' => $uploadedFiles['pdf_ambiental'],
            'pdf_vigilancia' => $uploadedFiles['pdf_vigilancia'],
            'pdf_sanitario' => $uploadedFiles['pdf_sanitario'],
            'pdf_bombeiro' => $uploadedFiles['pdf_bombeiro'],
            'pdf_extra' => $uploadedFiles['pdf_extra'],
            // Outros campos do formulário
            'nome_fantasia' => $request->input('nome_fantasia'),
            'numero_pasta' => $request->input('numero_pasta'),
            'ano' => $request->input('ano'),
            'data_validade' => $request->input('data_validade'),
            'inscricao_municipal' => $request->input('inscricao_municipal'),
            'area_total' => $request->input('area_total'),
            'area_utilizada' => $request->input('area_utilizada'),

            // Adicione outros campos aqui
        ]);
    
        return redirect()->route('verificacao_empresa.index')->with('message', 'Empresa atualizada com sucesso');
    }
    

    public function destroy(VerificacaoEmpresa $verificacao_empresa)
    {
        $id = $verificacao_empresa->id;
        $this->verificacao_empresa->where('id', $id)->delete();
        return redirect()->route('verificacao_empresa.index')->with('message', 'Empresa apagada com sucesso');
    }
}
