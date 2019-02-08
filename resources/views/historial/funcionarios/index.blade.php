@extends('layouts.app')
@section('content')

<div class="col-md-12">
</div>
<div class="row">
<div class="container">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Listado de Funcionarios <a href="/historial/funcionarios/create"><button class ="btn btn-success">Nuevo</button></a></h3>
			@include('historial.funcionarios.search')

	</div>

</div>
<div class="">

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-haver">
				<thead>
					<th>Rif</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Cedula</th>
					<th>Correo</th>
					<th>Edad</th>
					<th>Fecha de Nacimiento</th>
					<th>Telefono</th>
				</thead>
				@foreach ($funcionario as $func)
				<tr>
					<td>{{$func->rif}}</td>
					<td>{{$func->nombre}}</td>
					<td>{{$func->apellido}}</td>
					<td>{{$func->cedula}}</td>
					<td>{{$func->correo}}</td>
					<td>{{$func->edad}}</td>
					<td>{{$func->fecha_nacimiento}}</td>
					<td>{{$func->telefono}}</td>
					<td>
						<a href="funcionarios/edit/{{$func->idfuncionario}}"><button class="btn btn-info">Editar</button></a>
            		<button class="btn btn-danger" id="delete" name="delete" value="{{ $func->idfuncionario }}" onclick="fnDelete('{{$func->idfuncionario}}')" data-toggle="tooltip" data-placement="right">
                		<i class="fa fa-trash-o"></i> Eliminar </a>
            		</button>


					</td>
				</tr>
				@endforeach
			</table>
		</div>
			{{$funcionario->render()}}
	</div>
  </div>
</div>

<script>
function fnDelete(id) {
    alertify.confirm("¿Esta seguro que desea eliminar este funcionario?",
            function (e) {
                if (e) {
                    $.ajax({
                        url: '/historial/funcionarios/borrar_funcionario/' + id,
                        type: 'get',
                        success: function (data) {
                            alertify.success('Funcionario eliminado');
                            $(".table-responsive").load("/historial/funcionarios.table-responsive");
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
