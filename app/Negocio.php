<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Negocio extends Model {

    protected $fillable = ["nombre", "whatsapp", "logo"];

    protected $dates = [];

    public static $rules = [
        "nombre" => "required",
    ];
    protected $table = 'negocios';

    // Relationships

}
