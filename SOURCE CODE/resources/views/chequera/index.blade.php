@extends('layouts.admin')
@section('contenido')
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-8 col-xs-12">
		<h4 class="page-head-line">Listado de Chequeras <a href="chequera/create"><button class="btn btn-success">Crear</button></h4></a>
		@include('chequera.search')
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
					<th>CHEQUERA</th>
					<th>OBSERVACIONES</th>
					<th>CHEQUE INICIAL</th>
					<th>CHEQUE FINAL</th>
					<th>ESTADO</th>
				</thead>

				@foreach($chequeras as $ch)
					<tr>
						<td>
							<a href="{{URL::action('ChequeraController@edit', $ch->id)}}">
								<button class="btn btn-sm btn-info  fa fa-edit" title="Editar" ></button> 
							</a>

							<a href="" data-target="#modal-delete-{{$ch->id}}" data-toggle="modal">
								<button class="btn btn-sm btn-danger fa fa-trash" title="Eliminar"></button>
							</a>

							<a href="{{URL::action('ChequeraController@show', $ch->id)}}">
								<button class="btn btn-sm btn-warning fa fa-eye" title="Ver Datos" ></button>
							</a>
						</td>
						<td>{{$ch->banco}}</td>
						<td>{{$ch->cuenta}}</td>
						<td>{{$ch->chequera}}</td>
						<td>{{$ch->observaciones}}</td>
						<td>{{$ch->ch_inicio}}</td>
						<td>{{$ch->ch_fin}}</td>
						<td>
							@if($ch->condicion == 1)
								<p class="btn btn-sm btn-success">Activa</p>
							@else
								<p class="btn btn-sm btn-danger">Desactiva</p>
							@endif
						</td>
						
					</tr>
					@include('chequera.modal')
				@endforeach
			</table>
		</div>
		{{$chequeras->render()}}
	</div>
</div>
@endsection
