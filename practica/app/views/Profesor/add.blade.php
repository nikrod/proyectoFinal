@extends('layouts.master')

@section('titulo')
    UTEM - Profesor
@stop   

@section('content')
<center>
<div id="container">
    <br>
    <label>hola Profesorcito lindo salazarcito</label>
<p>hola</p>

    {{ Form::open(array('url' => 'Profesor/add', 'method' => 'post')) }}
  
    <label2>Rut</label2>
    {{Form::text('Rut_Prof')}}
     <label3>Clave</label3>
    {{Form::text('Clave')}}
     <label4>Nombre</label4>
    {{Form::text('Nombre')}}
     <label4>Apellido</label4>
    {{Form::text('Apellido')}}
    <label4>Codigo Depto</label4>
    {{Form::text('Departamento_Cod_Dpto')}}
    {{Form::submit('aceptar')}}
    
    {{Form::close()}}
    

    </div>
</center>
@stop

    












