@extends('layouts.app')

@section('content')

<div class ="container">

	   <div>
  			<h1 class="text-center"> Lista de Convenios por Validar</h1>
			
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
				<th> Nombre Academico </th>
				<td> Acciones </th>
			</thead>

			<tbody>
			<tr> 

			
			<td> 1 </td>
			<td> 19/10/17</td>
			<td> Juan carlos </td>
			<td>  <a href="{{route('validar')}}"  class="btn btn-primary"> Detalles</a> </td>
			</tr>
			
			</tbody>

		</table>
</div>
</div>
</div>
		@endsection