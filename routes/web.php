<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\AtracoesController;
use App\Http\Controllers\EmpregabilidadeController;
use App\Http\Controllers\ImobiliariaController;
use App\Http\Controllers\AdministracaoController;



// Route::get('/', function () {
//     return view('welcome');
// });

// Home
Route::get("/index", [PrincipalController::class, "mostrarPrincipal"])->name("mostrarHome");

// Atracoes
Route::get("/atracoes", [AtracoesController::class, "mostrarAtracoes"])->name("mostrarAtracoes");

//empregabilidade
Route::get("/empregabilidade", [EmpregabilidadeController::class, "mostrarEmpregabilidade"])->name("mostrarEmpregabilidade");

//imobiliaria
Route::get("/imobiliaria", [ImobiliariaController::class, "mostrarImobiliaria"])->name("mostrarImobiliaria");

// Administração
Route::get("/administracao", [AdministracaoController::class, "mostrarAdministracao"])->name("mostrarAdministracao");
