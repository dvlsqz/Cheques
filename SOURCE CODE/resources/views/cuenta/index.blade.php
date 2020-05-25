@extends('layouts.admin')
@section('contenido')
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-8 col-xs-12">
		<h4 class="page-head-line">Listado de Cuentas <a href="cuenta/create"><button class="btn btn-success">Crear</button></h4></a>
		@include('cuenta.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Opciones</th>
					<th>BANCO</th>
					<th>NO. CUENTA</th>
					<th>TIPO</th>
					<th>SALDO</th>
					<th>ESTADO</th>
				</thead>

				@foreach($cuentas as $c)
					<tr>
						<td>
							<a href="{{URL::action('CuentaController@edit', $c->id)}}">
								<button class="btn btn-sm btn-info  fa fa-edit" title="Editar" ></button> 
							</a>

							<a href="" data-target="#modal-delete-{{$c->id}}" data-toggle="modal">
								<button class="btn btn-sm btn-danger fa fa-trash" title="Eliminar"></button>
							</a>

							<a href="{{URL::action('CuentaController@show', $c->id)}}">
								<button class="btn btn-sm btn-warning fa fa-eye" title="Ver Datos" ></button>
							</a>
						</td>
						<td>{{$c->banco}}</td>
						<td>{{$c->no_cuenta}}</td>
						<td>{{$c->tipo}}</td>
						<td>Q.{{$c->saldo}}</td>
						<td>
							@if($c->condicion == 1)
								<p class="btn btn-sm btn-success">Activa</p>
							@else
								<p class="btn btn-sm btn-danger">Desactiva</p>
							@endif
						</td>
						
					</tr>
					@include('cuenta.modal')
				@endforeach
			</table>
		</div>
		{{$cuentas->render()}}
	</div>
</div>
@endsection
