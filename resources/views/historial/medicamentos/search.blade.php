<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
<form action='medicamentos' method="GET">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<div class="form-group">
	<div class="input-group">
		<input type="text" class="form-control" name="searchText" placeholder="Buscar....." value="{{$searchText}}">
		<span class="input-group-btn">
			<button type="submit" class="btn btn-primary">Buscar</button>
		</span>	
	</div>	
</div>
</form>
