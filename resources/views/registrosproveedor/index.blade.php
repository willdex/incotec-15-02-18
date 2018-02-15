 @extends ('layouts.cpanelp')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Proveedores <a href="registrosproveedor/create"><button class="btn btn-success">Nuevo</button></a></h3>
			@include('registrosproveedor.search')
		</div>

	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Id</th>
						<th>Correo</th>
						<!--<th>Password</th-->
						<th>Proveedor</th>
						<th>Telefono</th>
						<th>Direccion</th>
						<th>Opciones</th>
					</thead>
					@foreach($proveedores as $pro)
					<tr>
						<td>{{ $pro->id}}</td>
						<td>{{ $pro->correo}}</td>
						<!--<td>{{ $pro->password}}</td-->
						<td>{{ $pro->proveedor}}</td>
						<td>{{ $pro->telefono}}</td>
						<td>{{ $pro->direccion}}</td>
						<td>
							<a href=""><button class="btn btn-info">Editar</button></a>
							<a href=""><button class="btn btn-danger">Eliminar</button></a>
						</td>
					</tr>
					@endforeach
				</table>
			</div>
			{{$proveedores->render()}}
		</div>
	</div>
@endsection