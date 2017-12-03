<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'tipo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function directores()
    {
        return $this->belongsTo('App\Director','id_user');
    }

    public function comision_facultad()
    {
        return $this->belongsTo('App\ComisionFacultad','id_user');
    }

    public function comision_departamento()
    {
        return $this->belongsTo('App\ComisionDepartamento','id_user');
    }

    public function academicos()
    {
        return $this->belongsTo('App\Academico','id_user');
    }
}
