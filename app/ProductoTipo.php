<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoTipo extends Model {

    protected $fillable = ["nombre", "icon", "active"];

    protected $dates = [];

    public static $rules = [
        "nombre" => "required",
        "icon" => "required",
    ];

    public function productos()
    {
        return $this->hasMany("App\Producto");
    }


}
