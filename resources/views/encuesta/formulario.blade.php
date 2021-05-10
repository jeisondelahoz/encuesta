<h1>Formulario</h1>
<form action="{{route('recibir')}}" method="POST">

{{ csrf_field() }}

    <Label for="nombre">Nombre</Label>
    <input type="text" name="nombre" />

    <Label for="email">correo</Label>
    <input type="email" name="email" />

    <input type="submit" value="Enviar" />

</form>