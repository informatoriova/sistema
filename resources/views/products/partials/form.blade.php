<div class="form-group">
	{!! Form::label('producto','Nombre del producto') !!}
	{!! Form::text('producto',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('descripcion','Descripcion del producto') !!}
	{!! Form::textarea('descripcion',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('precio','Precio') !!}
	{!! Form::text('precio',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('foto','Imgen') !!}
	{!! Form::text('foto',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('Enviar',['class'=>'btn btn-primary']) !!}
</div>
