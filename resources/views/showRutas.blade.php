@extends('layouts.page')
@section('content')
   <table class="table table-striped">
	  <thead>
	    <tr>
	      <th>Lugar inicial</th>
	      <th>Lugar final</th>
	      <th>Nombre de la ruta</th>
	      <th>HORA_INICIO</th>
	      <th>HORA_FINAL</th>
	      <th>TARIFA</th>
	      <th>DESCRIPCION</th>
	      <th>ACTIVA</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($rutas as $ruta)
	  		<tr>
		      <td>{!! $ruta-> id_ligar!!}</td>
		      <td>{!! $ruta-> pos_id_lugar!!}</td>
		      <td>{!! $ruta-> nombre_ruta!!}</td>
		      <td>{!! $ruta-> hora_inicio!!}</td>
		      <td>{!! $ruta-> hora_final!!}</td>
		      <td>{!! $ruta-> tarifa!!}</td>
		      <td>{!! $ruta-> descripcion!!}</td>
		      <td>{!! $ruta-> activa!!}</td>
	    	</tr>
		@endforeach
	    
	  </tbody>
  </table>
@stop