<ul>
@foreach($asignatura->archivos as $archivo)
<li>{{ $archivo->ruta  . ' ' . $archivo->nombre }}</li>
@endforeach
</ul>
