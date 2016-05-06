@extends('layouts.page')
@section('content')
    <div class="form">
    <?php $message=Session::get('message')?>

    @if($message == 'store')
    <div class="alert alert-success alert-dismissible" role="alert">
      Ruta creada exitosamente
    </div>
     @endif
    @if($message == 'nameRuta')
    <div class="alert bg-danger" role="alert">
      Esta ruta ya existe
    </div>
    @endif
    @include('alerts.request')
        {!! Form::open(['route' => 'ruta.store','method' => 'post', 'class'=>'form-login ']) !!}
	        <div class="form-group">
		        {!! Form::label('id', 'Identificado de la Ruta *')!!}
		        {!! Form::number('id_ruta','',['class'=>'form-control', 'required' ]);!!}
	         </div>
	        <div class="form-group">
	        	<div class="ubicacion">
			        {!! Form::label('origen', 'Origen de la Ruta *')!!}
			        <img src="images/map1.png">
			     </div> 
			     <select name="lugar_salida">
	  		        @foreach($lugares as $lugar)
					  <option value="{{  $lugar->nombre_lugar }}">{{  $lugar->nombre_lugar }}</option>
					@endforeach
				</select>
	        </div>
	        <div class="form-group">
	        	<div class="ubicacion">
		        {!! Form::label('destino', 'Destino de la Ruta *')!!}
		        <img src="images/map1.png">
		        </div>
		       <select name="lugar_destino">
	  		        @foreach($lugares as $lugar)
					  <option value="{{  $lugar->nombre_lugar }}">{{  $lugar->nombre_lugar }}</option>
					@endforeach
				</select>
	        </div>
	       
	       	<div class="form-group group-button">
	       		{!! Form::label('hora_inicio', 'Hora de inicio de la ruta *')!!}
	       		<input type="time" name="hora_inicio" class="form-control" value="05:00:00"  step="1">
			</div>

			<div class="form-group group-button">
	       		{!! Form::label('hora_final', 'Hora final de la ruta *')!!}
	       		<input type="time" name="hora_final" class="form-control" value="20:00:00" step="1">
			</div>
			<div class="form-group">
		        {!! Form::label('id', 'Tarifa *')!!}
		        {!! Form::number('tarifa','',['class'=>'form-control', 'required' ]);!!}
	         </div>
			<div class="form-group group-button">
	       		{!! Form::label('observaciones', 'Observaciones')!!}
	       		{!!Form::textarea('observaciones')!!}
			</div>

			 <div class="form-group">
	        	<div class="check">
			        {!!Form::checkbox('activa', 'true',[ 'required' ]);!!}
			        {!! Form::label('ruta-activa', 'La ruta esta activa? *')!!}
		        </div>
	        </div>

	        <div class="form-group group-button">
		        <button class="guardar" type="submit"><img src="images/guardar.png"></button>
		        <button class="cancelar" type="reset"><img src="images/Cancelar.png"></button>
	        </div>
	        
        {!! Form::close() !!}
	</div> 
@stop
