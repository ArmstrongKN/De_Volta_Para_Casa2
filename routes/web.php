<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\AtracoesController;
use App\Http\Controllers\EmpregabilidadeController;
use App\Http\Controllers\ImobiliariaController;
use App\Http\Controllers\AdministracaoController;
use App\Http\Controllers\EducacaoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        // Home
    Route::get("/index", [PrincipalController::class, "mostrarPrincipal"])->name("mostrarHome");

    // Atracoes
    Route::get("/atracoes", [AtracoesController::class, "mostrarAtracoes"])->name("mostrarAtracoes");
    Route::get("/atracoes", [AtracoesController::class, "listarAtracoes"])->name("listarAtracoes");

    //empregabilidade
    Route::get("/empregabilidade", [EmpregabilidadeController::class, "mostrarEmpregabilidade"])->name("mostrarEmpregabilidade");
    Route::get("/empregabilidade", [EmpregabilidadeController::class, "listarEmpregabilidade"])->name("listarEmpregabilidade");
    //imobiliaria
    Route::get("/imobiliaria", [ImobiliariaController::class, "mostrarImobiliaria"])->name("mostrarImobiliaria");
    Route::get("/imobiliaria", [ImobiliariaController::class, "listarImobiliaria"])->name("listarImobiliaria");

    // Educação
    Route::get("/educacao", [EducacaoController::class, "mostrarEducacao"])->name("mostrarEducacao");
    Route::get("/educacao", [EducacaoController::class, "listarEducacao"])->name("listarEducacao");

    // Administração
    Route::get("/administracao", [AdministracaoController::class, "mostrarAdministracao"])->name("mostrarAdministracao");
    Route::post("/administracao", [AdministracaoController::class, "postarItem"])->name("postarItem");

});

require __DIR__.'/auth.php';
