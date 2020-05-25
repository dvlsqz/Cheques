@extends('layouts.admin')
@section('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Cheque: {{$cheque->no_cheque}}</h3>
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

			{!!Form::model($cheque,['method'=>'PATCH','route'=>['cheque.update',$cheque->id]])!!}
			{{Form::token()}}
			<div class="row">
				
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
						<label for="lugar">Lugar de Emisión</label>
						<input type="text" name="lugar" required value="{{$cheque->lugar}}" class="form-control" placeholder="Lugar de Emisión...">
					</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
						<label for="fecha">Fecha de Emisión</label>
						<input type="date" name="fecha" required value="{{$cheque->fecha}}" class="form-control" placeholder="Fecha de Emisión...">
					</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
							<label for="idchequera">Chequera del Cheque a Emitir</label>
							<select data-live-search="true" name="idchequera" id="idchequera" class="form-control selectpicker" <script src="{{asset('js/bootstrap.min.js')}}"></script>>
								@foreach($chequeras as $ch)
									<option value="{{$ch->id}}">{{$ch->chequera.' - '.$ch->no_cuenta.' - '.$ch->banco}}</option>
								@endforeach
							</select>
					</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
							<label for="idchequera">Proveedor que sera Portador del Cheque</label>
							<select data-live-search="true" name="idchequera" id="idchequera" class="form-control selectpicker" <script src="{{asset('js/bootstrap.min.js')}}"></script>>
								@foreach($proveedores as $p)
									<option value="{{$p->id}}">{{$p->nombre}}</option>
								@endforeach
							</select>
					</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
						<label for="chequera">Chequera</label>
						<input type="text" name="chequera" required value="{{$cheque->chequera}}" class="form-control" placeholder="Chequera...">
					</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
						<label for="no_cheque">Numero de Cheque a Emitir</label>
						<input type="number" min="1" step="1" name="no_cheque" required value="{{$cheque->no_cheque}}" class="form-control" placeholder="Numero de Cheque a Emitir...">
					</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
						<label for="monto">Monto en Quetzales</label>
						<input type="text" name="monto" required value="{{$cheque->monto}}" class="form-control" placeholder="Monto en Quetzales...">
					</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
						<label for="monto_letras">Monto en Letras</label>
						<input type="text" name="monto_letras" required value="{{$cheque->monto_letras}}" class="form-control" placeholder="Monto en Quetzales...">
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
