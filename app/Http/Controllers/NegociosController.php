<?php namespace App\Http\Controllers;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Negocio;
use App\Producto;

class NegociosController extends Controller {

    const MODEL = "App\Negocio";

    use RESTActions;
    use OtherActions;

    public function check(){
        $payload = JWTAuth::parseToken()->getPayload();
        return response()->json(['pl'=>$payload]);
    }
    
    public function negocioFromUser(){
        return Auth::user()->negocio_id;
    }
    public function getUserNegocio(){
        return response()->json($this->prepareNegocioMenu($this->negocioFromUser()));
    }
    public function prepareNegocioMenu($id){
        $menu = [];
        $preparedTipos = [];
        $tiposProductos = [];
        $productos = Producto::where('negocio_id', $id)->with('producto_tipo')->get()->toArray();

        for ($i=0; $i < count($productos); $i++) { 
            $producto = $productos[$i];
            $producto['precio'] = floatval($producto['precio']);
            $idTipo = $producto['producto_tipo_id'];
            if(!in_array($idTipo, $preparedTipos)){
                $preparedTipos[] = $idTipo;
                $menu[] = $producto['producto_tipo'];
                $tiposProductos['t'.$idTipo] = [];
            }
            $tiposProductos['t'.$idTipo][] = $producto;
        }
        for ($i=0; $i < count($menu); $i++){
            $tipo = $menu[$i];
            $tipo['productos'] = $tiposProductos['t'.$tipo['id']];
            $menu[$i] = $tipo;
        }
        return [
            'info'=>Negocio::find($id),
            'tipoProductoList'=>$menu
        ];
    }
}
