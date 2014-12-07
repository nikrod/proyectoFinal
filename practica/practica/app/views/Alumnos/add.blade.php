@extends('layouts.master')

@section('titulo')
    UTEM - Alumno
@stop   

@section('content')
<center>
<div id="container">
    <br>
    <br>
    <br>
<h2 class="form-signin-heading" style="font-size:25px;">Agregar Alumno</h2>
    <form class="form-signin" method="post" action="{{ URL::route('alumnos.store') }}" style="margin-top: 120px;">
    <input name="nombres" type="text" class="form-control" placeholder="Nombres" style="margin-top:10px;">
    <input name="apellidos" type="text" class="form-control" placeholder="Apellidos" style="margin-top: 10px;">
    <input name="rut" type="text" class="form-control" placeholder="Rut" id="rut" style="margin-top: 10px;">
    <input name="carrera" type="text" class="form-control" placeholder="Carrera" style="margin-top: 10px;">
    <br>
    <button type="submit" class="btn btn-primary">Aceptar <i class="glyphicon glyphicon-plus-sign" aria-hidden="true"></i></button>
    </form>
       
   
    </div>
</center>
@stop