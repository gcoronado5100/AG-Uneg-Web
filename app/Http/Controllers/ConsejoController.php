<?php

namespace App\Http\Controllers;

use App\Models\Consejo;
use Illuminate\Http\Request;

class ConsejoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Consejo::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $consejo = Consejo::create($request->all());
        return $consejo;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Consejo  $consejo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Consejo::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Consejo  $consejo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $consejo = Consejo::find($id);
        $consejo->update($request->all());
        return $consejo;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Consejo  $consejo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consejo = Consejo::find($id);
        $consejo->delete();
        return $consejo;
    }
}
