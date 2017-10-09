@extends('layout')

@section('content')
	<div class="col-md-8">
		<h2>Nuevo Producto</h2>
	

	{!! Form::open(['route'=>'products.store']) !!}
		
		@include('products.partials.form')

	{!! Form::close() !!}
</div>
@endsection

