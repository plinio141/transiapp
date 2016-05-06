@extends('layouts.page')
@section('content')
    <div class="form">
        {!! Form::open(array('url' => '/','method' => 'post', 'class'=>'form-login')) !!}
        	<div class="form-group">
		        {!! Form::label('nombre', 'Nombre Ruta *')!!}
		        {!! Form::text('nombre','',['class'=>'form-control', 'required','autofocus' ]);!!}
	        </div>
	        <div class="form-group">
		        {!! Form::label('id', 'Identificado de la Ruta *')!!}
		        {!! Form::number('id','',['class'=>'form-control', 'required' ]);!!}
	         </div>
	        <div class="form-group">
	        	<div class="ubicacion">
			        {!! Form::label('origen', 'Origen de la Ruta *')!!}
			        <button class="icon" disabled="true"><img src="images/map1.png"></button>
			     </div> 
			        {!! Form::text('origen','',['class'=>'form-control', 'required' ]);!!}
	        </div>
	        <div class="form-group">
	        	<div class="ubicacion">
		        {!! Form::label('destino', 'Destino de la Ruta *')!!}
		        <button class="icon" disabled="true"><img src="images/map1.png"></button>
		        </div>
		        {!! Form::text('destino','',['class'=>'form-control', 'required' ]);!!}
	        </div>
	        <div class="form-group asignar-bus">
	        {!! Form::label('asignar', 'Asignar Bus*')!!}
	        <select>
  		        @foreach($buses as $bus)
				  <option>{{  $bus->placa }}</option>
				@endforeach
			</select>
	        </div>
	        <div class="form-group">
	        	<div class="check">
			        {!!Form::checkbox('activa', 'value',[ 'required' ]);!!}
			        {!! Form::label('ruta-activa', 'La ruta esta activa? *')!!}
		        </div>
	        </div>
	        <div class="form-group">
	        <div class="form-group group-button">
		        <button class="guardar" type="submit"><img src="images/guardar.png"></button>
		        <button class="cancelar" type="reset"><img src="images/Cancelar.png"></button>
	        </div>
        {!! Form::close() !!}
	</div> 
@stop