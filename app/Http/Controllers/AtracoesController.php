<?php

namespace App\Http\Controllers;

use App\Models\Administracao;

class AtracoesController extends Controller
{
     public function mostrarAtracoes() { return view("atracoes"); }

     public function listarAtracoes() { 
        
          $atracoes = Administracao::query();
          $atracoes->where("area", "=", "Atração");
          $atracoes = $atracoes->get();
  
          return view('atracoes', ['listaAtracoes' => $atracoes]); 
      
      }
}
