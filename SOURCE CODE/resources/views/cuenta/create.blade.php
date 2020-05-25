@extends('layouts.admin')
@section('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
			<h4 class="page-head-line">Nuevo Cuenta</h4>
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

			{!!Form::open(array('url'=>'cuenta','method'=>'POST','autocomplete'=>'off'))!!}
			{{Form::token()}}

			<div class="row">

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
							<label for="idbanco">Banco de la Cuenta</label>
							<select data-live-search="true" name="idbanco" id="idbanco" class="form-control selectpicker" <script src="{{asset('js/bootstrap.min.js')}}"></script>>
								@foreach($bancos as $b)
									<option value="{{$b->id}}">{{$b->nombre}}</option>
								@endforeach
							</select>
					</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
						<label for="no_cuenta">Numero de la Cuenta</label>
						<input type="text" name="no_cuenta" required value="{{old('no_cuenta')}}" class="form-control" placeholder="Numero de la Cuenta...">
					</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
							<label for="tipo">Tipo de Cuenta</label>
							<select data-live-search="true" name="tipo" id="tipo" class="form-control selectpicker" <script src="{{asset('js/bootstrap.min.js')}}"></script>>
								<option value="Monetaria">Monetaria</option>
								<option value="Ahorro">Ahorro</option>
							</select>
					</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
						<label for="saldo">Saldo de la Cuenta en Q.</label>
						<input type="text" name="saldo" required value="{{old('saldo')}}" class="form-control" placeholder="Saldo de la Cuenta en Q....">
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
