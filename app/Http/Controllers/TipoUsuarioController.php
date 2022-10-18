<?php

namespace App\Http\Controllers;

use App\Models\tipo_usuario;
use App\Http\Requests\Storetipo_usuarioRequest;
use App\Http\Requests\Updatetipo_usuarioRequest;

class TipoUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storetipo_usuarioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storetipo_usuarioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tipo_usuario  $tipo_usuario
     * @return \Illuminate\Http\Response
     */
    public function show(tipo_usuario $tipo_usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tipo_usuario  $tipo_usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(tipo_usuario $tipo_usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatetipo_usuarioRequest  $request
     * @param  \App\Models\tipo_usuario  $tipo_usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Updatetipo_usuarioRequest $request, tipo_usuario $tipo_usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tipo_usuario  $tipo_usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(tipo_usuario $tipo_usuario)
    {
        //
    }
}
