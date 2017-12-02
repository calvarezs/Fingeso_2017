<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
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
        return view('Actividad.HistorialActividades');
    }

    public function Registrar(){
        return view ('Actividad.RegistrarActividad');
    }
}