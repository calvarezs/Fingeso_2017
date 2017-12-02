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
  

    public function user()
    {
        return $this->hasOne('App\User','id_user');
    }

    public function acta_precalificacion()
    {
        return $this->hasMany('App\ActaPrecalificacion','comision_departamento');
    }
    
    public function informe_actividades()
    {
        return $this->hasMany('App\InformeActividad','comision_departamento');
    }

    public function convenio_desempeño()
    {
        return $this->hasMany('App\ConvenioDesempeño','comision_departamento');
    }
}
