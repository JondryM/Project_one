@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Registrar Funcionario</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
					<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
			@endif

			<form action="/historial/funcionarios/" method="POST">
			<input type="hidden" name="_token" value="{{csrf_token()}}">	
			<div class="form-group">
				<label for="rif">Rif</label>
				<input type="text" name="rif" class="form-control" placeholder="RIF....">
			</div>
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" class="form-control" placeholder="Nombre....">
			</div>
			<div class="form-group">
				<label for="apellido">Apellido</label>
				<input type="text" name="apellido" class="form-control" placeholder="Apellido....">
			</div>
			<div class="form-group">
				<label for="cedula">Cedula</label>
				<input type="text" name="cedula" class="form-control" placeholder="Cedula....">
			</div>
			<div class="form-group">
				<label for="correo">Correo</label>
				<input type="text" name="correo" class="form-control" placeholder="Correo....">
			</div>
			<div class="form-group">
				<label for="edad">Edad</label>
				<input type="text" name="edad" class="form-control" placeholder="Edad....">
			</div>
			<div class="form-group">
				<label for="fecha_nacimiento">Fecha de Naciemiento</label>
				<input type="text" name="fecha_nacimiento" class="form-control" placeholder="Fecha de Nacimiento....">
			</div>
			<div class="form-group">
				<label for="telefono">Telefono</label>
				<input type="text" name="telefono" class="form-control" placeholder="Telefono....">
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>

			</form>

		</div>

	</div>
</div>	
@endsection
