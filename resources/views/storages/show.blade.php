@extends ('layouts.admin')

@section('aside')
	@include('partials.aside')
@endsection


@section('contenido')
	@include('partials.hardware')
@endsection


@section ('contenido2')


				<div class="row">
                  <div class="col-lg-12 col-md-10 col-sm-12 col-xs-12">
                    <div class="box">
                                 <div class="box-header with-border">
                                    <h3>Detalles  <strong>Almacenamiento</strong> Equipo: <strong> {{$hardware->NAME}} </strong> <i class="fa fa-laptop"></i> </h3>
                                    <div class="box-tools pull-right">
                                      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                      
                                      <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                  </div>

                                 <div class="box-body"> 

																	<div class="row">
																		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																			<div class="table-responsive">
																				<table class="table table-striped table-bordered table-condensed table-hover">
																					<thead>
																						
																						<th>ID Equipo</th>
																						<th>ID</th>
																						<th>Nombre</th>
																						<th>Model</th>
																						<th>Descripción</th>
																						<th>Tipo</th>
																						<th>Tamaño del Disco</th>
																						<th>Serial</th>
																						<th>Firmware</th>					

																					</thead>
																	               <!--@foreach ($hardware->storages as $sto) -->
																					<tr>
																						<td>{{ $sto->hardware_id}}</td>
																						<td>{{ $sto->ID}}</td>
																						<td>{{ $sto->NAME}}</td>
																						<td>{{ $sto->MODEL}}</td>
																						<td>{{ $sto->DESCRIPTION}}</td>
																						<td>{{ $sto->TYPE}}</td>
																						<td>{{ $sto->DISKSIZE}}</td>
																						<td>{{ $sto->SERIALNUMBER}}</td>
																						<td>{{ $sto->FIRMWARE}}</td>
																					</tr>
																					<!--@endforeach-->
																				</table>
																			</div>
																			
																		</div>
																	</div>
																	</div>
																	</div>
																	</div>
																	</div>

@endsection