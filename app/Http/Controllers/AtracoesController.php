<?php

namespace App\Http\Controllers;

use App\Models\Atracoes;
use App\Http\Requests\StoreAtracoesRequest;
use App\Http\Requests\UpdateAtracoesRequest;

class AtracoesController extends Controller
{

    public function mostrarAtracoes() { return view("atracoes"); }


    // /**
    //  * Display a listing of the resource.
    //  */
    // public function index()
    // {
    //     //
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(StoreAtracoesRequest $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(Atracoes $atracoes)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(Atracoes $atracoes)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(UpdateAtracoesRequest $request, Atracoes $atracoes)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(Atracoes $atracoes)
    // {
    //     //
    // }
}
