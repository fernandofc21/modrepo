@extends ('layouts.admin2')
@section ('contenido')


<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Detalles Impresoras Equipo: <i class="fa fa-laptop"></i> </h3>

	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Hardware ID</th>
					<th>ID</th>
					<th>Nombre</th>
					<th>Driver</th>
					<th>Puerto</th>
					<th>Descripcion</th>						
				</thead>
                  @foreach ($printers as $pri)
				<tr>
					<td>{{ $pri->HARDWARE_ID}}</td>
					<td>{{ $pri->ID}}</td>
					<td>{{ $pri->NAME}}</td>
					<td>{{ $pri->DRIVER}}</td>
					<td>{{ $pri->PORT}}</td>
					<td>{{ $pri->DESCRIPTION}}</td>
				</tr>
				@endforeach
			</table>
		</div>
		
	</div>
</div>

@endsection