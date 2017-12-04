@extends('layouts.app')

@section('content')

<div class ="container">

	   <div>
  			<h1 class="text-center"> Lista de Evaluaciones Realizadas</h1>
			
  		</div>
  		<hr />
  		<div >

</div>
<br>
 <div>
		<table class="table table-bordered table-striped">
			<thead>
				<th> N°</th>
				<th> Nombre Academico </th>
				<th> Departamento </th>
				<th> Puntaje Departamento </th>
				<th> Puntaje Facultad </th>
				<th> Puntaje Promedio </th>
				<th> Fecha </th>
			</thead>

			<tbody>
			<tr> 
			@foreach ($evaluaciones as $evaluacion)
            <tr>
                <td>{{$evaluacion->id}}</td> 
                <td>{{$evaluacion->nombre}}</td> 
				<td>{{$evaluacion->Departamento}}</td>
				<td>{{$evaluacion->Puntaje_Departamento}}</td>
				<td>{{$evaluacion->Puntaje_Facultad}}</td> 
				<td>{{$evaluacion->Puntaje_Promedio}}</td>
				<td>{{$evaluacion->fecha}}</td> 
			</tr>
			@endforeach
			</tr>
			</tbody>

		</table>
</div>
</div>
</div>
		@endsection