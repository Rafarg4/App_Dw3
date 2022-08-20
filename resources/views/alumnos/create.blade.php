<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

<div class="container">
	<div class="jumbotron">
	<h1>Crear alumno</h1>
	<form action="{{url('/alumnos')}}" method="post" enctype="multipart/from-data">
	@csrf
	<label for="nombre">Nombre de alumno</label>
	<input type="text" class="form-control" name="nombre" id="nombre">
	<label for="Apellido">Apellido</label>
	<input type="text" class="form-control" name="apellido" id="apellido">
	<label for="edad">Edad</label>
	<input type="number" class="form-control" name="edad" id="edad">
	<label for="ci">Ci</label>
	<input type="number" class="form-control" name="ci" id="ci">
	<label for="telefono">Telefono</label>
	<input type="number" class="form-control" name="telefono" id="telefono">
	<label for="direccion">Direccion</label>
	<input type="text" class="form-control" name="direccion" id="direccion">
	<br>
    <input type="submit" class="btn btn-primary" value="Guardar">
    <a class="pull-right" href="{{route('alumnos.index')}} "><button type="button" class="btn btn-danger">Cancelar</button></a>
		
	</form>
</div>
</div>