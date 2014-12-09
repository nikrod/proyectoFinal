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

      </div><!-- /.container -->
    </nav>
  </div>
  
@stop

@section('content')

<div class="panel panel-default" style="margin-top: 40px;">
                        <div class="panel-heading">
                            
                            <h2><b>Bienvenido Alumno </b><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i></h2> 

                        </div>
                        <div class="panel-body">                  
                  
                        <div class="row">
                          <div class="col-sm-3">
                                          <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                    
                        <li>
                      <a class="list-group-item active">
    Asignaturas <i class="glyphicon glyphicon-pencil" aria-hidden="true"></i>
  </a>
</li>
<li class="dropdown" role="presentation">


              <a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="true">
                Primer Año
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">INTRODUCCIÓN A LA INGENIERÍA</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">TÉCNICAS DE LA COMUNICACIÓN ORAL Y ESCRITA</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">QUÍMICA GENERAL</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CÁLCULO I</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">ÁLGEBRA</a></li>
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">FÍSICA MECÁNICA</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">DIBUJO DE INGENIERÍA</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CIENCIAS DE LA COMPUTACIÓN</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CÁLCULO II</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">ÁLGEBRA LINEAL</a></li>
              </ul>
            </li> 
            <li class="dropdown" role="presentation">


              <a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="true">
                Segundo Año
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">ELECTROMAGNETISMO</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">LABORATORIO DE ELECTROMAGNETISMO</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CÁLCULO EN VARIAS VARIABLES</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">ECUACIONES DIFERENCIALES</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">LENGUAJES DE EXPRESIONES</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">PROGRAMACIÓN</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">INGLÉS TÉCNICO I</a></li>
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">ÓPTICA Y ONDAS</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">LABORATORIO DE ÓPTICA Y ONDAS</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CÁLCULO VECTORIAL</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">ESTADÍSTICA Y PROBABILIDAD</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">MÉTODOS NUMÉRICOS</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">ESTRUCTURAS DE DATOS</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">INGLÉS TÉCNICO II</a></li>
              </ul>
            </li> 
            <li class="dropdown" role="presentation">


              <a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="true">
                Tercer Año
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">FÍSICA MODERNA</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">LABORATORIO DE FÍSICA MODERNA</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">MECÁNICA RACIONAL</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">INFERENCIA ESTADÍSTICA</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">ELECTRICIDAD Y ELECTRÓNICA</a></li>
                 <li role="presentation"><a role="menuitem" tabindex="-1" href="#">LENGUAJES DE PROGRAMACIÓN</a></li>
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">SISTEMAS DE ADMINISTRACIÓN</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">INGENIERÍA DE SISTEMAS</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">ESTRUCTURAS DISCRETAS</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">TECNOLOGÍA DE EQUIPOS</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">BASES DE DATOS</a></li>
              </ul>
            </li> 
            <li class="dropdown" role="presentation">


              <a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="true">
                Cuarto Año
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">SISTEMAS ECONÓMICOS</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">INVESTIGACIÓN DE OPERACIONES</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">TEORÍA DE AUTÓMATAS</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">ORGANIZACIÓN DE COMPUTADORES</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">SISTEMAS DE INFORMACIÓN</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">ÉTICA PROFESIONAL</a></li>
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">EVALUACIÓN DE PROYECTOS</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">SIMULACIÓN DE SISTEMAS</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">ARQUITECTURA DE COMPUTADORES</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">SISTEMAS OPERATIVOS</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">INGENIERÍA DE SOFTWARE</a></li>
              </ul>
            </li> 
            <li class="dropdown" role="presentation">


              <a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="true">
                Quinto Año
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">GESTIÓN MEDIO AMBIENTAL</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">DESEMPEÑO DE SISTEMAS COMPUTACIONALES</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">ANÁLISIS DE ALGORITMOS</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">COMUNICACIÓN DE DATOS</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">TALLER DE SISTEMAS DE INFORMACIÓN</a></li>
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">GESTIÓN DE PERSONAL INFORMÁTICO</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">GESTIÓN INFORMÁTICA</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">OPTIMIZACIÓN DE SISTEMAS</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">COMPUTACIÓN PARALELA</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">AUDITORÍA DE SISTEMAS</a></li>
              </ul>
            </li> 
            <li class="dropdown" role="presentation">


              <a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="true">
                Sexto Año
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">GESTIÓN FINANCIERA DE TI</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">GESTIÓN DE PROYECTOS INFORMÁTICOS</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">INFORMÁTICA INDUSTRIAL</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">SISTEMAS DISTRIBUIDOS</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">TRABAJO DE TITULACIÓN I</a></li>
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">SISTEMAS INTEGRADOS DE INFORMACIÓN</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">TRABAJO DE TITULACIÓN II</a></li>
              </ul>
            </li> 
                        

                            <!-- /.nav-second-level -->
                        
                       

</div>

</div>

</div>
 <div class="col-sm-9">
   <p>                    
                          <b>Aquí podrá visualizar pautas y pruebas de sus asignaturas.</b>                                
                        </p>
                        <div class="bs-docs-section">                
<div class="panel panel-default">
<div class="panel-body">
  <div class="form-group">
   <p>Informática 2014<p>
   
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

<div class="container" style="margin-top: 65px;">
  <footer>© Administrador de Pautas y Tareas UTEM - 2014</footer>
    </div>
 @stop