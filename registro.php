<?php
require_once("usuario.json");
require_once("functions.php");
if ($_POST) {
  $nombre=$_POST["nombre"];
  $email=$_POST["email"];
  $password=$_POST["password"];
  $user=$_POST["usuario"];
  $errores=validarDatos($_POST);
  $existeErrores=yaExiste($_POST);
    if (empty($errores) && empty($existeErrores)) {
      $usuario=crearUsuario($_POST);
      guardarUsuario($usuario);
}
}
  ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/registroStyles.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registro - Print it</title>
  </head>
  <body>
    <div class="main_container">
      <header class="main_header">
        <div class="header_izquierdo">
          <h2>Print It!</h2>
        </div>

        <div class="inicio_sesion">
          <form class="inputs_inicio" action="index.html" method="post">
        <div class="div_email">
          <input id="email" class="email_inicio" type="email" name="email" value="" placeholder="E-mail">
          <br>
          <label class="recordarUsuario" for="email">Recordar usuario <input type="checkbox" class="recordar_check" name="recordarUsuario" value=""></label>
        </div>

        <div class="div_pass">
          <input id="password" class="pass_inicio" type="password" name="password" value="" placeholder="Password">
          <br>
          <label class="recordarUsuario" for="pass_inicio">Recordar contraseña <input type="checkbox" class="recordar_check" name="recordarUsuario" value=""></label>
      </div>
      <div class="iniciarsesion">
        <input class="boton_inicio" type="submit" name="submit_usuario" value="Iniciar Sesión">
      </div>
      </form>
    </div>
    </header>
      <div class="parte_inferior">
        <div class="registro_usuarios">
        <h3>Registrese!</h3>
        <form class="usuarios_form" action="" method="post">
          <label for="nombreUsuario">Nombre de usuario</label>
          <input class="normal" type="text" name="usuario" id="usuario" value="<?php echo !empty($user)? $user:"" ?>">
          <span id='register_username_errorloc' class='error'><?php echo !empty($errores["user"])?$errores["user"]:"" ?></span>
          <label for="nombre">Nombre Completo</label>
          <input class="normal" type="text" name="nombre" id="nombre" value="<?php echo !empty($nombre)? $nombre:"" ?>">
          <span id='register_name_errorloc' class='error'><?php echo !empty($errores["nombre"])?$errores["nombre"]:"" ?></span>
          <label for="email">E-mail</label>
          <input class="normal" type="email" name="email" id="email" value="<?php echo !empty($email)? $email:"" ?>">
          <span id='register_email_errorloc' class='error'><?php echo !empty($errores["email"])?$errores["email"]:"" ?></span>
          <label for="password">Contraseña</label>
          <input class="normal" type="password" name="password" id="password" value="">
          <div id='register_password_errorloc' class='error' style='clear:both'><?php echo !empty($errores["password"])?$errores["password"]:"" ?></div>
          <?php
          $prueba = "test";
          if (!isset($_GET["versionCorta"])) {
          ?>
      <label for="confirmarPassword">Confirme contraseña</label>
      <input class="normal" type="password" name="cpassword" id="cpassword" value="">
      <div id='register_password_errorloc' class='error' style='clear:both'><?php echo !empty($errores["cpassword"])?$errores["cpassword"]:"" ?></div>
        <?php }; ?>
        <div class="enviar">
          <input type="submit" name="submit" value="Enviar">
        </div>
                </div>

        </form>
      </div>
    </div>
  </div>
  </body>
</html>
