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
        //
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
    }

    /**
     * Display the specified resource.
     */
    public function show(Empresa_filial $empresa_filial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empresa_filial $empresa_filial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empresa_filial $empresa_filial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empresa_filial $empresa_filial)
    {
        //
    }
}
