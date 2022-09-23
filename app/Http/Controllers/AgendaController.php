<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {        
        if (
            $request['orden']!=NULL 
            && $request['orden']!='asc' && $request['orden']!='desc'
        ){
            return response()->json(
                [
                    'message' => 'el parametro orden solo puede ser asc o desc',
                ]
            ,400);
        }

        if (
            $request['estado']!=NULL 
            && $request['estado']!='abierta' && $request['estado']!='cerrada'
        ){
            return response()->json(
                [
                    'message' => 'el parametro estado solo puede ser abierta o cerrada',
                ]
            ,400);
        }

        if($request['estado']=='abierta'){
            $agendas=Agenda::where('fecha_cierre',"=",NULL);
        } else{
            $agendas=Agenda::where('fecha_cierre',"!=",NULL);
        }

        if($request['orden']=='desc'){
             $agendas=$agendas->orderBy('fecha_apertura', $request['orden']);
        }

        $agendas=$agendas->paginate($request['cantidadElementos']);

        return $agendas;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $agenda = Agenda::create($request->all());
        return $agenda;

        // if(!userCan(auth()->user()['id'],"agregar agenda")){
        //     return response()->json(
        //         [
        //             'message' => 'No tienes el permiso para hacer esto',
        //         ]
        //         ,401);
        // }

        // $validator = Validator::make(request()->all(), [
        //     'titulo' => 'required|string|max:50',
        //     'consejo_id' => 'required|numeric|digits_between:6,8|unique:users,cedula',
        //     'fecha_apertura' => 'required|date',
        // ]);

        // if ($validator->fails()) {
        //     return response()->json($validator->errors()->toJson(), 400);
        // }

        // $user = User::create(array_merge (
        //     $validator->validate(),
        //     ['password' => bcrypt($request->cedula)]
        // ));

        // return response()->json([
        //     'message' => 'User created successfully',
        //     'data' => $user
        // ]);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Agenda::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $agenda = Agenda::find($id);
        $agenda->update($request->all());
        return $agenda;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agenda = Agenda::find($id);
        $agenda->delete();
        return $agenda;
    }

}
