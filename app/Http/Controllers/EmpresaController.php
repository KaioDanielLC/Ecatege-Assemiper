<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{

    public readonly Empresa $empresa;

    public function __construct()
    {
        $this->empresa = new Empresa();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        
        $search = request('search');
        
        // $count = $this->empresa->count();

        if ($search) {
            $empresas = $this->empresa
                ->where('nome_empresa', 'like', '%' . $search . '%')
                ->orWhere('nome_dono', 'like', '%' . $search . '%')
                ->get();
        } else {
            $empresas = $this->empresa->all();
            $empresas = $this->empresa->orderBy('nome_empresa', 'asc')->get();
        }


        return view('pages.empresa.list', ['empresa' => $empresas, 'search' => $search]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.empresa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this->empresa->create([
            'nome_empresa' => $request->input('nome_empresa'),
            'nome_dono' => $request->input('nome_dono'),
            'endereco' => $request->input('endereco'),
            'telefone' => $request->input('telefone'),
            'celular' => $request->input('celular'),
            'email' => $request->input('email'),
        ]);
        if ($created) {
            return redirect()->route('empresa.index')->with('message', 'Empresa cadastrada com sucesso');
        };

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Empresa $empresa)
    {
        return view('pages.empresa.delete', ['empresa' => $empresa]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empresa $empresa)
    {
        return view('pages.empresa.edit', ['empresa' => $empresa]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empresa $empresa)
    {
        $id = $empresa->id;
        $update = $this->empresa->where('id', $id)->update($request->except(['_token', '_method']));
        if ($update) {

            return redirect()->route('empresa.index')->with('message', 'Empresa atualizada com sucesso');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empresa $empresa)
    {
        $id = $empresa->id;
        $this->empresa->where('id', $id)->delete();
        return redirect()->route('empresa.index')->with('message', 'Empresa apagada com sucesso');
    }
}
