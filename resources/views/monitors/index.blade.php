@extends ('layouts.admin2')
@section ('contenido')


<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Detalles Monitor Equipo:  <i class="fa fa-laptop"></i> </h3>

	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>					
					<th>ID</th>
					<th>Hardware ID</th>
					<th>Fabricante</th>
					<th>Caption</th>
					<th>Descripcion</th>
					<th>Tipo</th>
					<th>Serial</th>
				</thead>
                  @foreach ($monitors as $pri)
				<tr>
					<td>{{ $pri->ID}}</td>
					<td>{{ $pri->HARDWARE_ID}}</td>
					<td>{{ $pri->MANUFACTURER}}</td>
					<td>{{ $pri->CAPTION}}</td>
					<td>{{ $pri->DESCRIPTION}}</td>
					<td>{{ $pri->TYPE}}</td>
					<td>{{ $pri->SERIAL}}</td>

				</tr>
				@endforeach
			</table>
		</div>
		{{$monitors->render()}}
	</div>
</div>

@endsection