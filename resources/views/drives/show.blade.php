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
                                    <h3>Detalles  <strong>Unidades</strong></h3>
                                    <h3><small class="label pull-left bg-blue">{{$hardware->NAME}}</small></h3>
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
														<th>Unidad</th>
														<th>Tipo</th>
														<th>Formato</th>
														<th>Espacio Total (Mb)</th>
														<th>Espacio Libre (Mb)</th>
														<th>Numfiles</th>
														<th>Volumen</th>
														<th>Fecha</th>						
													</thead>
									                  @foreach ($hardware->drives as $pri)
													<tr>
														<td>{{ $pri->HARDWARE_ID}}</td>
														<td>{{ $pri->ID}}</td>
														<td>{{ $pri->LETTER}}</td>
														<td>{{ $pri->TYPE}}</td>
														<td>{{ $pri->FILESYSTEM}}</td>
														<td>{{ $pri->TOTAL}}</td>
														<td>{{ $pri->FREE}}</td>
														<td>{{ $pri->NUMFILES}}</td>
														<td>{{ $pri->VOLUMN}}</td>
														<td>{{ $pri->CREATEDATE}}</td>
													</tr>
													@endforeach
												</table>
											</div>
											
										</div>
									</div>
									<a href="{{URL::action('DrivesController@pdf',$hardware->ID)}}"><button class="btn btn-danger">Exportar PDF</button></a>
								</div>
							</div>
						</div>
					</div>		


@endsection