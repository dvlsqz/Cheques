@extends('layouts.admin')
@section('contenido')
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-8 col-xs-12">
		<h4 class="page-head-line">Listado de Proveedores <a href="proveedor/create"><button class="btn btn-success">Crear</button></h4></a>
		@include('proveedor.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Opciones</th>
					<th>NOMBRE</th>
					<th>TELEFONO Ó CELULAR</th>
					<th>ESTADO</th>
				</thead>

				@foreach($proveedores as $p)
					<tr>
						<td>
							<a href="{{URL::action('ProveedorController@edit', $p->id)}}">
								<button class="btn btn-sm btn-info  fa fa-edit" title="Editar" ></button>
							</a>

							<a href="" data-target="#modal-delete-{{$p->id}}" data-toggle="modal">
								<button class="btn btn-sm btn-danger fa fa-trash" title="Eliminar"></button>
							</a>

							<a href="{{URL::action('ProveedorController@show', $p->id)}}">
								<button class="btn btn-sm btn-warning fa fa-eye" title="Ver Datos" ></button>
							</a>
						</td>
						<td>{{$p->nombre}}</td>
						<td>{{$p->numero}}</td>
						<td>
							@if($p->condicion == 1)
								<p class="btn btn-sm btn-success">Activo</p>
							@else
								<p class="btn btn-sm btn-danger">Desactivo</p>
							@endif
						</td>
					</tr>
					@include('proveedor.modal')
				@endforeach
			</table>
		</div>
		{{$proveedores->render()}}
	</div>
</div>
@endsection
