@extends('layouts.admin')
@section('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
			<h4 class="page-head-line">Nuevo Cheque</h4>
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

			{!!Form::open(array('url'=>'cheque','method'=>'POST','autocomplete'=>'off'))!!}
			{{Form::token()}}

			<div class="row">

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
						<label for="lugar">Lugar de Emisión</label>
						<input type="text" name="lugar" required value="{{old('lugar')}}" class="form-control" placeholder="Lugar de Emisión...">
					</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
						<label for="fecha">Fecha de Emisión</label>
						<input type="date" name="fecha" required value="{{old('fecha')}}" class="form-control" placeholder="Fecha de Emisión...">
					</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
							<label for="idchequera">Chequera del Cheque a Emitir</label>
							<select data-live-search="true" name="idchequera" id="idchequera" class="form-control selectpicker" <script src="{{asset('js/bootstrap.min.js')}}"></script>>
								@foreach($chequeras as $ch)
									<option value="{{$ch->id}}">{{$ch->chequera.' - '.$ch->cuenta.' - '.$ch->banco}}</option>
								@endforeach
							</select>
					</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
							<label for="idproveedor">Proveedor que sera Portador del Cheque</label>
							<select data-live-search="true" name="idproveedor" id="idproveedor" class="form-control selectpicker" <script src="{{asset('js/bootstrap.min.js')}}"></script>>
								@foreach($proveedores as $p)
									<option value="{{$p->id}}">{{$p->nombre}}</option>
								@endforeach
							</select>
					</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
						<label for="no_cheque">Numero de Cheque a Emitir</label>
						<input type="number" min="1" step="1" name="no_cheque" required value="{{old('no_cheque')}}" class="form-control" placeholder="Numero de Cheque a Emitir...">
					</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
						<label for="monto">Monto en Quetzales</label>
						<input type="text" name="monto" required value="{{old('monto')}}" class="form-control" placeholder="Monto en Quetzales...">
					</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
						<label for="monto_letras">Monto en Letras</label>
						<input type="text" name="monto_letras" required value="{{old('monto_letras')}}" class="form-control" placeholder="Monto en Quetzales...">
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
