<?php

namespace App\Http\Controllers;

use App\Models\Punto;
use Illuminate\Http\Request;

class PuntoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Punto::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $punto = Punto::create($request->all());
        return $punto;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Punto  $punto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Punto::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Punto  $punto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $punto = Punto::find($id);
        $punto->update($request->all());
        return $punto;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Punto  $punto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $punto = Punto::find($id);
        $punto->delete();
        return $punto;
    }
}
