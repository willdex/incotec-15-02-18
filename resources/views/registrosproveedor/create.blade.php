 @extends ('layouts.cpanelp')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Proveedor</h3>
			@if(count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::open(array('url'=>'registrosproveedor','method'=>'POST','autocomplete'=>'off'))!!}
			{{Form::token()}}
			<div class="form-group">
				<label for="correo">Correo</label>
				<input type="text" name="correo" class="form-control" placeholder="Correo...">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" class="form-control" placeholder="Password...">
			</div>
				<div class="form-group">
				<label for="proveedor">Proveedor</label>
				<input type="text" name="proveedor" class="form-control" placeholder="Proveedor...">
			</div>
			<div class="form-group">
				<label for="telefono">Telefono</label>
				<input type="text" name="telefono" class="form-control" placeholder="Telefono...">
			</div>
			<div class="form-group">
				<label for="direccion">Direccion</label>
				<input type="text" name="direccion" class="form-control" placeholder="Direccion...">
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>

			{!!Form::close()!!}
		</div>
	</div>

@endsection