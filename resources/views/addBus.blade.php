@extends('layouts.page')
@section('content')
    <div class="form">
    @include('alerts.request')
    <?php $message=Session::get('message')?>

    @if($message == 'store')
    <div class="alert alert-success alert-dismissible" role="alert">
      Bus creado exitosamente
    </div>
    @endif 
        {!! Form::open(['route' => 'bus.store','method' => 'post', 'class'=>'form-login ']) !!}
	        <div class="form-group">
	        {!! Form::label('placa', 'Placa del bus *')!!}
	        {!! Form::text('placa','',['class'=>'form-control', 'required' ]);!!}
	    	</div>
	    	<div class="form-group">
	        {!! Form::label('capacidad', 'Capacidad del bus *')!!}
	        {!! Form::number('capacidad','',['class'=>'form-control', 'required' ]);!!}
	    	</div>
	        <div class="form-group">
	        {!! Form::label('id_gps', 'Id de GPS con el que cuenta *')!!}
	        {!! Form::number('id_gps','',['class'=>'form-control', 'required' ]);!!}
	        </div>
	        <div class="form-group asignar-bus">
	        {!! Form::label('asignar', 'Asignar Bus*')!!}
	        <select name="ruta">
  		        @foreach($rutas as $ruta)
				  <option value="{{  $ruta->nombre_ruta }}">{{  $ruta->nombre_ruta }}</option>
				@endforeach
			</select>
	        </div>
	        <div class="form-group">
	        	<div class="check">
			        {!!Form::checkbox('activa', 'value',[ 'required' ]);!!}
			        {!! Form::label('bus-activo', 'El bus esta activo? *')!!}
		        </div>
	        </div>
	        <div class="form-group group-button">
		        <button class="guardar" type="submit"><img src="images/guardar.png"></button>
		        <button class="cancelar" type="reset"><img src="images/Cancelar.png"></button>
	        </div>
        {!! Form::close() !!}
	</div> 
@stop