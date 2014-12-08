@if(Auth::check())
@extends('layouts.master')

@section('titulo')
    UTEM - Bienvenido
@stop 

@section('sidebar')

<div id="wrapper">
<nav class="navbar navbar-fixed-top navbar-inverse" role="navigation"  >
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./">Administración de Evaluaciones UTEM</a>
        </div>

        </div><!--/.nav-collapse -->
      </div>
    </nav>
  </div>
  
@stop
@section('content')


                        <div class="panel panel-default" style="margin-top: 40px;">
                        <div class="panel-heading">
                            
                            <h2><b>Bienvenido Profesor  </b><i class="glyphicon glyphicon-folder-open" aria-hidden="true"> </i></h2> 

                        </div>
                        <div class="panel-body">
                          <div class="row">
                          <div class="col-sm-3">
                               <div class="list-group">
  <a class="list-group-item active">
    Asignaturas <i class="glyphicon glyphicon-pencil" aria-hidden="true"></i>
  </a>
  <a href="#" class="list-group-item" data-target-id="Primer Año">Primer Año</a>
  <a href="#" class="list-group-item" data-target-id="Segundo Año">Segundo Año</a>
  <a href="#" class="list-group-item" data-target-id="Tercer Año">Tercer Año</a>
  <a href="#" class="list-group-item" data-target-id="Cuarto Año">Cuarto Año</a>
    <a href="#" class="list-group-item" data-target-id="Quinto Año">Quinto Año</a>
      <a href="#" class="list-group-item" data-target-id="Sexto Año">Sexto Año</a>
</div>

</div>
 <div class="col-sm-9">
   <p>                          
                              <b> Este es el panel de administración de su sitio web, en el cual
                                  usted podrá agregar, editar y eliminar archivos.</b>                                 
  </p>
<div class="bs-docs-section">                
<div class="panel panel-default">
<div class="panel-body">
<div class="panel panel-default">
                        <div class="panel-heading">
                           <label>Agregar un Archivo </label>
                           <br>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            Nuevo Archivo <i class="fa fa-plus-square"></i>
                            </button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Nueva Evaluacion</h4>
      </div>
      <div class="modal-body">
<!-- FORMULARIO -->
<form role="form" action="articulos/create" enctype="multipart/form-data" method="post" id="formulario">

  <div class="form-group">
    <label for="exampleInputEmail1">Titulo</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese el titulo" name="titulo" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Descripción</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese la descripción" name="descripcion" required>
  </div>
    <!-- CAMPO OCULTO CREADOR-->
          <input type="hidden" class="form-control" id="exampleInputEmail1" name="creador" >
  <!-- -->
  <!-- CAMPO OCULTO EDITOR-->
          <input type="hidden" class="form-control" id="exampleInputEmail1" name="editor" >
  <!-- -->
 <div class="form-group">
    <label for="exampleInputEmail1">Archivo <i class="fa fa-file-image-o"></i></label>
    <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Ingrese un archivo" accept="image/gif, image/jpeg, image/png" name="foto1" required>
 </div>

                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar <i class="fa fa-times"></i></button>
                            <button type="submit" class="btn btn-primary">Guardar Cambios <i class="fa fa-floppy-o"></i>
                            </button>
</form>
<!-- FIN FORMULARIO-->
      </div>
    </div>
  </div>
</div>
<!-- FIN DE Modal -->

                    
</div>
</div>
</div> 
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
              
                    
                 
@endif
@stop
@section('footer')

<div class="container" style="margin-top: 55px;">
  <footer>© Administrador de Pautas y Tareas UTEM - 2014</footer>
    </div>


 @stop