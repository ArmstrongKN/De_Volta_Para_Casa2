<?php

namespace App\Http\Controllers;

use App\Models\Administracao;
use App\Http\Requests\StoreAdministracaoRequest;
use App\Http\Requests\UpdateAdministracaoRequest;

class AdministracaoController extends Controller
{
    public function mostrarAdministracao() { return view("administracao"); }
}
