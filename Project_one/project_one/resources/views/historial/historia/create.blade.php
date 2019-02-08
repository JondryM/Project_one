@extends('layouts.dashboard')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nueva Historia Medica</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
					<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
			@endif

			<form action="/historial/historia/" method="POST">
			<input type="hidden" name="_token" value="{{csrf_token()}}">	
			<div class="form-group">
				<label for="nombre_paciente">Nombre</label>
				<input type="text" name="nombre_paciente" class="form-control" placeholder="Nombre....">
			</div>
			<div class="form-group">
				<label for="apellido_paciente">Apellido</label>
				<input type="text" name="apellido_paciente" class="form-control" placeholder="Apellido....">
			</div>
			<div class="form-group">
				<label for="cedula_paciente">Cedula</label>
				<input type="text" name="cedula_paciente" class="form-control" placeholder="Cedula....">
			</div>
			<div class="form-group">
				<label for="edad">Edad</label>
				<input type="text" name="edad" class="form-control" placeholder="Edad....">
			</div>
			<div class="form-group">
				<label for="fecha">Fecha</label>
				<input type="date" name="fecha" class="form-control" placeholder="Fecha....">
			</div>
			<div class="form-group">
				<label for="observaciones">Observaciones</label>
				<input type="text" name="observaciones" class="form-control" placeholder="Observaciones....">
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
