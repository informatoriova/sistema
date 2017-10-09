@extends('layout')

@section('content')
	<div class="col-md-8">
		<h2>Editando Producto</h2>
	

	{!! Form::model($product, ['route'=>['products.update',$product->id],'method'=>'PUT']) !!}
		
		@include('products.partials.form')

	{!! Form::close() !!}
</div>
@endsection