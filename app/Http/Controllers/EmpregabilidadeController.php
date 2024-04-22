<?php

namespace App\Http\Controllers;

use App\Models\Administracao;

class EmpregabilidadeController extends Controller
{
    public function mostrarEmpregabilidade() {return view ('empregabilidade'); }

    public function listarEmpregabilidade() { 
        
        $empregabilidade = Administracao::query();
        $empregabilidade->where("area", "=", "Empregabilidade");
        $empregabilidade = $empregabilidade->get();

        return view('empregabilidade', ['listaEmpregabilidade' => $empregabilidade]); 
    
    }
}
