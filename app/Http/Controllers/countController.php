<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;

class countController extends Controller
{
  public readonly Empresa $empresa;

  public function __construct()
  {
      $this->empresa = new Empresa();
  }

    public function index()
    {
      $count = $this->empresa->count();
      
      return view('dashboard', ['count' => $count]);
    }
}
