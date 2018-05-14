@extends ('layouts.admin')
@section ('contenido')


<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Detalles Puertos: <i class="fa fa-laptop"></i> </h3>

	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>					
					<th>ID</th>
					<th>Hardware ID</th>
					<th>Tipo</th>
					<th>Nombre</th>
					<th>Caption</th>
					<th>Descripcion</th>
				</thead>
                  @foreach ($ports as $pri)
				<tr>
					<td>{{ $pri->ID}}</td>
					<td>{{ $pri->HARDWARE_ID}}</td>
					<td>{{ $pri->TYPE}}</td>
					<td>{{ $pri->NAME}}</td>
					<td>{{ $pri->CAPTION}}</td>
					<td>{{ $pri->DESCRIPTION}}</td>
				</tr>
				@endforeach
			</table>
		</div>
		{{$ports->render()}}
	</div>
</div>

@endsection