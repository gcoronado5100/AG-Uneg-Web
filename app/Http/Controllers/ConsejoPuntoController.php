<?php

namespace App\Http\Controllers;

use App\Models\ConsejoPunto;
use Illuminate\Http\Request;

class ConsejoPuntoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ConsejoPunto::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $consejo_punto = Consejo_Punto::create($request->all());
        return $consejo_punto;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Consejo_Punto  $consejo_Punto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Consejo_Punto::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Consejo_Punto  $consejo_Punto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $consejo_punto = Consejo_Punto::find($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ConsejoPunto  $consejo_Punto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consejo_punto = ConsejoPunto::find($id);
        $consejo_punto->delete();
    }
}
