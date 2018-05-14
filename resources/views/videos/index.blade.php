@extends ('layouts.admin2')
@section ('contenido')


<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Detalles Videos Equipo: <i class="fa fa-laptop"></i> </h3>

	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>					
					<th>ID</th>
					<th>Hardware ID</th>
					<th>Nombre</th>
					<th>Memoria</th>
					<th>Resolucion</th>
				</thead>
                  @foreach ($videos as $pri)
				<tr>
					<td>{{ $pri->ID}}</td>
					<td>{{ $pri->HARDWARE_ID}}</td>
					<td>{{ $pri->NAME}}</td>
					<td>{{ $pri->MEMORY}}</td>					
					<td>{{ $pri->RESOLUTION}}</td>
				</tr>
				@endforeach
			</table>
		</div>
		{{$videos->render()}}
	</div>
</div>

@endsection