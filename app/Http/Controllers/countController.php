<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa_filial;
use App\Models\Empresa;
use App\Models\VerificacaoEmpresa;
use Carbon\Carbon;

class countController extends Controller
{
  public readonly Empresa $empresa;
  public readonly Empresa_filial $empresa_filial;
  public readonly VerificacaoEmpresa $verificacao_empresa;

  public function __construct()
  {
      $this->empresa = new Empresa();
      $this->empresa_filial = new Empresa_filial();

      $hoje = Carbon::now();
      $dataLimite = $hoje->addDays(30);

      $this->verificacao_empresa = new VerificacaoEmpresa();
  }

    public function index()
    {
      $count = $this->empresa->count();
      $count_filial = $this->empresa_filial->count();
      $count_verificacao =$this->verificacao_empresa->count();

      $hoje = Carbon::now();
      $dataLimite = $hoje->addDays(30);

      $count_alvara = VerificacaoEmpresa::where('data_validade', '<=', $dataLimite)->where('data_validade', '>=', $hoje)->count();
      
      return view('dashboard', ['count' => $count, 'count_filial' => $count_filial, 'count_verificacao' => $count_verificacao ,'count_alvara' => $count_alvara]);
    }
}
