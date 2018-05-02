@extends("producto.template")

@section("contenido")
		
	<div class="col-md-4">
		<form action="{{ url('producto/crearnuevo') }}" method="POST" role="form">
			
			{{ csrf_field() }}

			@if(isset($producto))
				<input type="hidden" name="id" value="{{ $producto->id }}">

			@endif

			<legend>Crear Producto</legend>
		
			<div class="form-group">
				<label for="">Nombre</label>
				<input type="text" class="form-control" name="nombre" id="" value="{{ isset($producto)?$producto->nombre:'' }}" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Detalle</label>
				<input type="text" class="form-control" name="detalle" id="" value="{{ isset($producto)?$producto->detalle:'' }}" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Precio</label>
				<input type="number" class="form-control" name="precio" id="" value="{{ isset($producto)?$producto->precio:'' }}" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Cantidad</label>
				<input type="number" class="form-control" name="cantidad" id="" value="{{ isset($producto)?$producto->cantidad:'' }}" placeholder="Input field">
			</div>
		
		
			<button type="submit" class="btn btn-primary">Enviar</button>
		</form>
	</div>

@endsection