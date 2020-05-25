@extends('layouts.admin')
@section('contenido')
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-8 col-xs-12">
		<h4 class="page-head-line">Listado de Bancos <a href="banco/create"><button class="btn btn-success">Crear</button></h4></a>
		@include('banco.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Opciones</th>
					<th>NOMBRE</th>
					<th>ASESOR Ó CONTACTO</th>
					<th>TELEFONO Ó CELULAR</th>
					<th>ESTADO</th>
				</thead>

				@foreach($bancos as $b)
					<tr>
						<td>
							<a href="{{URL::action('BancoController@edit', $b->id)}}">
								<button class="btn btn-sm btn-info  fa fa-edit" title="Editar" ></button>
							</a>

							<a href="" data-target="#modal-delete-{{$b->id}}" data-toggle="modal">
								<button class="btn btn-sm btn-danger fa fa-trash" title="Eliminar"></button>
							</a>

							<a href="{{URL::action('BancoController@show', $b->id)}}">
								<button class="btn btn-sm btn-warning fa fa-eye" title="Ver Datos" ></button>
							</a>
						</td>
						<td>{{$b->nombre}}</td>
						<td>{{$b->contacto}}</td>
						<td>{{$b->numero}}</td>
						<td>
							@if($b->condicion == 1)
								<p class="btn btn-sm btn-success">Activo</p>
							@else
								<p class="btn btn-sm btn-danger">Desactivo</p>
							@endif
						</td>
					</tr>
					@include('banco.modal')
				@endforeach
			</table>
		</div>
		{{$bancos->render()}}
	</div>
</div>
@endsection
