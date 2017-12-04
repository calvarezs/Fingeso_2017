<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\HistorialActividades;
use Auth;

class ActividadController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function Index(){ 
        return view ('Actividad.HomeActividades');
    }

    public function Historial()
    {
        $actividades=HistorialActividades::All();//where('id_usuario', '>', 0);//Auth::user()->id
        return view('Actividad.HistorialActividades',compact('actividades'));
    }

    public function Registrar(){
        return view ('Actividad.RegistrarActividad');

    }

    public function new_actividades(Request $data){
        $actividad = new HistorialActividades();
        $actividad->id_usuario = Auth::user()->id;
        $actividad->titulo = $data->titulo;
        $actividad->detalles_actividad = $data->detalles;
        $actividad->tipo_actividad = $data->Tipo;
        $actividad->ubicacion = $data->Ubicacion;
        $actividad->fecha = $data->Fecha;
        $actividad->Hora = $data->hora; 
        $actividad->privacidad = $data->privacidad;
        $actividad->save();
        return redirect()->route('HistorialActividad');
    } 
}
