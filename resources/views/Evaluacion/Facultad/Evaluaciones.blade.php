@extends('layouts.app')

@section('content')

<div class ="container">

	   <div>
  			<h1 class="text-center"> Lista de Evaluaciones por Realizar</h1>
			
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
				<th> Evaluacion Departamento</th>
				<td> Acciones </th>
			</thead>

			<tbody>
			<tr> 

			
			<td> 1 </td>
			<td> Juan carlos </td>
			<td> Informatica </td>
			<td> 3,5 </td>
			<td>  <a href="{{route('AFacultad')}}"  class="btn btn-primary"> Evaluar</a> </td>
			</tr>
			
			</tbody>

		</table>
</div>
</div>
</div>
		@endsection