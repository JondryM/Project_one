@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Registrar Medicamento</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
					<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
			@endif

			<form action="/historial/medicamentos/" method="POST">
			<input type="hidden" name="_token" value="{{csrf_token()}}">	
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" class="form-control" placeholder="Nombre....">
			</div>
			<div class="form-group">
				<label for="descripcion">Descripcion</label>
				<input type="text" name="descripcion" class="form-control" placeholder="Descripcion....">
			</div>
			<div class="form-group">
				<label for="num_inventario">Numero_de_Inventario</label>
				<input type="text" name="num_inventario" class="form-control" placeholder="Numero de Inventario....">
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
