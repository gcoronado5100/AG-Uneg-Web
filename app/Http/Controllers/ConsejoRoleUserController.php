<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ConsejoRoleUser;
use App\Models\Role;

//use Illuminate\Support\Facades\Auth;
use Validator;


class ConsejoRoleUserController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user=auth()->user();

        $validator = Validator::make($request->all(), [
            'accion' => 'required',
            'user_id' => 'required|numeric',
            'consejo_id' => 'required|numeric',

        ])->sometimes(['role_id'], 'required|numeric', function ($input) {
            return (strcasecmp($input->accion, "agregar rol") === 0);
        });

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        if(!userCan($user['id'],$request['accion'])){
            return response()->json(
                [
                    'message' => 'No tienes permisos para realizar esta accion',
                ]
            ,401);
        }

        if(
            !userCan($user['id'],'agregar rol') 
            && 
            $user->consejos()->where('id',$request['consejo_id'])->doesntExist()
        ){
            
            return response()->json(
                [
                    'message' => 'Solo un master puede asignar un rol a usuarios para un consejo al que no pertenece',
                ]
            ,401);

        }

        if(
            $request['accion']!="agregar rol"
            && 
            $request['rol_id']!=NULL
        ){
            
            return response()->json(
                [
                    'message' => 'A traves de esta accion no puede asignar el rol que desee',
                ]
            ,401);

        }


        if($request['accion']!="agregar rol"){

            $nombreRol=explode(" ", $request['accion'])[1];
            
            $request['role_id']=Role::where("nombre","=",$nombreRol)->first()['id'];
        
        }

        $consejoRoleUser = ConsejoRoleUser::create(
            [
                "consejo_id"=>$request['consejo_id'],
                "role_id"=>$request['role_id'],
                "user_id"=>$request['user_id'],
            ]
        );

        return response()->json([
            'message' => "Se logro la accion:".$request['accion']." de forma exitosa",
        ]); 

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
