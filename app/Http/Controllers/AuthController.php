<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ConsejoRoleUser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

use Illuminate\Support\Facades\DB;



class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', ]]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['message' => 'no se pudo iniciar sesion tus datos son incorrectos'], 401);
        }
        
        $consejoRoleUser=ConsejoRoleUser::select(
            'consejo_role_user.consejo_id',            
            'consejos.nombre AS consejo_nombre',
            'consejo_role_user.role_id',
            'roles.nombre AS role_nombre',
        )
        ->leftJoin('consejos', 'consejo_role_user.consejo_id', '=', 'consejos.id')
        ->join('roles', 'consejo_role_user.role_id', '=', 'roles.id')
        ->join('users', 'consejo_role_user.user_id', '=', 'users.id')->where("users.id",auth()->user()['id'])->get();

        return response()->json(
            array_merge(
            ["informacion personal "=>auth()->user()],
            [
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            "roles del usuario"=>$consejoRoleUser
            ]
            )
        );
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        $consejoRoleUser=ConsejoRoleUser::select(
            'consejo_role_user.consejo_id',            
            'consejos.nombre AS consejo_nombre',
            'consejo_role_user.role_id',
            'roles.nombre AS role_nombre',
        )
        ->leftJoin('consejos', 'consejo_role_user.consejo_id', '=', 'consejos.id')
        ->join('roles', 'consejo_role_user.role_id', '=', 'roles.id')
        ->join('users', 'consejo_role_user.user_id', '=', 'users.id')->where("users.id",auth()->user()['id'])->get();

        return response()->json(
            array_merge(
            ["message"=> "se logro recuperar los datos del usuario de forma satisfactoria"],
            ["informacion personal "=>auth()->user()],
            [
            "roles del usuario"=>$consejoRoleUser
            ]
            )
        );

    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }

    public function register(Request $request)
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
            'telefono' => 'string|max:255',
            'fecha_nacimiento' => 'required|date',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        if($request->genero && $request->genero!="Masculino" && $request->genero!="Femenino" && $request->genero!="Prefiero no especificar" ){
            return response()->json(
                [
                    'message' => 'el parametro genero solo puede ser Masculino, Femenino o Prefiero no especificar',
                ]
            ,400);
        }

    $nombreArchivo=$request->cedula.".".$request->file('avatar')->extension();

        $path = $request->file('avatar')->storeAs('public/perfiles', $nombreArchivo);

        if(!$path)
        {
            return response()->json(
                [
                    'message' => 'error subiendo archivo '.$nombreArchivo
                ]
            ,400);
        }
        

        $user = User::create(array_merge (
            $validator->validate(),
            ['genero' => $request->genero],
            ['password' => bcrypt($request->cedula)],
            ['url_foto_perfil'=>$path]
        ));

        return response()->json([
            'message' => 'User created successfully',
            'data' => $user
        ]);
    
    }
}
