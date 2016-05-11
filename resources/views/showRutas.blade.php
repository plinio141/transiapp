@extends('layouts.page')
@section('content')
   <table class="table table-striped">
	  <thead>
	    <tr>
	      <th>NOMBRE DE LA RUTA</th>
	      <th>HORA_INICIO</th>
	      <th>HORA_FINAL</th>
	      <th>TARIFA ($)</th>
	      <th>ACTIVA</th>
	      <th>EDITAR</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($rutas as $ruta)
	  		<tr>
		      <td>{!! $ruta-> nombre_ruta!!}</td>
		      <td>{!! $ruta-> hora_inicio!!}</td>
		      <td>{!! $ruta-> hora_final!!}</td>
		      <td>{!! $ruta-> tarifa!!}</td>
		      @if($ruta->activa==1)
		      <td>Activa</td>
		      @else
		      <td>In-Activa</td>
		      @endif
		      <td>{!! Html::decode(Html::link('ruta/'.$ruta->id_ruta, Html::image('images/editar.png'),array('class'=>''))) !!}</td>
	    	</tr>
		@endforeach
	    
	  </tbody>
  </table>
@stop