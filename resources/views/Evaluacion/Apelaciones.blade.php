@extends('layouts.app')

@section('content')
<div class ="container">

    <br>
 </div>

<div class="container">
        <h1 class="text-center"> APELACIONES </h1>
</div>
<hr />
</header>

<body>
  

<div class="container">
    <h3 class="text-center"> APELACIONES DISPONIBLE </h3> 
      <br>
      <div class="form-group"> 
                  <table class="table table-bordered table-striped">
                      <thead>
                       <th> N°</th>
                         <th> Fecha </th>
                        <th> Nota Departamento  </th>
                        <th> Nota Facultad </th>
                        <th> Nota promedio </th>
                        <th> Acciones</th>
                      </thead> 
                      <tbody> 
                      @foreach ($apelaciones1 as $apelacion)
                        <tr>
                            <td>{{$apelacion->id}}</td> 
                            <td>{{$apelacion->fecha}}</td> 
                            <td>{{$apelacion->Puntaje_Departamento}}</td>
                            <td>{{$apelacion->Puntaje_Facultad}}</td> 
                            <td>{{$apelacion->Puntaje_Promedio}}</td> 
                        <form class="form-horizontal" method="POST" action="{{route('DetallesConvenio')}}">
                            {{ csrf_field() }}
                            <input type="hidden" name="idApelacion" value="{{$convenio->id}}">
                            <button type="submit" class="btn btn-primary">Apelar</button> 
            </form> </td>
                        </tr>
                        @endforeach
                  </tbody>
                  </table>
      </div> 
</div> 

<hr />
<div class="container">
    <h3 class="text-center"> ESTADO DE APELACIONES </h3>

      <br>
      <div class="form-group"> 
                  <table class="table table-bordered table-striped">
                      <thead>
                        <th> N°</th>
                        <th> Fecha </th>
                        <th> Nota Departamento  </th>
                        <th> Nota Facultad </th>
                        <th> Nota promedio </th>
                        <th> Nota Post Apelacion</th>
                        <th> Estado </th>
                    </thead>
                    <tbody> 
                        @foreach ($apelaciones2 as $apelacion)
                        <tr>
                            <td>{{$apelacion->id}}</td> 
                            <td>{{$apelacion->fecha}}</td> 
                            <td>{{$apelacion->Puntaje_Departamento}}</td>
                            <td>{{$apelacion->Puntaje_Facultad}}</td> 
                            <td>{{$apelacion->Puntaje_Promedio}}</td> 
                            <td>{{$apelacion->Puntaje_Apelacion}}</td>
                            @switch($apelacion->estado)
                                @case(0)
                                    <td>No apelado</td>
                                    @break

                                @case(1)
                                    <td>En proceso</td>
                                    @break

                                @case(2)
                                    <td>Corregida</td>
                                    @break

                                @default
                                    <td>No especificado</td>
                            @endswitch 
                        </tr>
                        @endforeach        
                  </tbody>
                  </table>
      </div> 

      <br>
      
</div>

<hr />

</body>
@endsection
