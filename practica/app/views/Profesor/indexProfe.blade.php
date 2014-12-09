@extends('layouts.asignaturasMaster')

@section('titulo')
    UTEM - Bienvenido
@stop 

@section('content')
 <div class="col-sm-9">
   <p>                          
                              <b> Este es el panel de administración de su sitio web, en el cual
                                  usted podrá agregar archivos y agregar un alumno.</b>                                 
  </p>
<div class="bs-docs-section">                
<div class="panel panel-default">
<div class="panel-body">             
<div class="panel panel-default">
<div class="panel-heading">
  <div class="form-group">
    <label>Agregar un Alumno</label>
    <br>
     <a href="{{ URL::route('alumnos.create') }}"><button class="btn btn-primary">Agregar <i class="fa fa-plus-square"></i></button></a>
  </div>


</div>
</div>
</div>
</div>
</div>
</div>
</div>
              
                    

@stop
