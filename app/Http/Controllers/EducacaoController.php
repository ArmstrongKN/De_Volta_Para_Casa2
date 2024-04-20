<?php

namespace App\Http\Controllers;

use App\Models\educacao;
use App\Http\Requests\StoreeducacaoRequest;
use App\Http\Requests\UpdateeducacaoRequest;

class EducacaoController extends Controller
{
    public function mostrarEducacao() {return view ('educacao'); }
}
