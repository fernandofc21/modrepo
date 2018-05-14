@extends ('layouts.pdftest')
@section ('contenido')

<!--  <p><strong>Reporte Puertos</strong><p>
<p>Equipo {{$hardware->NAME}}</p>

          
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-condensed">
							<thead class="thead-dark">					
								<th>ID</th>
								<th>Equipo ID</th>
								<th>Tipo</th>
								<th>Nombre</th>
								<th>Caption</th>
								<th>Descripcion</th>
							</thead>
							@foreach ($hardware->ports as $pri)
							<tr>
								<td>{{ $pri->ID}}</td>
								<td>{{ $pri->HARDWARE_ID}}</td>
								<td>{{ $pri->TYPE}}</td>
								<td>{{ $pri->NAME}}</td>
								<td>{{ $pri->CAPTION}}</td>
								<td>{{ $pri->DESCRIPTION}}</td>
							</tr>
							@endforeach
													</table>
												</div>  -->


<div class="container">
            <div class="row">
                <div class="col-xs-12">
                	
					<table class="table">
						<tbody>
							<tr>
							  <th width="20%">ID</th>
							  <td>{{ $pri->ID}}</td>
							</tr>

							<tr>
							  <th>ID Equipo</th>
							  <td>{{ $pri->HARDWARE_ID}}</td>
							</tr>

							<tr>
							  <th>Tipo</th>
							  <td>{{ $pri->TYPE}}</td>
							</tr>

							<tr>
							  <th>Nombre</th>
							  <td>{{ $pri->NAME}}</td>
							</tr>

							<tr>
							  <th>Caption</th>
							  <td>{{ $pri->CAPTION}}</td>
							</tr>

							<tr>
							  <th>Descripción</th>
							  <td>{{ $pri->DESCRIPTION}}</td>
							</tr>
						</tbody>
					</table>
					

                </div>
            </div>
        </div>
					
@endsection