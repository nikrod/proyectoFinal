@extends('layouts.master')

@section('titulo')
    UTEM - Administrador
@stop   




@section('content')
<center>
<div id="container">
    <br>
<label>hola administrador</label>
<p>hola</p>

    {{ Form::open(array('url' => 'Administrador/add', 'method' => 'post')) }}
  
    <label2>Rut</label2>
    {{Form::text('Rut_Adm')}}
     <label3>Clave</label3>
    {{Form::text('Clave')}}
     <label4>Nombre</label4>
    {{Form::text('Nombre')}}
     <label4>Apellido</label4>
    {{Form::text('Apellido')}}
    {{Form::submit('aceptar')}}

    
    {{Form::close()}}
    
</div>
</center>
@stop








