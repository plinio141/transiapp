@extends('layouts.page')
@section('content')  
  <div class="form"> 
  @include('alerts.request')
    <?php $message=Session::get('message')?>

    @if($message == 'store')
    <div class="alert alert-success alert-dismissible" role="alert">
      Administrador creado exitosamente
    </div>
    @endif   
    {!! Form::open(['route' => 'administrador.store','method' => 'post', 'class'=>'form-login ']); !!}
      <div class="form-group">
        {!! Form::label('id', 'Identificación del Administrador *')!!}
        {!! Form::number('id','',['class'=>'form-control', 'required','autofocus' ]);!!}
      </div>
      <div class="form-group">
        {!! Form::label('nombre', 'Nombre del Administrador *')!!}
        {!! Form::text('nombre_administrador','',['class'=>'form-control', 'required' ]);!!}
      </div>
      <div class="form-group">
        {!! Form::label('apellido_administrador', 'Apellido del Administrador *')!!}
        {!! Form::text('apellido_administrador','',['class'=>'form-control', 'required' ]);!!}
      </div>
      <div class="form-group">
        {!! Form::label('nombre', 'Nombre de Usuario *')!!}
        {!! Form::text('name','',['class'=>'form-control', 'required' ]);!!}
      </div>
       <div class="form-group">
          {!! Form::label('password', 'Contraseña')!!}
          {!! Form::password('password',['class'=>'form-control', 'required'] ); !!}
      </div>
      <div class="form-group asignar-bus">
          {!! Form::label('asignar', 'Asignar Empresa*')!!}
          <select name="empresa">
            @foreach($empresas as $empresa)
              <option value="{{ $empresa->NOMBRE_EMPRESA }}">{{ $empresa->NOMBRE_EMPRESA }}</option>
            @endforeach
          </select>
          <a href="addAdministrador"><img src="images/añadir.png"></a>
    </div>

      <div class="form-group group-button">
        <button class="guardar" type="submit"><img src="images/guardar.png"></button>
        <button class="cancelar" type="reset"><img src="images/Cancelar.png"></button>
      </div>

    {!! Form::close() !!}
  </div>
@stop