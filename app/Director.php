<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'directores';
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'fecha_inicio_cargo',
        'fecha_termino_cargo',
        'id_user'
    ]; 

    public function user()
    {
        return $this->hasOne('App\User','id_user');
    }

    public function academicos()
    {
        return $this->hasMany('App\Academico', 'directores_id');
    }  

    public function convenio_desempeño()
    {
        return $this->hasMany('App\ConvenioDesempeño', 'director_id');
    }  
}
