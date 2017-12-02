@extends('layouts.app')

@section('content')


<div class ="container">
<div class="collapse navbar-collapse" id="app-navbar-collapse" style="background-color: #f08b24;">
     <div class="navbar-header">
            <a class="navbar-brand" href="#">Logotipo</a>
     </div>
    
                <ul class="nav navbar-nav" style="background-color: #ffff;">
                        &nbsp;
                </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ route('home') }}">Actividades</a></li>
                        <li><a href="{{ route('home') }}">Convenios</a></li>
                        <li><a href="{{ route('home') }}">Evaluaciones</a></li>               
                    </ul>
                </div>
 <br>
  <div class="jumbotron " align="center">
    <h1>REGISTRAR ACTIVIDAD</h1> 
    <p>  <a href=""  class="btn btn-primary"> INGRESAR</a> </p> 
  </div>
               
 <br>
  <div class="jumbotron " align="center">
    <h1>HISTORIAL DE ACTIVIDADES</h1> 
    <p>BOTON </p> 
  </div>
</div>      

@endsection
