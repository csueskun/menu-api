<?php namespace App\Http\Controllers;
use Tymon\JWTAuth\Facades\JWTAuth;

class NegociosController extends Controller {

    const MODEL = "App\Negocio";

    use RESTActions;

    public function check(){
        $payload = JWTAuth::parseToken()->getPayload();
        return response()->json(['pl'=>$payload]);
    }
}
