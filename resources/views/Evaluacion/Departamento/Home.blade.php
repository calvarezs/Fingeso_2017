@extends('layouts.app')

@section('content')

<div class ="container">

 <br>

  <div class="jumbotron" align="center"  >
    <h1>EVALUACIONES POR REALIZAR</h1> 
    <p>  <a href="{{route('Edepartamento') }}" class="btn btn-primary"> VER </a> </p> 
  </div>
  
 <br>
 
  <div class="jumbotron " align="center">
    <h1>HISTORIAL DE EVALUACIONES</h1> 
    <p>  <a href="{{route('hDepartamento')}}"  class="btn btn-primary"> VER</a> </p> 
  </div>
</div>      

@endsection