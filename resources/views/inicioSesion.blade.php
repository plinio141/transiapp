<!DOCTYPE html>
<html>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  
    <head>
        <title>Transi-app / inicio Sesion</title>
    </head>
    <body class="login">
      <div class="text-login">
      	Login
      </div>
      <div class="center-login">
      	<div class="logo">
      		<img src="images/transiapp3.png">
      	</div>
      	<div class="form">
        {!! Form::open(['route' => 'iniciarSesion.store','method' => 'post', 'class'=>'form-login ']); !!}
          @include('alerts.errorLogin')
          <div class="form-group">
          {!! Form::label('usuario', 'Usuario')!!}
          </div>
          
          <div>
          {!! Form::text('usuario','',array('autofocus'=>'autofocus','required' => 'required'));!!}
          </div>
          <div>
          {!! Form::label('password', 'Contraseña')!!}
          </div>
          <div>
          {!! Form::password('password',array('required' => 'required') ); !!}

          </div>
          <div class="div-submit">
            {!! Form::submit('Acceder',array('class'=>'submit')); !!}
          </div>
        {!! Form::close() !!}
		</div>
      </div>
      <div class="empresa-login">
      	<img src="images/devmov5.png">
      </div>
    </body>

</html>