<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model {

    protected $fillable = ["nombre", "descripcion", "precio", "producto_tipo_id", "negocio_id", "destacado", "active", "foto"];

    protected $dates = [];

    public static $rules = [
        "nombre" => "required",
        "precio" => "numeric",
        "producto_tipo_id" => "numeric",
        "negocio_id" => "numeric",
    ];

    public function producto_tipo()
    {
        return $this->belongsTo("App\ProductoTipo");
    }


}
