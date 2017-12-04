@extends('layouts.app')

@section('content')

<div class ="container">

 <br>
  <div class="jumbotron" align="center"  >
    <h1>EVALUACIONES</h1> 
    <p>  <a href="{{route('HEvaluaciones')}}" class="btn btn-primary"> INGRESAR</a> </p> 
  </div>
               
 <br>
  <div class="jumbotron " align="center">
    <h1>APELACIONES</h1> 
    <p><a href="{{route('Apelaciones')}}" class="btn btn-primary"> INGRESAR</a> </p> 
  </div>
</div>      

@endsection