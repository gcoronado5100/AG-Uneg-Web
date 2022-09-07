<?php

namespace App\Http\Controllers;

use App\Models\Consejo_Usuario;
use Illuminate\Http\Request;

class ConsejoUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Consejo_Usuario::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $consejo_usuario = Consejo_Usuario::create($request->all());
        return $consejo_usuario;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Consejo_Usuario  $consejo_Usuario
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Consejo_Usuario::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Consejo_Usuario  $consejo_Usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $consejo_usuario = Consejo_Usuario::find($id);
        $consejo_usuario->update($request->all());
        return $consejo_usuario;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Consejo_Usuario  $consejo_Usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consejo_usuario = Consejo_Usuario::find($id);
        $consejo_usuario->delete();
        return $consejo_usuario;
    }
}
