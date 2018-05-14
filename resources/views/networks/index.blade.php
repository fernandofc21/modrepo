@extends ('layouts.admin2')
@section ('contenido')


<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Detalles Redes: <i class="fa fa-laptop"></i> </h3>

	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>					
					<th>ID</th>
					<th>Hardware ID</th>
					<th>Descripcion</th>
					<th>Tipo</th>
					<th>Tipo MIB</th>
					<th>Velocidad</th>					
					<th>MAC</th>
					<th>Estado</th>
					<th>Direccion IP</th>
					<th>Mascara de Subred</th>
					<th>Puerta de Enlace</th>
					<th>IP Subred</th>
					<th>IPDHCP</th>
				</thead>
                  @foreach ($networks as $pri)
				<tr>
					<td>{{ $pri->ID}}</td>
					<td>{{ $pri->HARDWARE_ID}}</td>
					<td>{{ $pri->DESCRIPTION}}</td>
					<td>{{ $pri->TYPE}}</td>
					<td>{{ $pri->TYPEMIB}}</td>
					<td>{{ $pri->SPEED}}</td>
					<td>{{ $pri->MACADDR}}</td>
					<td>{{ $pri->STATUS}}</td>
					<td>{{ $pri->IPADDRESS}}</td>
					<td>{{ $pri->IPMASK}}</td>
					<td>{{ $pri->IPGATEWAY}}</td>
					<td>{{ $pri->IPSUBNET}}</td>
					<td>{{ $pri->IPDHCP}}</td>
				</tr>
				@endforeach
			</table>
		</div>
		{{$networks->render()}}
	</div>
</div>

@endsection