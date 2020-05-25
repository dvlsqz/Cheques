@extends('layouts.admin')
@section('contenido')
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-8 col-xs-12">
		<h4 class="page-head-line">Listado de Cheques <a href="cheque/create"><button class="btn btn-success">Crear</button></h4></a>
		@include('cheque.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Opciones</th>
					<th>LUGAR Y FECHA</th>
					<th>CHEQUERA</th>
					<th>NO. CHEQUE</th>
					<th>PROVEEDOR</th>
					<th>MONTO</th>
					<th>ESTADO</th>
				</thead>

				@foreach($cheques as $che)
					<tr>
						<td>
							<a href="{{URL::action('ChequeController@edit', $che->id)}}">
								<button class="btn btn-sm btn-info  fa fa-edit" title="Editar" ></button> 
							</a>

							<a href="" data-target="#modal-delete-{{$che->id}}" data-toggle="modal">
								<button class="btn btn-sm btn-danger fa fa-trash" title="Eliminar"></button>
							</a>

							<a href="{{URL::action('ChequeController@show', $che->id)}}">
								<button class="btn btn-sm btn-warning fa fa-eye" title="Ver Datos" ></button>
							</a>
						</td>
						<td>{{$che->lugar.' '.$che->fecha}}</td>
						<td>{{$che->chequera}}</td>
						<td>{{$che->no_cheque}}</td>
						<td>{{$che->proveedor}}</td>
						<td>Q. {{$che->monto}}</td>
						<td>
							@if($che->condicion == 1)
								<p class="btn btn-sm btn-success">Registrado</p>
							@else
								<p class="btn btn-sm btn-danger">Anulado</p>
							@endif
						</td>
						
					</tr>
					@include('cheque.modal')
				@endforeach
			</table> 
		</div>
		{{$cheques->render()}}
	</div>
</div>
@endsection
