@extends('layouts.app')

@section('content')

<div class ="container">

<br>
 <div>
	<table class="table table-bordered table-striped">
	<thead>
		<th> N°</th>
		<th> Fecha </th>
		<th> Estado </th> 
	</thead>
	<tbody>
	<tr> 
	@foreach ($convenios as $convenio)
	<tr>
		<td>{{$convenio->id}}</td> 
		<td>{{$convenio->fecha_creacion}}</td> 
		<td>{{$convenio->status}}</td> 
	</tr>
	@endforeach
	</tbody>
	</table>
</div>
</div>
</div>
		@endsection