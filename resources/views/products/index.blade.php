@extends('layout')

@section('content')
	<div class="row">
		<div class="col-md-8">
			
		
			<table class="table">
				<thead>
					<th>Id</th>
					<th>Nombre</th>
					<th>Acciones</th>

				</thead>
				<tbody>
					@foreach($products as $product)	
					<tr>
						<td>{{ $product->id }}</td>
						<td>{{ $product->producto}}</td>
						<td>
							<a href="{{ route('products.edit',$product->id) }}" class="btn btn-info">Editar</a>
						</td>

						<td>
							<a href="{{ route('products.show',$product->id) }}" class="btn btn-success">Ver</a>
						</td>
						
						<td>
						{!! Form::open(['method'=>'DELETE','route'=>['products.destroy',$product->id]]) !!}
						
						{!! Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}

						{!! Form::close()!!}
						</td>
					</tr>
					@endforeach
				</tbody>

			</table>
			{!! $products->render() !!}
		</div>
		<div class="col-md-4">
			<a href="{{ route('products.create') }}" class="btn btn-primary">Crear Nuevo</a>
			
		</div>
	</div>
@endsection