@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Equipos <i class="fa fa-laptop"></i> </h3>
		@include('inicio.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Nombre</th>
					<th>Grupo de Trabajo</th>
					<th>Sistema Operativo</th>
					<th>Procesador</th>
					<th>Memoria RAM</th>
					<th>Dirección IP</th>
				</thead>
               @foreach ($hardwares as $har)
				<tr>
					<td>{{ $har->ID}}</td>
					<td>{{ $har->NAME}}</td>
					<td>{{ $har->WORKGROUP}}</td>
					<td>{{ $har->OSNAME}}</td>
					<td>{{ $har->PROCESSORT}}</td>
					<td>{{ $har->MEMORY}}</td>
					<td>{{ $har->IPADDR}}</td>
					<td>
						<a href="{{URL::action('HardwareController@show',$har->ID)}}"><button class="btn btn-info">Detalles</button></a>
					</td>
				</tr>
				@endforeach
			</table>
		</div>
		{{$hardwares->render()}}
	</div>
</div>

@endsection