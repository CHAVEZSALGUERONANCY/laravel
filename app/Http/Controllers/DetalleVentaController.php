<?php

namespace App\Http\Controllers;

use App\Models\detalle_venta;
use App\Http\Requests\Storedetalle_ventaRequest;
use App\Http\Requests\Updatedetalle_ventaRequest;

class DetalleVentaController extends Controller
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
     * @param  \App\Http\Requests\Storedetalle_ventaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storedetalle_ventaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\detalle_venta  $detalle_venta
     * @return \Illuminate\Http\Response
     */
    public function show(detalle_venta $detalle_venta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\detalle_venta  $detalle_venta
     * @return \Illuminate\Http\Response
     */
    public function edit(detalle_venta $detalle_venta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatedetalle_ventaRequest  $request
     * @param  \App\Models\detalle_venta  $detalle_venta
     * @return \Illuminate\Http\Response
     */
    public function update(Updatedetalle_ventaRequest $request, detalle_venta $detalle_venta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detalle_venta  $detalle_venta
     * @return \Illuminate\Http\Response
     */
    public function destroy(detalle_venta $detalle_venta)
    {
        //
    }
}
