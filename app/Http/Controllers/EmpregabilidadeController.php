<?php

namespace App\Http\Controllers;

use App\Models\Empregabilidade;
use App\Http\Requests\StoreEmpregabilidadeRequest;
use App\Http\Requests\UpdateEmpregabilidadeRequest;

class EmpregabilidadeController extends Controller
{
 public function mostrarEmpregabilidade() {return view ('empregabilidade'); }
}
