<?php

namespace App\Http\Controllers;

use App\Models\Soporte;
use Illuminate\Http\Request;

class SoporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($request)
    {
        if($request['cantidadElementos']){
            return Soporte::paginate($request['cantidadElementos']);
        }else{
            return Soporte::paginate();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $soporte = Soporte::create($request->all());
        return $soporte;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Soporte  $soporte
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Soporte::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Soporte  $soporte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $soporte = Soporte::find($id);
        $soporte->update($request->all());
        return $soporte;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Soporte  $soporte
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $soporte = Soporte::find($id);
        $soporte->delete();
        return $soporte;
    }
}
