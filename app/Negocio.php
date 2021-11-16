<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Negocio extends Model {

    protected $fillable = ["nombre", "whatsapp", "logo", "sms", "recibe_whatsapp", "recibe_sms", "tema"];

    protected $dates = [];

    public static $rules = [
        "nombre" => "required",
    ];
    protected $table = 'negocios';

    public function productos()
    {
        return $this->hasMany("App\Producto");
    }

}
