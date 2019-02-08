@extends('layouts.dashboard')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
					<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>

			@endif

			<form method="post" action="/historial/funcionarios/updateser">

			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<input type="hidden" name="idfuncionario" id="idfuncionario" value="{{ $funcionario[0]->idfuncionario }}">
			<div class="form-group">
				<label for="rif">Rif</label>
				<input type="text" name="rif" class="form-control" placeholder="Rif...." value="{{ $funcionario[0]->nombre }}">
			</div>
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" class="form-control" placeholder="Nombre...." value="{{ $funcionario[0]->nombre }}">
			</div>
			<div class="form-group">
				<label for="apellido">Apellido</label>
				<input type="text" name="apellido" class="form-control" placeholder="Apellido...." value="{{ $funcionario[0]->apellido }}">
			</div>
			<div class="form-group">
				<label for="cedula">Cedula</label>
				<input type="text" name="cedula" class="form-control" placeholder="Cedula...." value="{{ $funcionario[0]->cedula }}">
			</div>
			<div class="form-group">
				<label for="correo">Correo</label>
				<input type="text" name="correo" class="form-control" placeholder="Correo...." value="{{ $funcionario[0]->correo }}">
			</div>
			<div class="form-group">
				<label for="edad">Edad</label>
				<input type="text" name="edad" class="form-control" placeholder="Edad...." value="{{ $funcionario[0]->edad }}">
			</div>
			<div class="form-group">
				<label for="fecha_nacimiento">Fecha de Nacimiento</label>
				<input type="text" name="fecha_nacimiento" class="form-control" placeholder="Fecha de Nacimiento...." value="{{ $funcionario[0]->fecha_nacimiento }}">
			</div>
			<div class="form-group">
				<label for="telefono">Telefono</label>
				<input type="text" name="telefono" class="form-control" placeholder="Telefono...." value="{{ $funcionario[0]->telefono }}">
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
