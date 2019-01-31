@extends('layouts.app')
@section('content')

<div class="col-md-12">
  Contenido
</div>
<div class="row">
<div class="container">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Listado de Inventario de Medicamentos <a href="/historial/medicamentos/create"><button class ="btn btn-success">Nuevo</button></a></h3>
			@include('historial.medicamentos.search')

	</div>

</div>
<div class="">

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-haver">
				<thead>
					<th>Nombre</th>
					<th>Descripcion</th>
					<th>Num_Inventario</th>
				</thead>
				@foreach ($medicamento as $med)
				<tr>
					<td>{{$med->nombre}}</td>
					<td>{{$med->descripcion}}</td>
					<td>{{$med->num_inventario}}</td>
					<td>
						<a href="medicamentos/edit/{{$med->idinventario}}"><button class="btn btn-info">Editar</button></a>
            <button class="btn btn-danger" id="delete" name="delete" value="{{ $med->idinventario }}" onclick="fnDelete('{{$med->idinventario}}')" data-toggle="tooltip" data-placement="right">
                <i class="fa fa-trash-o"></i> Eliminar </a>
            </button>


					</td>
				</tr>
				@endforeach
			</table>
		</div>
			{{$medicamento->render()}}
	</div>
  </div>
</div>

<script>
function fnDelete(id) {
    alertify.confirm("¿Esta seguro que desea eliminar este medicamento?",
            function (e) {
                if (e) {
                    $.ajax({
                        url: '/historial/medicamentos/borrar_medicamento/' + id,
                        type: 'get',
                        success: function (data) {
                            alertify.success('Medicamento eliminado');
                            $(".table-responsive").load("/historial/medicamentos.table-responsive");
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
