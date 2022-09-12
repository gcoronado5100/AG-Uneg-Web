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
        $consejoRoleUser=ConsejoRoleUser::select(
            'consejo_role_user.id AS id_consejo_role_user',
            'consejos.nombre AS consejo_nombre',
            'roles.nombre AS role_nombre',
            'users.name AS user_name', 
        )
        ->leftJoin('consejos', 'consejo_role_user.consejo_id', '=', 'consejos.id')
        ->join('roles', 'consejo_role_user.role_id', '=', 'roles.id')
        ->join('users', 'consejo_role_user.user_id', '=', 'users.id')->get();

        return response()->json(
            [
                'message' => 'Recuperastes el rol de cada usuario para cada consejo',
                'data'=>$consejoRoleUser
            ]
        ,200);
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
            'user_id' => 'required|numeric|exists:users,id',
            'consejo_id' => 'required|numeric|exists:consejos,id',

        ])->sometimes(['role_id'], 'required|numeric|exists:roles,id', function ($input) {
            return (strcasecmp($input->accion, "asignar rol") === 0);
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
            !userCan($user['id'],'asignar rol') 
            && 
            $user->consejos()->where('consejos.id',$request['consejo_id'])->doesntExist()
        ){
            
            return response()->json(
                [
                    'message' => 'Solo un master puede asignar un rol a usuarios para un consejo al que no pertenece',
                ]
            ,401);

        }

        if(
            $request['accion']!="asignar rol"
            && 
            $request['role_id']!=NULL
        ){
            
            return response()->json(
                [
                    'message' => 'A traves de esta accion no puede asignar el rol que desee',
                ]
            ,401);

        }


        if($request['accion']!="asignar rol"){

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
        $user=auth()->user();

        $validator = Validator::make(array_merge($request->all(),["id"=>$id]), [
            'id' => 'required|numeric|exists:consejo_role_user,id',
            'accion' => 'required',
            'user_id' => 'required|numeric|exists:users,id',
            'consejo_id' => 'required|numeric|exists:consejos,id',

        ])->sometimes(['role_id'], 'required|numeric|exists:roles,id', function ($input) {
            return (strcasecmp($input->accion, "asignar rol") === 0);
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
            !userCan($user['id'],'asignar rol') 
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
            $request['accion']!="asignar rol"
            && 
            $request['role_id']!=NULL
        ){
            
            return response()->json(
                [
                    'message' => 'A traves de esta accion no puede asignar el rol que desee',
                ]
            ,401);

        }


        if($request['accion']!="asignar rol"){

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

        $consejo_role_user = ConsejoRoleUser::find($id);
        $consejo_role_user->delete();

        return response()->json([
            'message' => "Se logro la accion:".$request['accion']." de forma exitosa",
        ]); 
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
        $validator = Validator::make(["id"=>$id], [
            'id' => 'required|numeric|exists:consejo_role_user,id',

        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        $consejo_role_user = ConsejoRoleUser::find($id);
        $consejo_role_user->delete();

        return response()->json([
            'message' => "Se logro la eliminar la relacion de id ".$id." forma exitosa",
        ]); 
    }
}
