@extends('layouts.page')
@section('content')
    <div class="form">
    <?php $message=Session::get('message')?>

    @if($message == 'store')
    <div class="alert alert-success alert-dismissible" role="alert">
      Ruta se a editado correctamente
    </div>
     @endif
    @include('alerts.request')
        {!! Form::open(['route' => ['ruta.update',$ruta->id_ruta],'method' => 'put', 'class'=>'form-login ']) !!}
	        <div class="form-group">
		        {!! Form::label('id', 'Identificador de la Ruta *')!!}
		        {!! Form::number('id_ruta',$ruta->id_ruta,['class'=>'form-control', 'required','disabled' ]);!!}
	         </div>
	        <div class="form-group">
	        	<div class="ubicacion">
			        {!! Form::label('origen', 'Origen de la Ruta *')!!}
			        {{ Html::image('images/map1.png', "", array()) }}
			     </div> 
			     {!! Form::text('placa',$lugar_salida ,['class'=>'form-control', 'required','disabled' ]);!!}
	        </div>
	        <div class="form-group">
	        	<div class="ubicacion">
		        {!! Form::label('destino', 'Destino de la Ruta *')!!}
		        {{ Html::image('images/map1.png', "", array()) }}
		        </div>
	        	{!! Form::text('placa', $lugar_destino ,['class'=>'form-control', 'required','disabled' ]);!!}
		      	
	        </div>
	       
	       	<div class="form-group group-button">
	       		{!! Form::label('hora_inicio', 'Hora de inicio de la ruta *')!!}
	       		<input type="time" name="hora_inicio" class="form-control" value="{!!$ruta->hora_inicio!!}"  step="1">
			</div>

			<div class="form-group group-button">
	       		{!! Form::label('hora_final', 'Hora final de la ruta *')!!}
	       		<input type="time" name="hora_final" class="form-control" value="{!!$ruta->hora_final !!}" step="1">
			</div>
			<div class="form-group">
		        {!! Form::label('id', 'Tarifa *')!!}
		        {!! Form::number('tarifa',$ruta->tarifa,['class'=>'form-control', 'required' ]);!!}
	         </div>
			<div class="form-group group-button">
	       		{!! Form::label('observaciones', 'Observaciones')!!}
	       		{!!Form::textarea('observaciones',$ruta->descripcion)!!}
			</div>

			 <div class="form-group">
	        	<div class="check">
	        		@if($ruta->activa==1)
	        			{!!Form::checkbox('activa', 'true',[ 'required' ]);!!}
	        		@else
	        		{!!Form::checkbox('activa', 'true');!!}
	        		
	        		@endif
			        
			        {!! Form::label('ruta-activa', 'La ruta esta activa? *')!!}
		        </div>
	        </div>

	        <div class="form-group group-button">
		        <button class="guardar" type="submit"> {{ Html::image('images/guardar.png', "", array()) }}</button>
	        </div>
	        
        {!! Form::close() !!}
	</div> 
@stop
