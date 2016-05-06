<!DOCTYPE html>
<html>
	

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">



<link rel="stylesheet" type="text/css" href="css/style.css">

    <head>
        <title>Transi-app</title>
    </head>
    <body >
       <header>
	       <div>
		       	<ul class="header">
		       		<li><img class="logo-empresa" src="images/devmov5.png"></li>
		       		<li class="title">{{ $title }}</li>
		       		<li><img class="logo-app" src="images/Transiapp.png"></li>
		       	</ul>
	       	</div>
       </header>
       <div class="page">
       		<div class="slider">
       			<ul nav nav-pills>
              @if(Auth::user()->id==1)
              <li>{!! link_to('addEmpresa', $title = 'Añadir Empresa', $attributes = array(), $secure = null); !!}</li>
              <li>{!! link_to('addAdministrador', $title = 'Añadir Administrador', $attributes = array(), $secure = null); !!}</li>
              @endif
       				<li>{!! link_to('addRuta', $title = 'Añadir Ruta', $attributes = array(), $secure = null); !!}</li>
              <li>{!! link_to('addBus', $title = 'Añadir Bus', $attributes = array(), $secure = null); !!}</li>
              <li>{!! link_to('showRuta', $title = 'Ver Rutas', $attributes = array(), $secure = null); !!}</li>
              <li>{!! link_to('showBus', $title = 'Ver Buses', $attributes = array(), $secure = null); !!}</li>
       			</ul>
       		</div>
       		<div class="content">
            <div class="user ">
              <h1><span class="glyphicon glyphicon-user" aria-hidden="true"> </span>{{ Auth::user()->name}}
              {!! link_to('logout', $title = 'cerrar sesion', $attributes = array(), $secure = null); !!}</h1>
              
            </div>
            
       			@yield('content')
            
       		</div>
       </div>
    </body>

</html>
