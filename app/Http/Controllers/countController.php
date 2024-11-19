<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa_filial;
use App\Models\Empresa;
use App\Models\VerificacaoEmpresa;

class countController extends Controller
{
  public readonly Empresa $empresa;
  public readonly Empresa_filial $empresa_filial;
  public readonly VerificacaoEmpresa $verificacao_empresa;

  public function __construct()
  {
      $this->empresa = new Empresa();
      $this->empresa_filial = new Empresa_filial();
      $this->verificacao_empresa = new VerificacaoEmpresa();
  }

    public function index()
    {
      $count = $this->empresa->count();
      $count_filial = $this->empresa_filial->count();
      $count_verificacao =$this->verificacao_empresa->count();
      
      return view('dashboard', ['count' => $count, 'count_filial' => $count_filial, 'count_verificacao' => $count_verificacao]);
    }
}
