@extends('layouts.app')

@section('content')

<div class ="container">



	<div class="collapse navbar-collapse" id="app-navbar-collapse" style="background-color: #f08b24;">
     <div class="navbar-header">
            <a class="navbar-brand" href="#">Logotipo</a>
     </div>
    
                <ul class="nav navbar-nav" style="background-color: #ffff;">
                        &nbsp;
                </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ route('Actividades') }}">Actividades</a></li>
                        <li><a href="{{ route('Convenio') }}">Convenios</a></li>
                        <li><a href="{{ route('Evaluaciones') }}">Evaluaciones</a></li>               
                    </ul>
                </div>
	   <div>
  			<h1 class="text-center"> Lista de Convenios</h1>
			
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
				<td> Acciones </th>
			</thead>
			<tbody>
			<tr> 
			@foreach ($convenios as $convenio)
            <tr>
                <td>{{$convenio->id}} </td> 
                <td>{{$convenio->fecha_creacion}}</td> 
<<<<<<< HEAD
				<td>  <a href="{{route('DetallesConvenio/?', $convenio->id)}}"  class="btn btn-primary"> Detalles</a> </td>
=======
				         <td width="15%"> 
                      <form class="form-horizontal" method="POST" action="{{ route('DetallesConvenio') }}">
                                    {{ csrf_field() }}
                                     <input type="hidden" name="idConvenio" value="{{$convenio->id}}">
                                     <button type="submit" class="btn btn-primary">Ver mas</button> </form>
                                    </td>   
                  </td>
>>>>>>> 29bcfc6587474264b1409d01c9cdec4659c6bab5
            </tr>
            @endforeach
			</tbody>
		</table>
</div>
</div>
</div>
		@endsection