<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function enrutador()
    {
        if(Auth::check())
        {
            switch(Auth::user()->tipo)
            {
                case(1):
                    return redirect()->route('Convenio2');
                    break;

                case(2):
                    return redirect()->route('DepartamentoEvaluaciones');
                    break;

                case(3):
                    return redirect()->route('FacultadEvaluaciones');
                    break;

                case(4):
                    return redirect()->route('Actividades');
                    break;

                default:
                    return redirect()->route('home');
            } 
        } 
        else
        {
            return redirect()->route('home');
        } 
    }
}
