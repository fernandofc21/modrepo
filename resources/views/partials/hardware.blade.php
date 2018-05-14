
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3><small class="label pull-left bg-blue">{{$hardware->NAME}}</small></h3>
		<h3>Detalles <i class="fa fa-laptop"></i> </h3>
					<!--{{ $hardware->ID}}
					{{ $hardware->NAME}}
					{{ $hardware->WORKGROUP}}
					{{ $hardware->USERID}}
					{{ $hardware->OSNAME}}
					{{ $hardware->OSVERSION}}
					{{ $hardware->PROCESSORT}}
					{{ $hardware->MEMORY}}
					{{ $hardware->IPADDR}}
					{{ $hardware->LASTDATE}}
					{{ $hardware->WINPRODID}}
					{{ $hardware->WINPRODKEY}} -->

	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>ID</th>
					<th>Nombre</th>
					<th>Grupo de Trabajo</th>
					<th>Usuario</th>
					<th>Sistema Operativo</th>
					<th>Version Sistema Operativo</th>
					<th>Procesador</th>
					<th>Memoria RAM</th>
					<th>Dirección IP</th>
					<th>Último Inventario</th>
					<th>Usuario Windows</th>
					<th>Licencia Windows</th>

				</thead>
				<tr>
					<td>{{ $hardware->ID}}</td>
					<td>{{ $hardware->NAME}}</td>
					<td>{{ $hardware->WORKGROUP}}</td>
					<td>{{ $hardware->USERID}}</td>
					<td>{{ $hardware->OSNAME}}</td>
					<td>{{ $hardware->OSVERSION}}</td>
					<td>{{ $hardware->PROCESSORT}}</td>
					<td>{{ $hardware->MEMORY}}</td>
					<td>{{ $hardware->IPADDR}}</td>
					<td>{{ $hardware->LASTDATE}}</td>
					<td>{{ $hardware->WINPRODID}}</td>
					<td>{{ $hardware->WINPRODKEY}}</td>
				</tr>
			</table>
			<a href="{{URL::action('HardwareController@pdf',$hardware->ID)}}"><button class="btn btn-danger">Exportar PDF</button></a>
		</div>
	</div>
</div>