@extends('layouts.dashboard')
@section('content')

<div class="col-md-12">
  Contenido
</div>
<div class="row">
<div class="container">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Listado de Historias Medicas <a href="/historial/historia/create"><button class ="btn btn-success">Nuevo</button></a></h3>
			@include('historial.historia.search')

	</div>

</div>
<div class="">

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
				@foreach ($historia as $hist)
				<tr>
					<td>{{$hist->idhistoria}}</td>
					<td>{{$hist->nombre_paciente}}</td>
					<td>{{$hist->apellido_paciente}}</td>
					<td>{{$hist->cedula_paciente}}</td>
					<td>{{$hist->edad}}</td>
					<td>{{$hist->fecha}}</td>
					<td>{{$hist->observaciones}}</td>
					<td>
						<a href="historia/edit/{{$hist->idhistoria}}"><button class="btn btn-info">Editar</button></a>
            <button class="btn btn-danger" id="delete" name="delete" value="{{ $hist->idhistoria }}" onclick="fnDelete('{{$hist->idhistoria}}')" data-toggle="tooltip" data-placement="right">
                <i class="fa fa-trash-o"></i> Eliminar </a>
            </button>


					</td>
				</tr>
				@endforeach
			</table>
		</div>
			{{$historia->render()}}
	</div>
  </div>
</div>

<script>
function fnDelete(id) {
    alertify.confirm("¿Esta seguro que desea eliminar esta cita?",
            function (e) {
                if (e) {
                    $.ajax({
                        url: '/historial/historia/borrar_historia/' + id,
                        type: 'get',
                        success: function (data) {
                            alertify.success('Historia eliminada');
                            $(".table-responsive").load("/historial/historia .table-responsive");
                        },error: function (err) {
                            console.log(err);
                        }
                    });
                    return false;
                } else {
                    alertify.error("Usted ha cancelado la solicitud");

                }
            },
            function () {
                var error = alertify.error('Cancel');
            });
}

</script>
@endsection
