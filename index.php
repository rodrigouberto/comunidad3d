<?php
require_once("functions.php");
if ($_POST) {
  $erroresLogin = validarLogin($_POST);
  if (empty($erroresLogin)) {
    loginUsuario($_POST);
  }
}


 ?>

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
            <div><a class="aboutUs" href="#aboutUs">Acerca de Nosotros</a></div>
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
        <form class="inputs_inicio" action="" method="post">
          <h2>Iniciar sesión</h2>
          <br>
          <br>
          <h2>Correo electrónico</h2>
          <div class="div_email">
            <input id="email_inicio" class="email_inicio" type="email" name="email" value="" placeholder="E-mail">
            <span id='register_email_errorloc' class='error'><?php echo !empty($erroresLogin["email"])?$erroresLogin["email"]:"" ?></span>
            <br>
            <label class="recordarUsuario" for="email_inicio">Recordar usuario <input type="checkbox" class="recordar_check" name="recordarUsuario" value=""></label>
          </div>

          <h2>Contraseña</h2>
          <div class="div_pass">
            <input id="pass_inicio" class="pass_inicio" type="password" name="password" value="" placeholder="Password">
            <span id='register_email_errorloc' class='error'><?php echo !empty($erroresLogin["password"])?$erroresLogin["password"]:"" ?></span>
            <br>
            <label class="recordarUsuario" for="pass_inicio">Recordar contraseña <input type="checkbox" class="recordar_check" name="recordarUsuario" value=""></label>
        </div>
        <input class="boton_inicio" type="submit" name="submit_usuario" value="Iniciar Sesión">
          <div class="registrarse">
            <div><h2>No tenes cuenta? Registrate!</h2></div>
            <a class="registrate" target="_blank" href="Registro.php">Registrarse</a>
          </div>

        </form>

      </div>
    </div>
  </div>
<div class="info_gral">

    <div id="informacion" class="info_izquierdo">

    </div>
    <div class="info_derecho">
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
</div>

<!--
    about us ===========
    ================================ -->
  <div class="info_us">

    <div id="aboutUs" class="aboutUs_izquierdo1">
      <h2>¿Querés imprimir algo?</h2>
      <p>Registrate y encontrá dónde materializar tus ideas!</p>
      <h2>Es muy facil:</h2>
      <ul>
        <li>Filtras impresores por zona, material u otros criterios.</li>
        <li>Pedís cotización a los impresores que hayas seleccionado.</li>
        <li>Elegís el que más te convenga y listo!</li>
        <h2>Ya tenes tu objeto 3D</h2>

      </ul>

        <h2>¿Tenes una impresora 3D?</h2>
        <p>Podes ganar dinero de forma cómoda y sencilla.</p>
        <p>Registrate y ofrecé tu servicio de impresión 3D</p>
        <a href="#inicio"class="boton">Volver al inicio</a>


    <!-- </div> -->
    </div>

  </div>
</div>

</body>
</html>
