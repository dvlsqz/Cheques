@extends('layouts.admin')
@section('contenido')

	  <div class="row">

      

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="form-group">
            <label for="idcuenta">Cuenta de la Chequera</label>
            <input disabled  type="text" name="idcuenta" required value="{{$chequera->idcuenta}}" class="form-control" placeholder="Cuenta de la Chequera...">
          </div>
        </div>

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
				<label for="chequera">Chequera</label>
				<input disabled type="text" name="chequera" required value="{{$chequera->chequera}}" class="form-control" placeholder="Chequera...">
			</div>
		</div>

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
				<label for="observaciones">Observaciones</label>
				<input disabled type="text" name="observaciones" required value="{{$chequera->observaciones}}" class="form-control" placeholder="Observaciones...">
			</div>
		</div>

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
				<label for="ch_inicio">Cheque Inicial</label>
				<input disabled type="text" name="ch_inicio" required value="{{$chequera->ch_inicio}}" class="form-control" placeholder="Cheque Inicial...">
			</div>
		</div>

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
				<label for="ch_fin">Cheque Final</label>
				<input disabled type="text" name="ch_fin" required value="{{$chequera->ch_fin}}" class="form-control" placeholder="Cheque Final...">
			</div>
		</div>

    </div>

@endsection
