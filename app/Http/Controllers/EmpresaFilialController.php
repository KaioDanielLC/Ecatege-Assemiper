<?php

namespace App\Http\Controllers;

use App\Models\Empresa_filial;
use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaFilialController extends Controller
{

    public readonly Empresa_filial $empresa_filial;

    public function __construct()
    {
        $this->empresa_filial = new Empresa_filial();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empresa_filial = empresa_filial::all();
        
        
        

        $search = request('search');
    
        if ($search) {
            $empresa_filial = $this->empresa_filial
                ->where('nome_empresa', 'like', '%' . $search . '%')
                ->orWhere('nome_dono', 'like', '%' . $search . '%')
                ->get();
        } else {
            $empresa_filial = $this->empresa_filial->orderBy('nome_empresa', 'asc')->get();
        };
    
        
    

        return view ('pages.empresa_filial.list', ['empresa_filial' => $empresa_filial, 'search' => $search]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $empresas = empresa::all();
        return view("pages.empresa_filial.create", ['empresas' => $empresas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:empresas',
        ],['email.unique' => 'Este email já está sendo utilizado.',
        
        ]);
    
        // Criando a empresa
        $created = $this->empresa_filial->create([
            'nome_empresa' => $request->input('nome_empresa'),
            'empresas_id' => $request->input('empresas_id'),
            'nome_dono' => $request->input('nome_dono'),
            'endereco' => $request->input('endereco'),
            'telefone' => $request->input('telefone'),
            'celular' => $request->input('celular'),
            'email' => $request->input('email'),
            'whatsapp' => $request->input('whatsapp'),
        ]); 
        if ($created) {
            return redirect()->route('empresa_filial.index')->with('message', 'Filial cadastrada com sucesso');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Empresa_filial $empresa_filial)
    {
        $id = $empresa_filial->id;
        $this->empresa_filial->where('id', $id)->delete();
        return redirect()->route('empresa_filial.index')->with('message', 'Filial apagada com sucesso');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empresa_filial $empresa_filial)
    {
        $empresas = empresa::all();
        return view('pages.empresa_filial.edit', ['empresa_filial' => $empresa_filial , 'empresas' => $empresas]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empresa_filial $empresa_filial)
    {
        $id = $empresa_filial->id;
        $update = $this->empresa_filial->where('id', $id)->update($request->except(['_token', '_method']));
        if ($update) {

            return redirect()->route('empresa_filial.index')->with('message', 'Filial atualizada com sucesso');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empresa_filial $empresa_filial)
    {
        $id = $empresa_filial->id;
        $this->empresa_filial->where('id', $id)->delete();
        return redirect()->route('empresa_filial.index')->with('message', 'Filial apagada com sucesso');
    }
}
