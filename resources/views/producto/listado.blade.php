@extends("producto.template")

@section("contenido")
	
	<div class="col-md-12">
		<a href="{{ url('producto/crear') }}" class="btn btn-primary">Crear nuevo producto</a>
		<hr>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>No.</th>
					<th>Nombre</th>
					<th>Descripción</th>
					<th>Cantidad</th>
					<th>Precio</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>

				@foreach($productos as $producto)
					<tr>
						<td>{{ $producto->id }}</td>
						<td>{{ $producto->nombre }}</td>
						<td>{{ $producto->detalle }}</td>
						<td>{{ $producto->cantidad }}</td>
						<td>{{ $producto->precio }}</td>
						<td>
							<a href="" class="btn btn-sm btn-danger">Eliminar</a>
							<a href="" class="btn btn-sm btn-default">Actualizar</a>
						</td>
					</tr>
					@endforeach
			</tbody>
		</table>
	</div>

@endsection