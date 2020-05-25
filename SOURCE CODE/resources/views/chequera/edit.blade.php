@extends('layouts.admin')
@section('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Chequera: {{$chequera->chequera}}</h3>
			@if(count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
					<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
			@endif
		</div>
	</div>

			{!!Form::model($chequera,['method'=>'PATCH','route'=>['chequera.update',$chequera->id]])!!}
			{{Form::token()}}
			<div class="row">
				
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
							<label for="idcuenta">Cuenta de la Chequera</label>
							<select data-live-search="true" name="idcuenta" id="idcuenta" class="form-control selectpicker" <script src="{{asset('js/bootstrap.min.js')}}"></script>>
								@foreach($cuentas as $c)
									<option value="{{$c->id}}">{{$c->no_cuenta.' - '.$c->banco}}</option>
								@endforeach
							</select>
					</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
						<label for="chequera">Chequera</label>
						<input type="text" name="chequera" required value="{{$chequera->chequera}}" class="form-control" placeholder="Chequera...">
					</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
						<label for="observaciones">Observaciones</label>
						<input type="text" name="observaciones" required value="{{$chequera->observaciones}}" class="form-control" placeholder="Observaciones...">
					</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
						<label for="ch_inicio">Cheque Inicial</label>
						<input type="text" name="ch_inicio" required value="{{$chequera->ch_inicio}}" class="form-control" placeholder="Cheque Inicial...">
					</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
						<label for="ch_fin">Cheque Final</label>
						<input type="text" name="ch_fin" required value="{{$chequera->ch_fin}}" class="form-control" placeholder="Cheque Final...">
					</div>
				</div>

				


			</div>



			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>
			{!!Form::close()!!}
		</div>
	</div>
@endsection
