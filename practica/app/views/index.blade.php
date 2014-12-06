@extends('layouts.master')

@section('titulo')
    UTEM - Administrador Pautas y Tareas
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
          <a class="navbar-brand" href="./">Administrador de Pautas y Tareas UTEM</a>
        </div>

          <ul class="nav navbar-nav navbar-right">
            <a href="/login"><button type="button" class="btn btn-primary navbar-btn"><i class="glyphicon glyphicon-user" aria-hidden="true"></i> Ingresar al Portal</button></a>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
      <div class="container">
        <br>
        <br>
    <div id="wowslider-container1">
    <div class="ws_images"><ul>
                <li><img src="WOW Slider/data1/images/a.jpg" alt="img1" title="" id="wows1_0"/></li>
                <li><a href="#" target="_blank"><img src="WOW Slider/data1/images/d.jpg" alt="img2" title="" id="wows1_1"/></a></li>
                <li><a href="#"><img src="WOW Slider/data1/images/a.jpg" alt="full width slider" title="" id="wows1_2"/></a></li>
                <li><img src="WOW Slider/data1/images/d.jpg" alt="img4" title="" id="wows1_3"/></li>
                </ul></div>
                <div class="ws_bullets"><div>
                <a href="#" title="img1"></a>
                <a href="#" title="img2"></a>
                <a href="#" title="img3"></a>
                <a href="#" title="img4"></a>
          </div></div>
          <a href="#" class="ws_frame"></a>
          <div class="ws_shadow"></div>
    </div>
    <script type="text/javascript" src="WOW Slider/engine1/wowslider.js"></script>
    <script type="text/javascript" src="WOW Slider/engine1/script.js"></script>
          </div>
             </div>

@stop

@section('footer')

<div class="container">
  <footer>© Administrador de Pautas y Tareas UTEM - 2014</footer>
    </div>
 @stop 