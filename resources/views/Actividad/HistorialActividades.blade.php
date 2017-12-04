@extends('layouts.app')

@section('content')

<div class ="container">
	   <div>
  			<h1 class="text-center"> Lista de actividades </h1>
  		</div>
  		<hr />
  		<div >
 <a href="{{route('CreateActividad')}}"  class="btn btn-primary"> Nueva</a>
</div>
<br>
 <div>
		<table class="table table-bordered table-striped">
			<thead>
				<th> Titulo</th>
				<th> Tipo de Actividad</th>
				<th> Fecha</th>
				<th> Hora</th>
				<th> Ubicación</th>
				<th> Privacidad</th>
			</thead>

			<tbody>
			<tr> 
			@foreach ($actividades as $actividad)
            <tr>
                <td>{{$actividad->titulo}} </td>
                <td>{{$actividad->tipo_actividad}}</td>
                <td>{{$actividad->fecha}}</td>
                <td>{{$actividad->Hora}}</td>
                <td>{{$actividad->ubicacion}}</td>
				<td>{{$actividad->privacidad}}</td>
            </tr>
            @endforeach
			</tbody>

		</table>
</div>
</div>
</div>
		@endsection