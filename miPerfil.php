<?php
session_start();
// if (isset($_COOKIE['nombre'])) {
//
// }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/miPerfil.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
    <title>Mi Perfil</title>
  </head>
  <body>
    <!-- ENCABEZADO =================
    ================================================ -->

      <div class="main_header">
        <div class="home">
          <h2>Print it!</h2>
        </div>
          <div class="header_usuario">

        <div id="header">
        			<ul class="nav">
                <li><a class="opciones_usuario" href="miPerfil.php"><?php echo $_SESSION['nombre']; ?></a>
        					<ul>
                     <h2><a href="bienvenido.php">Inicio</a></h2>
        						<li><h2><a href="logout.php">Cerrar sesion</a></h2></li>
        					</ul>
        				</li>
        			</ul>
            <img class="img_perfil" src="img/img-usuario.svg" alt="img_perfil">
        </div>
      </div>
      </div>


<!-- CUERPO ===================
========================================== -->

      <div class="main_container">
        <div class="info_usuario">
          <img class="img_perfil" src="img/img-usuario.svg" alt="img_perfil">
          <form class="datos" action="" method="post">
            <h2>Nombre de usuario</h2>
            <input type="text" name="nombre_usuario" value="<?php echo $_SESSION['usuario']; ?>">
            <br>
            <br>
            <h2>Nombre completo</h2>
            <input type="text" name="nombre_completo" value="<?php echo $_SESSION['nombre']; ?>">
            <br>
            <br>
            <h2>Correo electrónico</h2>
            <input type="text" name="email" value="<?php echo $_SESSION['email']; ?>">
            <br>
            <br>
            <h2>Cambiar contraseña</h2>
            <br>
            <br>
            <label for="old_pass">Contraseña Vieja</label>
            <input type="password" name="old_pass" value="">
            <br>
            <br>
            <label for="old_pass">Contraseña nueva</label>
            <input type="password" name="new_pass" value="">
            <br>
            <br>
            <input class="boton" type="submit" name="actualizar_datos" value="Actualizar datos">
            <br>
            <a href="perfilImpresor.php">Quiero ser impresor!</a>






          </form>


        </div>
      </div>
  </body>
</html>
