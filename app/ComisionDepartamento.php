<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComisionDepartamento extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'comision_departamento';
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'correo',
        'director_departamento',
        'id_user'
    ];

    //hasmany acta preca
    //hasmany informeactividades
    //hasmany convenioDesempeño

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
