<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class EvaluacionController extends Controller
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


    public function index()
    {
        return view('Evaluacion.HomeEvaluaciones');
    }
    
    public function ver(){
        return view('Evaluacion.Evaluaciones');    
    }

    Public function ver_facultad(){
         return view('Evaluacion.Facultad.Home');
    }

    public function Evaluaciones_facultad(){
        return view('Evaluacion.Facultad.Evaluaciones');
    }

    public function evaluaciones_departamento(){
        return view('Evaluacion.Departamento.Evaluaciones');
    }
    public function detalles_evaluacion_departamento(){
        
        return view('Evaluacion.Departamento.agregarEvaluaciones');
    }
    public function detalles_evaluacion_Facultad(){
        return view('Evaluacion.Facultad.agregarEvaluaciones');
    }

    public function historial_departamento(){
        return view('Evaluacion.Departamento.HistorialEvaluaciones');
    }

    public function historial_facultad(){
            return view('Evaluacion.Facultad.HistorialEvaluaciones');
    }
    public function ver_apelaciones(){
        return view('Evaluacion.Facultad.apelaciones');
    }
    public function detalles_apelaciones(){
                 return view('Evaluacion.Facultad.agregarApelaciones');
    }
    public function historial_apelaciones(){
            return view('Evaluacion.Facultad.HistorialApelaciones');
    }
    public function ver_departamento(){
        return view('Evaluacion.Departamento.Home');
    }
    public function apelacion(){
        return view('Evaluacion.Apelaciones');    
    }

}
