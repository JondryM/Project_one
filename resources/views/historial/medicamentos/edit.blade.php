@extends('layouts.app')
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

			<form method="post" action="/historial/medicamentos/updateser">

			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<input type="hidden" name="idinventario" id="idinventario" value="{{ $medicamento[0]->idinventario }}">
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" class="form-control" placeholder="Nombre...." value="{{ $medicamento[0]->nombre }}">
			</div>
			<div class="form-group">
				<label for="descripcion">Descripcion</label>
				<input type="text" name="descripcion" class="form-control" placeholder="Descripcion...." value="{{ $medicamento[0]->descripcion }}">
			</div>
			<div class="form-group">
				<label for="num_inventario">Numero_de_Inventario</label>
				<input type="text" name="num_inventario" class="form-control" placeholder="Numero de Inventario...." value="{{ $medicamento[0]->num_inventario }}">
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
