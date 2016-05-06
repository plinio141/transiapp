@extends('layouts.page')
@section('content')
   <table class="table table-striped">
	  <thead>
	    <tr>
	      <th>Placa</th>
	      <th>Capacidad</th>
	      <th>GPS</th>
	      <th>Estado</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($buses as $bus)
	  		<tr>
		      <td>{!! $bus-> placa!!}</td>
		      <td>{!! $bus-> capacidad!!}</td>
		      <td>{!! $bus-> id_gps!!}</td>
		      <td>{!! $bus-> estado!!}</td>
	    	</tr>
		@endforeach
	    
	  </tbody>
  </table>
@stop