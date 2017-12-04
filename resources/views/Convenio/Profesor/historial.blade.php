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
				<td> Acciones </th>
			</thead>
			<tbody>
			<tr> 
			@foreach ($convenios as $convenio)
            <tr>
                <td>{{$convenio->id}}</td> 
                <td>{{$convenio->fecha_creacion}}</td> 
				<td>{{$convenio->status}}</td>
				<td> 
                    	<form class="form-horizontal" method="POST" action="{{ route('DetallesConvenio') }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="idConvenio" value="{{$convenio->id}}">
                            <button type="submit" class="btn btn-primary">Ver mas</button> 
						</form>
                </td>
            </tr>
            @endforeach
			</tbody>
		</table>
</div>
</div>
</div>
		@endsection