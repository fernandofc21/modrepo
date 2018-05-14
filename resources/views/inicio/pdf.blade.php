@extends ('layouts.pdftest')

@section('contenido')
<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>

<body>
	<p>Reporte Equipo: <strong>{{$hardware->NAME}}</strong></p>
<div class="container">
            <div class="row">
                <div class="col-xs-12">
                	
					<table class="table">
						<tbody>
							<tr>
							  <th width="20%">ID</th>
							  <td>{{ $hardware->ID}}</td>
							</tr>

							<tr>
							  <th>Nombre</th>
							  <td>{{ $hardware->NAME}}</td>
							</tr>

							<tr>
							  <th>Grupo de Trabajo</th>
							  <td>{{ $hardware->WORKGROUP}}</td>
							</tr>

							<tr>
							  <th>Usuario</th>
							  <td>{{ $hardware->USERID}}</td>
							</tr>

							<tr>
							  <th>Sistema Operativo</th>
							  <td>{{ $hardware->OSNAME}}</td>
							</tr>
							
							<tr>
							  <th>Version Sistema Operativo</th>
							  <td>{{ $hardware->OSVERSION}}</td>
							</tr>

							<tr>
							  <th>Procesador</th>
							  <td>{{ $hardware->PROCESSORT}}</td>
							</tr>

							<tr>
							  <th>Memoria RAM</th>
							  <td>{{ $hardware->MEMORY}}</td>
							</tr>

							<tr>
							  <th>Dirección IP</th>
							  <td>{{ $hardware->IPADDR}}</td>
							</tr>

							<tr>
							  <th>Último Inventario</th>
							  <td>{{ $hardware->LASTDATE}}</td>
							</tr>
							
							<tr>
							  <th>Usuario Windows</th>
							  <td>{{ $hardware->WINPRODID}}</td>
							</tr>

							<tr>
							  <th>Licencia Windows</th>
							  <td>{{ $hardware->WINPRODKEY}}</td>
							</tr>


						</tbody>
					</table>
					

                </div>
            </div>
</div>
</body>
</html>
@endsection


<!--<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<h3>{{$hardware->NAME}}</h3>	
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
		</div>
	</div>
</div> -->




