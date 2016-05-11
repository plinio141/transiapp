@extends('layouts.page')
@section('content')
   <table class="table table-striped">
	  <thead>
	    <tr>
	      <th>Placa</th>
	      <th>Capacidad</th>
	      <th>GPS</th>
	      <th>Estado</th>
	      <th>Editar</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($buses as $bus)
	  		<tr>
		      <td>{!! $bus-> placa!!}</td>
		      <td>{!! $bus-> capacidad!!}</td>
		      <td>{!! $bus-> id_gps!!}</td>
		      <td>{!! $bus-> estado!!}</td>
		      <td>{!! Html::decode(Html::link('bus/'.$bus->id_bus, Html::image('images/editar.png'),array('class'=>''))) !!}</td>
	    	</tr>
		@endforeach
	    
	  </tbody>
  </table>
@stop