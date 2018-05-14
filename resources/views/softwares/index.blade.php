@extends ('layouts.admin')
@section ('contenido')


<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Detalles Softwares Equipo: 444<i class="fa fa-laptop"></i> </h3>

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
					<th>Version</th>
					<th>Carpeta</th>
					<th>Comentarios</th>
					<th>Name file</th>
					<th>Tamaño</th>
					<th>Fuente</th>
					<th>GUID</th>	
					<th>Idioma</th>	
					<th>Fecha Instalacion</th>	
					<th>BITSWIDTH</th>						

				</thead>
                  @foreach ($softwares as $sof)
				<tr>
					<td>{{ $sof->HARDWARE_ID}}</td>
					<td>{{ $sof->ID}}</td>
					<td>{{ $sof->PUBLISHER}}</td>
					<td>{{ $sof->VERSION}}</td>
					<td>{{ $sof->FOLDER}}</td>
					<td>{{ $sof->COMMENTS}}</td>
					<td>{{ $sof->FILENAME}}</td>
					<td>{{ $sof->FILESIZE}}</td>
					<td>{{ $sof->SOURCE}}</td>
					<td>{{ $sof->GUID}}</td>
					<td>{{ $sof->LANGUAGE}}</td>
					<td>{{ $sof->INSTALLDATE}}</td>
					<td>{{ $sof->BITSWIDTH}}</td>
				</tr>
				@endforeach
			</table>
		</div>
		{{$softwares->render()}}
	</div>
</div>

@endsection