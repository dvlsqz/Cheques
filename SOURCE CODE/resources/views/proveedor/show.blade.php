@extends('layouts.admin')
@section('contenido')

	  <div class="row">

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
						<label for="nombre">Nombre del Proveedor</label>
						<input disabled type="text" name="nombre" required value="{{$proveedor->nombre}}" class="form-control" placeholder="Nombre del Proveedor...">
					</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
						<label for="numero">Numero del Proveedor</label>
						<input disabled type="text" name="numero" required value="{{$proveedor->numero}}" class="form-control" placeholder="Numero del Proveedor...">
					</div>
				</div>

    </div>

@endsection
