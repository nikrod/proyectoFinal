@extends('layouts.master')

@section('titulo')
    UTEM - Pautas
@stop   

@section('content')
<center>
          <div class="container">
          	<div class="panel-body">
        
          		<br>
          <h1>Ingeniería de Software</h1>
          <br>

         
              <div class="col-xs-4 col-md-4">
            	<a href="./administrador">
              <img src="images/utem.jpg" class="img-circle" style="width: 150px; height: 150px;">
               </a>

              <h4><strong><font color="white">ADMINISTRADOR</font></strong></h4>
              </div>
              
              <div class="col-xs-4 col-md-4">
            	<a href="./profesor">

             <img src="images/utem.jpg" class="img-circle" style="width: 150px; height: 150px;">
              </a>
              <h4><strong><font color="white">PROFESOR</font></strong></h4>
              </div>
            
           <div class="col-xs-4 col-md-4">
            	<a href="./alumno">
            <img src="images/utem.jpg" class="img-circle" style="width: 150px; height: 150px;">
             </a>
              <h4><strong><font color="white">ALUMNO</font></strong></h4>
            </div>
            
            </div>
        
    </div>


 
</center>


@stop