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

			<form method="post" action="/historial/historia/updateser">

			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<input type="hidden" name="idhistoria" id="idhistoria" value="{{ $historia[0]->idhistoria }}">
			<div class="form-group">
				<label for="Nombre_Paciente">Nombre</label>
				<input type="text" name="nombre_paciente" class="form-control" placeholder="Nombre...." value="{{ $historia[0]->nombre_paciente }}">
			</div>
			<div class="form-group">
				<label for="apellido_paciente">Apellido</label>
				<input type="text" name="apellido_paciente" class="form-control" placeholder="Apellido...." value="{{ $historia[0]->apellido_paciente }}">
			</div>
			<div class="form-group">
				<label for="cedula_paciente">Cedula</label>
				<input type="text" name="cedula_paciente" class="form-control" placeholder="Cedula...." value="{{ $historia[0]->cedula_paciente }}">
			</div>
			<div class="form-group">
				<label for="edad">Edad</label>
				<input type="text" name="edad" class="form-control" placeholder="Edad...." value="{{ $historia[0]->edad }}">
			</div>
			<div class="form-group">
				<label for="fecha">Fecha</label>
				<input type="text" name="fecha" class="form-control" placeholder="Fecha...." value="{{ $historia[0]->fecha }}">
			</div>
			<div class="form-group">
				<label for="observaciones">Observaciones</label>
				<input type="text" name="observaciones" class="form-control" placeholder="Observaciones...." value="{{ $historia[0]->observaciones }}">
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
