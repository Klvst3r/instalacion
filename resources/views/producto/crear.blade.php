@extends("producto.template")

@section("contenido")
		
	<div class="col-md-4">
		<form action="{{ url('producto/crearnuevo') }}" method="POST" role="form">
			
			{{ csrf_field() }}

			<legend>Crear Producto</legend>
		
			<div class="form-group">
				<label for="">Nombre</label>
				<input type="text" class="form-control" name="nombre" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Detalle</label>
				<input type="text" class="form-control" name="detalle" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Precio</label>
				<input type="text" class="form-control" name="precio" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Cantidad</label>
				<input type="text" class="form-control" name="cantidad" id="" placeholder="Input field">
			</div>
		
		
			<button type="submit" class="btn btn-primary">Enviar</button>
		</form>
	</div>

@endsection