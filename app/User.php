<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'persona';

    protected $primaryKey = 'idPersona';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nacionalidad','cedula','nombre','apellido','FechaNacimiento','sexo','correo','clave','estado','tipo'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['clave', 'remember_token'];
    protected $guarded = 'idPersona';


    /**
     * Get the password for the user.
     * Traido de vendor/laravel/framework/src/Illuminate/Auth/GenericUser.php
     * @return string
     */
    public function getAuthPassword() {
        return $this->attributes['clave']; //campo en la BDD
    }
}
