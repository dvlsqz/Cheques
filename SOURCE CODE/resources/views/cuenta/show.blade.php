@extends('layouts.admin')
@section('contenido')

	  <div class="row">

      

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="form-group">
            <label for="idbanco">Banco de la Cuenta</label>
            <input disabled  type="text" name="idbanco" required value="{{$cuenta->idbanco}}" class="form-control" placeholder="Banco de la Cuenta...">
          </div>
        </div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
						<label for="no_cuenta">Numero de la Cuenta</label>
						<input disabled type="text" name="no_cuenta" required value="{{$cuenta->no_cuenta}}" class="form-control" placeholder="Numero de la Cuenta...">
					</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="form-group">
            <label for="tipo">Tipo de Cuenta</label>
            <input disabled  type="text" name="tipo" required value="{{$cuenta->tipo}}" class="form-control" placeholder="Tipo de Cuenta...">
          </div>
        </div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
						<label for="saldo">Saldo de la Cuenta en Q.</label>
						<input disabled type="text" name="saldo" required value="{{$cuenta->saldo}}" class="form-control" placeholder="Saldo de la Cuenta en Q....">
					</div>
				</div>

    </div>

@endsection
