@extends('layouts.app')

@section('content')


<div class="container">
        <h1 class="text-center"> PROPUSTA DE CONVENIO AÑO  <?php echo date("Y"); ?></h1>

</div>

<hr />
</header>

  <div>
 
  </div>
<body>

   <hr />  

<div class="container">
 <h2> Status: </h2> <h1>{{$convenio->status}}</h1>   



</div> 
   <hr />
<div class="container">

    <h3 class="text-center"> SEMESTRE 1 </h3> 
      <br> 
    <h4 class="text-center">{{$convenio->detalle_sem_1}}</h3> 
</div> 

<hr />
<div class="container">
   <hr />
    <h3 class="text-center"> SEMESTRE 2 </h3> 
      <br> 
      <h4 class="text-center">{{$convenio->detalle_sem_2}}</h3> 
</div> 

<hr />



<hr />
<div class="container">
    <h3 class="text-center"> COMENTARIOS </h3>
<div clas="text-center">
</div>
      <br>
      <div class="form-group"> 
                  <table class="table table-bordered table-striped">
                      <thead>
                        <th> N° </th>
                         <th> FECHA </th>
                        <th> NOMBRE </th>
                        <th> COMENTARIO</th>
                      
                      </thead>
                      <tbody> 
                      <td>{{$convenio->status}}</td>
                      <td>{{$convenio->status}}</td>
                      <td>{{$convenio->status}}</td>
                      <td>{{$convenio->status}}</td>
                  </tbody>
                  </table>
      </div>    
</div>
<hr />




</body>
@endsection