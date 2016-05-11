@extends('layouts.page')
@section('content')  
  <div class="form"> 
    @include('alerts.request')
    <?php $message=Session::get('message')?>

    @if($message == 'store')
    <div class="alert alert-success alert-dismissible" role="alert">
      Empresa creada exitosamente
    </div>
    @endif  
    {!! Form::open(['route' => 'empresa.store','method' => 'post', 'class'=>'form-login ']); !!}
      <div class="form-group">
        {!! Form::label('id_empresa', 'Identificación de la Empresa *')!!}
        {!! Form::number('id_empresa','',['class'=>'form-control', 'required','autofocus' ]);!!}
      </div>

      <div class="form-group">
        {!! Form::label('nombre_empresa', 'Nombre Empresa *')!!}
        {!! Form::text('nombre_empresa','',['class'=>'form-control', 'required' ]);!!}
      </div>
      <div class="form-group group-button">
        <button class="guardar" type="submit"><img src="images/guardar.png"></button>
        <button class="cancelar" type="reset"><img src="images/Cancelar.png"></button>
      </div>

    {!! Form::close() !!}
  </div>
@stop