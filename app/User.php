<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

use Tymon\JWTAuth\Contracts\JWTSubject;


class User extends Model implements AuthenticatableContract, AuthorizableContract, JWTSubject{

    use Authenticatable, Authorizable;

    protected $fillable = ["nombre", "password", "negocio_id", "active_session"];

    protected $dates = [];

    public static $rules = [
        "nombre" => "required",
        "password" => "required",
        "negocio_id" => "numeric",
    ];

    public function negocio()
    {
        return $this->hasOne("App\Negocio");
    }


    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [
            'nombre'=> $this->nombre,
            'active_session'=> $this->active_session,
            'negocio_id'=> $this->negocio_id,
        ];
    }
}
