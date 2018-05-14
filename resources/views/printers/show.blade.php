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
                                    <h3>Detalles  <strong>Impresoras</strong> Equipo: <strong> {{$hardware->NAME}} </strong> <i class="fa fa-print"></i> </h3>
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
												<th>Hardware ID</th>
												<th>ID</th>
												<th>Nombre</th>
												<th>Driver</th>
												<th>Puerto</th>
												<th>Descripcion</th>						
											</thead>
							                  @foreach ($hardware->printers as $pri)
											<tr>
												<td>{{ $pri->HARDWARE_ID}}</td>
												<td>{{ $pri->ID}}</td>
												<td>{{ $pri->NAME}}</td>
												<td>{{ $pri->DRIVER}}</td>
												<td>{{ $pri->PORT}}</td>
												<td>{{ $pri->DESCRIPTION}}</td>
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