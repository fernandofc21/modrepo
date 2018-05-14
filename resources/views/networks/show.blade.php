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
                                    <h3>Detalles  <strong>Redes</strong> Equipo: <strong> {{$hardware->NAME}} </strong> <i class="fa fa-wifi"></i> </h3>
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
					                  @foreach ($hardware->networks as $pri)
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
						</div>
					</div>
			</div>
		</div>
	</div>
</div>


@endsection