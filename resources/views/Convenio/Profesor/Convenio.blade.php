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
    <br>
 </div>

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
 <h2> Status: </h2> <h1> {{$convenio->status}}</h1>   


</div> 
   <hr />
<div class="container">

    <h3 class="text-center"> SEMESTRE 1 </h3> 
      <br> 
      <h4 class="text-center">{{$convenio->detalle_sem_1}}</h4>
</div> 

<hr />
<div class="container">
   <hr />
    <h3 class="text-center"> SEMESTRE 2 </h3> 
      <br> 
      <h4 class="text-center">{{$convenio->detalle_sem_2}}</h4>
</div> 

<hr />



<hr />
<div class="container">
    <h3 class="text-center"> COMENTARIOS </h3>
<div clas="text-center">
<a href="#agregar"  data-toggle='modal' class="btn btn-primary"> Agregar comentario</a>
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
                      <td> </td>
                      <td> </td>
                      <td> </td>
                      <td> </td>
                  </tbody>
                  </table>
      </div>    
</div>
<hr />

</body>


<div class="modal fade"  id="agregar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
 
   <div  class="modal-dialog modal-md" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h5 class="" ass="modal-title" id="myModalLabel">Agregar comentario </h5>
        </div>
              
        <div class="modal-body">
       

               

                {{csrf_field()}}
            
                <textarea class="form-control" name="comentarios" id ="comentarios" placeholder="Escribir comentario" rows="10"></textarea>
                <div class ="container">
     <center><input type="submit" name="procesar" class="btn btn-primary" value="Agregar"></center>
    </div> 
  

          </div>
       </form>
      </div>
      </div>
     </div>
</div>

@endsection
