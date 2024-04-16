<?php

namespace App\Http\Controllers;

use App\Models\Imobiliaria;
use App\Http\Requests\StoreImobiliariaRequest;
use App\Http\Requests\UpdateImobiliariaRequest;

class ImobiliariaController extends Controller
{
 public function mostrarImobiliaria(){return view ('Imobiliaria');}
}
