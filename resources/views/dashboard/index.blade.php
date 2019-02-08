@extends('layouts.app')
@section('content')

<div class="col-md-12">
  Contenidoooo	
</div>
<div class="row">

	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Historias Medicas <a href="historial/historia/create"><button>Nuevo</button></a></h3>
			@include('historial.historia.search')
				
	</div>
	
</div>
<div class="row">

	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-haver">
				<thead>
					<th>Id</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Cedula</th>
					<th>Edad</th>
					<th>Fecha</th>
					<th>Observaciones</th>
					<th>Opciones</th>
				</thead>
			</table> 
		</div>
	</div>
	
</div>

@endsection