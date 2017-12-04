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
				<th> Puntaje </th>
				<th> Fecha </th>
			</thead>

			<tbody>
			
			@foreach ($evaluaciones as $evaluacion)
            <tr>
                <td>{{$evaluacion->id}}</td> 
                <td>{{$evaluacion->nombre}}</td> 
				<td>{{$evaluacion->calificacion}}</td>
				<td>{{$evaluacion->fecha}}</td>
			</tr>
			@endforeach

			</tbody>

		</table>
</div>
</div>
</div>
		@endsection