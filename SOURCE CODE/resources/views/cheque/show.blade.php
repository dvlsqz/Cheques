@extends('layouts.admin')
@section('contenido')

	  <div class="row">

      

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
				<label for="lugar">Lugar de Emisión</label>
				<input disabled type="text" name="lugar" required value="{{$cheque->lugar}}" class="form-control" placeholder="Lugar de Emisión...">
			</div>
		</div>

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
				<label for="fecha">Fecha de Emisión</label>
				<input disabled type="date" name="fecha" required value="{{$cheque->fecha}}" class="form-control" placeholder="Fecha de Emisión...">
			</div>
		</div>

		

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="form-group">
		  	<label for="idchequera">Chequera del Cheque a Emitir</label>
            <input disabled  type="text" name="idchequera" required value="{{$cheque->idchequera}}" class="form-control" placeholder="Chequera del Cheque a Emitir...">
          </div>
        </div>

		

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="form-group">
		  <label for="idproveedor">Proveedor que sera Portador del Cheque</label>
            <input disabled  type="text" name="idproveedor" required value="{{$cheque->idproveedor}}" class="form-control" placeholder="Proveedor que sera Portador del Cheque...">
          </div>
        </div>

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
				<label for="chequera">Chequera</label>
				<input disabled type="text" name="chequera" required value="{{$cheque->chequera}}" class="form-control" placeholder="Chequera...">
			</div>
		</div>

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
				<label for="no_cheque">Numero de Cheque a Emitir</label>
				<input disabled type="number" min="1" step="1" name="no_cheque" required value="{{$cheque->no_cheque}}" class="form-control" placeholder="Numero de Cheque a Emitir...">
			</div>
		</div>

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
				<label for="monto">Monto en Quetzales</label>
				<input disabled type="text" name="monto" required value="{{$cheque->monto}}" class="form-control" placeholder="Monto en Quetzales...">
			</div>
		</div>

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
				<label for="monto_letras">Monto en Letras</label>
				<input disabled type="text" name="monto_letras" required value="{{$cheque->monto_letras}}" class="form-control" placeholder="Monto en Quetzales...">
			</div>
		</div>

    </div>

@endsection
