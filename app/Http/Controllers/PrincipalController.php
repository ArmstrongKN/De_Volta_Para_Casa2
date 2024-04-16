<?php

namespace App\Http\Controllers;

use App\Models\Principal;
use App\Http\Requests\StorePrincipalRequest;
use App\Http\Requests\UpdatePrincipalRequest;

class PrincipalController extends Controller
{

    public function mostrarPrincipal() { return view("index"); }

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
    // public function store(StorePrincipalRequest $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(Principal $principal)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(Principal $principal)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(UpdatePrincipalRequest $request, Principal $principal)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(Principal $principal)
    // {
    //     //
    // }
}
