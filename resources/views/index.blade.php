<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

    <title>Print it</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"
					type="text/javascript" charset="utf-8"></script>
			<script >
				$(function(){

     $('a[href*=#]').click(function() {

     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
         && location.hostname == this.hostname) {

             var $target = $(this.hash);

             $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');

             if ($target.length) {

                 var targetOffset = $target.offset().top;

                 $('html,body').animate({scrollTop: targetOffset}, 1000);

                 return false;
            }
       }
   });
});
			</script>
  </head>
  <body>

      <header class="main_header">
          <div class="menu_principal" id="inicio">
            <h3>Print it!</h3>
          </div>
          <div class="header_izquierdo">
            <div><a class="masInfo" href="#informacion" target="">Mas info</a></div>
            <div><a class="aboutUss" href="#aboutUs">Acerca de Nosotros</a></div>
          </div>
      </header>
  <div class="main_container">
    <div class="dos_lados">

  <div class="lado_izquierdo">
      <div class="bienvenida">
        <h2 class="mensaje_bienvenida">¿Necesitás imprimir algo?</h2>
        <h3 class="mensaje_bienvenida2">Encontrá personas cercanas con impresoras 3D que pueden ayudarte.</h3>
        <a class="boton_busqueda" href="" target="_blank">Cómo buscar</a>


        <div class="impresores">
          <h2 class="mensaje_impresores">¿Tenés una impresora 3D?</h2>
          <h3 class="mensaje_impresores2">Ofrecé tus servicios y ganá dinero de forma cómoda y sencilla.</h3>
          <a class="boton_registro" target="_blank" href="impresoresRegistro.html">Ofrecer mi servicio</a>
        </div>




      </div>
    </div>
    <div class="lado_derecho">
      <div class="login2">
        <form class="inputs_inicio" action="{{ route('login') }}" method="post">
          @csrf

          <h2>Iniciar sesión</h2>
          <br>

          <!-- <br>
          ==================
          login:EMAIL========
          =================== -->

          <h2>Correo electrónico</h2>
          <div class="div_email">
            <input id="email" type="email" class="email_inicio form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="E-mail">
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>

          <h2>Contraseña</h2>
          <div class="div_pass">
            <input id="password" type="password" class="pass_inicio form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif

            <div class="checkbox">
                <label>
                    <input type="checkbox" class="recordarUsuario" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                </label>
              </div>
          </div>

          <button type="submit" class="btn btn-primary boton_inicio">
              {{ __('Login') }}
          </button>

          <a class="btn btn-link" href="{{ route('password.request') }}">
              {{ __('Forgot Your Password?') }}
          </a>
          <div class="registrarse">
            <div><h2>No tenes cuenta?</h2></div>
            <a class="registrate" target="_blank" href="printit/registro">Registrate</a>
          </div>

        </form>

      </div>
    </div>
  </div>
<div class="info_gral" id="informacion">
      <div class="impresion3d">

        <h2>¿Que es la impresión 3D?</h2>
        <p>La impresion 3D es un proceso de fabricación por medio del cual se crean objetos tridimensionales superponiendo capas de plástico u otro material.</p>

        <h2>¿Qué puedo hacer con una impresora 3D?</h2>
        <p>Lo que quieras! Solo necesitas tener un archivo .stl.</p>
        <br>
        <p>También podes conseguir diseños listos para imprimir en </p>
        <a href="www.thingiverse.com">www.thingiverse.com</a>
    </div>
    <a class="boton" href="#aboutUs" target="">Ver más</a>
  </div>


<!--
    about us ===========
    ================================ -->

    <div id="aboutUs" class="aboutUs">
      <div class="buscarImpresor">

        <h2>¿Querés imprimir algo?</h2>
        <p>Registrate y encontrá dónde volver realidad tus ideas!</p>
        <br>
        <h3>Materializá tu objeto en 3 simples pasos:</h3>
        <ul>

          <br>
          <li>1.Filtras impresores por zona, material u otros criterios.</li>

          <li>2.Pedís cotización a los impresores que hayas seleccionado.</li>

          <li>3.Elegís el que más te convenga y listo!</li>
          <br>
          <li>Ya tenes tu objeto 3D!</li>

        </ul>
        <br><br>
        <h2>¿Tenes una impresora 3D?</h2>
        <ul>
          <li>Podes ganar dinero de forma cómoda y sencilla.</li>
          <li>Registrate y completá los datos requeridos.</li>
          <li>Ya estás ofrenciendo tu servicio de impresion 3D!</li>
        </ul>

        <a href="#inicio"class="boton">Volver al inicio</a>
      </div>


    </div>



</div>



</body>
</html>
