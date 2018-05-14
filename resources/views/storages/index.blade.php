@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Almacenamiento <i class="fas fa-hdd"></i> </h3>
		
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>ID</th>
					<th>ID Equipo</th>
					<th>Nombre</th>
					<th>Model</th>
					<th>Descripción</th>
					<th>Tipo</th>
					<th>Tamaño del Disco</th>
					<th>Serial</th>
					<th>Firmware</th>
				</thead>
               @foreach ($storages as $sto)
				<tr>
					<td>{{ $sto->ID}}</td>
					<td>{{ $sto->HARDWARE_ID}}</td>
					<td>{{ $sto->NAME}}</td>
					<td>{{ $sto->MODEL}}</td>
					<td>{{ $sto->DESCRIPTION}}</td>
					<td>{{ $sto->TYPE}}</td>
					<td>{{ $sto->DISKSIZE}}</td>
					<td>{{ $sto->SERIALNUMBER}}</td>
					<td>{{ $sto->FIRMWARE}}</td>

				</tr>
				@endforeach
			</table>
		</div>
		{{$storages->render()}}
	</div>
</div>

@endsection