<h1>{{$titulo}}</h1>
<h2>Tema desde el controlador</h2>

@if(isset($pagina))
<h3>La pagina es {{$pagina}}</h3>
@endif

<a href="{{route('detalle')}}">ir al listado </a>