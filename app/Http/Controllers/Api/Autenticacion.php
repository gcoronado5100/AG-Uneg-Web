<?php

namespace App\Http\Controllers\Api;

use App\Services\UserService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AutenticacionController extends Controller
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }


    public function register (Request $request)
    {
        $userData = $request->validate([
            'nombre' => 'required|string|max:20',
            'apellido' => 'required|string|max:20',
            'cedula' => 'required|numeric|digits_between:7,8|unique:users,cedula',
            'email' => 'required|string|email|max:255|unique:users',
        ]);

        $user = $this->userService->store($userData);

        $token = $user->createToken('my_awesome_token')->plainTextToken;

        return response()->json([
            'message' => 'Usuario creado con exito. Su contraseña es su cedula',
            'token' => $token
        ]);
    }


    public function login(Request $request)
    {
        $userData = $request->validate([
            'email' => 'required|string|email|max:255|exists:users,email',
            'password' => 'required|string|digits_between:7,8',
        ]);

        if (!Auth::attempt($userData)) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $token = Auth::user()->createToken('my_awesome_api')->plainTextToken;

        return response()->json([
            'message' => 'Autenticación exitosa. Bienvenido(a) ' . Auth::user()->nombre . ' '. Auth::user()->apellido,
            'token' => $token
        ]);
    }


    public function logout ()
    {
        Auth::user()->tokens()->delete();

        return response()->json(['message' => 'Successfully logged out']);
    }

}
