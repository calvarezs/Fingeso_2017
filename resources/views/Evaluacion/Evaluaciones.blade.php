@extends('layouts.app')

@section('content')

<div class ="container">

	   <div>
  			<h1 class="text-center"> Lista de Evaluaciones </h1>
			
  		</div>
  		<hr />
  		<div >

</div>
<br>
 <div>
		<table class="table table-bordered table-striped">
			<thead>
				<th> N°</th>
				<th> Fecha </th>
				<th> Nota Departamento  </th>
				<th> Nota Facultad </th>
				<th> Nota promedio </th>
			

			</thead>

			<tbody>
			@foreach ($apelaciones as $apelacion)
			<tr>
				<td>{{$apelacion->id}}</td> 
				<td>{{$apelacion->fecha}}</td> 
				<td>{{$apelacion->Puntaje_Departamento}}</td>
				<td>{{$apelacion->Puntaje_Facultad}}</td> 
				<td>{{$apelacion->Puntaje_Promedio}}</td>  
			</tr>
			@endforeach
			</tbody>

		</table>
</div>
</div>
</div>
		@endsection