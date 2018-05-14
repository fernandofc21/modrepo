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
                                    <h3>Detalles  <strong>Softwares</strong> Equipo: <strong> {{$hardware->NAME}} </strong> <i class="fa fa-laptop"></i> </h3>
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
														<th>Version</th>
														<th>Carpeta</th>
														<th>Comentarios</th>
														<th>Name file</th>
														<th>Tamaño</th>
														<th>Fuente</th>
														<th>GUID</th>	
														<th>Idioma</th>	
														<th>Fecha Instalacion</th>	
														<th>BITSWIDTH</th>						

													</thead>
									               @foreach ($hardware->softwares as $sof)
													<tr>
														<td>{{ $sof->HARDWARE_ID}}</td>
														<td>{{ $sof->ID}}</td>
														<td>{{ $sof->PUBLISHER}}</td>
														<td>{{ $sof->VERSION}}</td>
														<td>{{ $sof->FOLDER}}</td>
														<td>{{ $sof->COMMENTS}}</td>
														<td>{{ $sof->FILENAME}}</td>
														<td>{{ $sof->FILESIZE}}</td>
														<td>{{ $sof->SOURCE}}</td>
														<td>{{ $sof->GUID}}</td>
														<td>{{ $sof->LANGUAGE}}</td>
														<td>{{ $sof->INSTALLDATE}}</td>
														<td>{{ $sof->BITSWIDTH}}</td>
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