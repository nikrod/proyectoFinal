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
          <a class="navbar-brand" href="./">Administrador de Pautas y Tareas</a>
        </div>

      </div><!-- /.container -->
    </nav>
  </div>
  
@stop
@section('content')


                        <div class="panel panel-default" style="margin-top: 20px;">
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
  <div class="form-group">
    <label for="ejemplo_archivo_1">Adjuntar un archivo</label>
    <input type="file" id="ejemplo_archivo_1">
  </div>

  <button type="submit" class="btn btn-primary">Aceptar <i class="glyphicon glyphicon-paperclip" aria-hidden="true"></i></button>

                    
</div>
</div>
</div>
<div class="bs-docs-section">                
<div class="panel panel-default">
<div class="panel-body">
  <div class="form-group">
    <label>Agregar un Alumno</label>
    <br>
    <a href="#"><button type="submit" class="btn btn-primary">Agregar <i class="glyphicon glyphicon-plus" aria-hidden="true"></i></button></a>
  </div>

                    
</div>
</div>
</div>
 </div>
                            </div>

                        </div>
                        </div>
              
                    
                 

@stop
@section('footer')

<div class="container" style="margin-top: 55px;">
  <footer>© Administrador de Pautas y Tareas UTEM - 2014</footer>
    </div>
 @stop