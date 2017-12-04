@extends('layouts.app')

@section('content')

<div class ="container">

 <br>

  <div class="jumbotron" align="center"  >
    <h1>EVALUACIONES POR REALIZAR</h1> 
    <p>  <a href="{{route('Fdepartamento') }}" class="btn btn-primary"> VER </a> </p> 
  </div>
  

  
 <br>
  <div class="jumbotron" align="center"  >
    <h1>APELACIONES POR REVISAR</h1> 
    <p>  <a href="{{route('VerApelacion') }}" class="btn btn-primary"> VER </a> </p> 
  </div>
  
 <br>
  <div class="jumbotron " align="center">
    <h1>HISTORIAL DE EVALUACIONES</h1> 
    <p>  <a href="{{ route('HEvaluacionF') }}"  class="btn btn-primary"> VER</a> </p> 
  </div>
      

 <br>
  <div class="jumbotron " align="center">
    <h1>HISTORIAL DE APELACIONES</h1> 
    <p>  <a href="{{ route('HApelacion') }}"  class="btn btn-primary"> VER</a> </p> 
  </div>
</div> 

@endsection