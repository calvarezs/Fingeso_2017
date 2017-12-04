@extends('layouts.app')

@section('content')

<div class ="container">

 <br>
  <div class="jumbotron " align="center">
    <h1>REGISTRAR ACTIVIDAD</h1> 
    <p>  <a href="{{route('CreateActividad')}}"  class="btn btn-primary"> INGRESAR</a> </p> 
  </div>
               
 <br>
  <div class="jumbotron " align="center">
    <h1>HISTORIAL DE ACTIVIDADES</h1> 
    <p>  <a href="{{route('HistorialActividad')}}"  class="btn btn-primary"> INGRESAR</a> </p> 
  </div>
</div>      

@endsection
