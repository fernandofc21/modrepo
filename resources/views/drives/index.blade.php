@extends ('layouts.admin2')
@section ('contenido')


<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Detalles Dispositivos Equipo: <i class="fa fa-laptop"></i> </h3>

	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Hardware ID</th>
					<th>ID</th>
					<th>Unidad</th>
					<th>Tipo</th>
					<th>Formato</th>
					<th>Espacio Total (Mb)</th>
					<th>Espacio Libre (Mb)</th>
					<th>Numfiles</th>
					<th>Volumen</th>
					<th>Fecha</th>						
				</thead>
                  @foreach ($drives as $pri)
				<tr>
					<td>{{ $pri->HARDWARE_ID}}</td>
					<td>{{ $pri->ID}}</td>
					<td>{{ $pri->LETTER}}</td>
					<td>{{ $pri->TYPE}}</td>
					<td>{{ $pri->FILESYSTEM}}</td>
					<td>{{ $pri->TOTAL}}</td>
					<td>{{ $pri->FREE}}</td>
					<td>{{ $pri->NUMFILES}}</td>
					<td>{{ $pri->VOLUMN}}</td>
					<td>{{ $pri->CREATEDATE}}</td>
				</tr>
				@endforeach
			</table>
		</div>
		{{$drives->render()}}
	</div>
</div>

@endsection