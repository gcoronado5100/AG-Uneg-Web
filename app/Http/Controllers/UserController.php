<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Validator;

use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request['orden']!=NULL && $request['orden']!='asc' && $request['orden']!='desc'){
            return response()->json(
                [
                    'message' => 'el parametro orden solo puede ser asc o desc',
                ]
            ,400);
        }

        if($request['orden']!=NULL&&$request['cantidadElementos']!=NULL)
        {
            return User::paginate($request['cantidadElementos']);
        }else{
            return User::paginate();
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
        if(!userCan(auth()->user()['id'],"agregar usuario")){
            return response()->json(
                [
                    'message' => 'No tienes el permiso para hacer esto',
                ]
                ,401);
        }

        $validator = Validator::make(request()->all(), [
            'name' => 'required|string|max:50',
            'cedula' => 'required|numeric|digits_between:6,8|unique:users,cedula',
            'email' => 'required|string|email|max:255|unique:users',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        $user = User::create(array_merge (
            $validator->validate(),
            ['password' => bcrypt($request->cedula)]
        ));

        return response()->json([
            'message' => 'User created successfully',
            'data' => $user
        ]);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return User::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(auth()->user()['id']!=$id && !userCan(auth()->user()['id'],"actualizar usuario")){
            return response()->json(
                [
                    'message' => 'No tienes el permiso para hacer esto',
                ]
                ,401);
        }

        $user = User::find($id);
        $user->update($request->all());
        return $user;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $validator = Validator::make(["id"=>$id], [
            'id' => 'required|numeric|exists:users,id',

        ]);
        
        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        if(auth()->user()['id']!=$id && !userCan(auth()->user()['id'],"eliminar usuario")){
            return response()->json(
                [
                    'message' => 'No tienes el permiso para hacer esto',
                ]
                ,401);
        }


        DB::table('users')->where('id',$id)->delete();

        return response()->json(
            [
                'message' => 'Usuario borrado'
            ]
            );
    }

}
