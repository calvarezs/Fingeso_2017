<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\ActaCalificacion;
use App\ActaPrecalificacion;
use Illuminate\Support\Facades\Input;
use Auth;

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
        if(!(Auth::check() && Auth::user()->tipo == 4))
        {
            return redirect()->route('home');
        } 

        return view('Evaluacion.HomeEvaluaciones');
    }
    
    public function ver(){
        if(!(Auth::check() && Auth::user()->tipo == 4))
        {
            return redirect()->route('home');
        }

        $apelaciones = ActaCalificacion::where('academico_id',Auth::user()->id)->where('estado',0)->get();   
        return view('Evaluacion.Evaluaciones',compact('apelaciones'));    
    }

    Public function ver_facultad(){
        if(!(Auth::check() && (Auth::user()->tipo == 2 || Auth::user()->tipo == 3)))
        {
            return redirect()->route('home');
        }
        
        return view('Evaluacion.Facultad.Home');
    }

    public function Evaluaciones_facultad(){
        if(!(Auth::check() && (Auth::user()->tipo == 2 || Auth::user()->tipo == 3)))
        {
            return redirect()->route('home');
        }
        
        return view('Evaluacion.Facultad.Evaluaciones');
    }

    public function evaluaciones_departamento(){
        if(!(Auth::check() && (Auth::user()->tipo == 2 || Auth::user()->tipo == 3)))
        {
            return redirect()->route('home');
        }
        
        return view('Evaluacion.Departamento.Evaluaciones');
    }
    public function detalles_evaluacion_departamento(){
        if(!(Auth::check() && (Auth::user()->tipo == 2 || Auth::user()->tipo == 3)))
        {
            return redirect()->route('home');
        }
        
        return view('Evaluacion.Departamento.agregarEvaluaciones');
    }

    public function detalles_evaluacion_Facultad(){
        if(!(Auth::check() && (Auth::user()->tipo == 2 || Auth::user()->tipo == 3)))
        {
            return redirect()->route('home');
        }
        return view('Evaluacion.Facultad.agregarEvaluaciones');
    }
     


    public function historial_departamento(){
        if(!(Auth::check() && (Auth::user()->tipo == 2 || Auth::user()->tipo == 3)))
        {
            return redirect()->route('home');
        }
        $evaluaciones=ActaPrecalificacion::All();  
        return view('Evaluacion.Departamento.HistorialEvaluaciones',compact('evaluaciones'));
    }

    public function historial_facultad(){
        if(!(Auth::check() && (Auth::user()->tipo == 2 || Auth::user()->tipo == 3)))
        {
            return redirect()->route('home');
        }
        $evaluaciones=ActaCalificacion::All();  
        return view('Evaluacion.Facultad.HistorialEvaluaciones',compact('evaluaciones'));
    }
    public function ver_apelaciones(){
        if(!(Auth::check() && (Auth::user()->tipo == 2 || Auth::user()->tipo == 3)))
        {
            return redirect()->route('home');
        }
        
        return view('Evaluacion.Facultad.apelaciones');
    }
    public function detalles_apelaciones(){
        if(!(Auth::check() && (Auth::user()->tipo == 2 || Auth::user()->tipo == 3)))
        {
            return redirect()->route('home');
        }
        
        return view('Evaluacion.Facultad.agregarApelaciones');
    }
    public function historial_apelaciones(){
        if(!(Auth::check() && (Auth::user()->tipo == 2 || Auth::user()->tipo == 3)))
        {
            return redirect()->route('home');
        }
        
        return view('Evaluacion.Facultad.HistorialApelaciones');
    }
    public function ver_departamento(){
        if(!(Auth::check() && (Auth::user()->tipo == 2 || Auth::user()->tipo == 3)))
        {
            return redirect()->route('home');
        }
        
        return view('Evaluacion.Departamento.Home');
    }
    public function apelacion()
    {
        $apelaciones1 = ActaCalificacion::where('academico_id',Auth::user()->id)->where('estado',0)->get(); 
        $apelaciones2 = ActaCalificacion::where('academico_id',Auth::user()->id)->whereNotIn('estado', [0])->get();    
        return view('Evaluacion.Apelaciones',compact('apelaciones1','apelaciones2'));    
    }

    public function cambiar_id(request $i)
    {
        $inputs=Input::all();
        $idApelacion = $inputs['id']; 
        $Apelacion=ActaCalificacion::find($idApelacion);

        $apelaciones1 = ActaCalificacion::where('academico_id',Auth::user()->id)->where('estado',0)->get(); 
        $apelaciones2 = ActaCalificacion::where('academico_id',Auth::user()->id)->whereNotIn('estado', [0])->get();    
        return view('Evaluacion.Apelaciones',compact('apelaciones1','apelaciones2')); 
    }
}


