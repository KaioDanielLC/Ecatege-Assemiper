<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa_filial;
use App\Models\Empresa;

class countController extends Controller
{
  public readonly Empresa $empresa;
  public readonly Empresa_filial $empresa_filial;

  public function __construct()
  {
      $this->empresa = new Empresa();
      $this->empresa_filial = new Empresa_filial();
  }

    public function index()
    {
      $count = $this->empresa->count();
      $count_filial = $this->empresa_filial->count();
      
      return view('dashboard', ['count' => $count, 'count_filial' => $count_filial]);
    }
}
