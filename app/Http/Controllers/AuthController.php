<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller {

    public function login(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required|string',
            'password' => 'required|string',
        ]);
        $credentials = $request->only(['nombre', 'password']);
        if (! $token = Auth::attempt($credentials)) {
            return response()->json([
                'message' => 'Nombre de usuario o contraseña incorrectos'],
            401);
        }
        $user = Auth::user();
        return response()->json([
            'user'=>[
                'nombre'=>$user->nombre,
                'negocio_id'=>$user->negocio_id,
                'token'=>$token,
                ]
            ]);
    }
}
