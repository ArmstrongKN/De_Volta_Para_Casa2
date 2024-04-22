<?php

namespace App\Http\Controllers;

use App\Models\Administracao;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdministracaoController extends Controller
{
    public function mostrarAdministracao() { return view("administracao"); }

    public function postarItem(Request $request) {

        $info = $request->validate([

            'titulo' => 'string|required',
            'descricao' => 'string|required',
            'area' => 'string|required',
            'imagem' => 'string|required',
            'url' => 'string|required'

        ]);

        Administracao::create($info);
        return Redirect::route('mostrarAdministracao');
    }

}
