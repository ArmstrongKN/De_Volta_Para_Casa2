<?php

namespace App\Http\Controllers;

use App\Models\Administracao;

class ImobiliariaController extends Controller
{
    public function mostrarImobiliaria(){return view ('Imobiliaria');}

    public function listarImobiliaria() { 
        
        $imobiliaria = Administracao::query();
        $imobiliaria->where("area", "=", "Imobiliária");
        $imobiliaria = $imobiliaria->get();

        return view('imobiliaria', ['listaImobiliaria' => $imobiliaria]); 
    
    }
}
