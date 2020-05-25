@extends('layouts.admin')
@section('contenido')

	  <div class="row">

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
						<label for="nombre">Nombre del Banco</label>
						<input disabled  type="text" name="nombre" required value="{{$banco->nombre}}" class="form-control" placeholder="Nombre del Banco...">
					</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
						<label for="Contacto">Nombre del Asesor ó Contacto</label>
						<input disabled type="text" name="Contacto" required value="{{$banco->contacto}}" class="form-control" placeholder="Nombre del Asesor ó Contacto...">
					</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
						<label for="numero">Numero del Asesor ó Contacto</label>
						<input disabled  type="text" name="numero" required value="{{$banco->numero}}" class="form-control" placeholder="Numero del Asesor ó Contacto...">
					</div>
				</div>

    </div>

@endsection
