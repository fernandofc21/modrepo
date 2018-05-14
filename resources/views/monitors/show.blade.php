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
                                    <h3>Detalles  <strong>Monitor</strong> Equipo: <strong> {{$hardware->NAME}} </strong> <i class="fa fa-laptop"></i> </h3>
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
														<th>Fabricante</th>
														<th>Caption</th>
														<th>Descripcion</th>
														<th>Tipo</th>
														<th>Serial</th>
													</thead>
									                  @foreach ($hardware->monitors as $pri)
													<tr>
														<td>{{ $pri->ID}}</td>
														<td>{{ $pri->HARDWARE_ID}}</td>
														<td>{{ $pri->MANUFACTURER}}</td>
														<td>{{ $pri->CAPTION}}</td>
														<td>{{ $pri->DESCRIPTION}}</td>
														<td>{{ $pri->TYPE}}</td>
														<td>{{ $pri->SERIAL}}</td>
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