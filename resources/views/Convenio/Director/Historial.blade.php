@extends('layouts.app')

@section('content')

<div class ="container">



	<div class="collapse navbar-collapse" id="app-navbar-collapse" style="background-color: #f08b24;">
     <div class="navbar-header">
            <a class="navbar-brand" href="#">Logotipo</a>
     </div>
     <div>  <ul class="nav navbar-nav" style="background-color: #ffff;">
                        &nbsp;
              </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ route('Convenio2')}}">Convenios</a></li>               
                    </ul></div>


</div>
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