@extends('layouts.master')

@section('titulo')
    UTEM - Alumno
@stop   

@section('content')
<center>
<div id="container">
    <br>
<label>hola alumno</label>
<p>hola</p>

    {{ Form::open(array('url' => 'Alumnos/add', 'method' => 'post')) }}
  
    <label2>Rut</label2>
    {{Form::text('Rut_Alum')}}
     <label3>Clave</label3>
    {{Form::text('Clave')}}
     <label4>Nombre</label4>
    {{Form::text('Nombre')}}
     <label4>Apellido</label4>
    {{Form::text('Apellido')}}
    <label4>Codigo carrera</label4>
    {{Form::text('Carrera_Cod_Carrera')}}
    {{Form::submit('aceptar')}}

    
    {{Form::close()}}
    </div>
</center>
@stop

    










