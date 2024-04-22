<?php

namespace App\Http\Controllers;

use App\Models\Administracao;

class EducacaoController extends Controller
{
    public function mostrarEducacao() {return view ('educacao'); }

    public function listarEducacao() { 
        
        $educacao = Administracao::query();
        $educacao->where("area", "=", "Educação");
        $educacao = $educacao->get();

        return view('educacao', ['listaEducacao' => $educacao]); 
    
    }
}
