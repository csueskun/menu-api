<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller {

    public function login(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required|string',
            'password' => 'required|string',
        ]);
        $credentials = $request->only(['nombre', 'password']);
        if (! $token = Auth::attempt($credentials)) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
        return $token;
    }
}
