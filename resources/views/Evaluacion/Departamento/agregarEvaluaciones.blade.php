@extends('layouts.app')

@section('content')

<div class ="container">

<br>
 <div>
		<table class="table table-bordered table-striped">
			<thead>
				<th> Titulo</th>
				<th> Tipo de Actividad</th>
				<th> Fecha</th>
				<th> Hora</th>
				<th> Ubicación</th>	
	
			</thead>

			<tbody>
			<tr> 

			<td> Investigación sobre tema X</td>
			<td> Investigación</td>
			<td> 19/10/17</td>
			<td> 15:00</td>
			<td> Universidad de santiago</td>
		
			
			</tr>
			<tr>      
			<td> Investigación sobre tema Y</td>
			<td> Investigación</td>
			<td> 20/10/17</td>
			<td> 16:00</td>
			<td> Universidad de santiago</td>
			</tr>
				</tr>
			<tr>      
			<td> Exposición en colegio</td>
			<td> Vinculación con el medio</td>
			<td> 21/10/17</td>
			<td> 17:00</td>
			<td> Colegio Santa cruz</td>
			</tr>

			</tbody>

		</table>

</div>

  <div>
<hr />
<hr />
	<h1 class="text-center"> Evaluacion </h1>		
  	   </div>
  	<hr />
<br>
<label for="Horas"> Puntaje</label>
          <input class="form-control" id="Horas" type="number">

     
</div>
<br>
<div>
	  <a href="#"  class="btn btn-primary">  Evaluar</a>  
</div>
</div>
		@endsection