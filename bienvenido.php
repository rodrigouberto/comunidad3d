<?php
require_once("functions.php");
session_start();

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/bienvenido.css">

    <title>Print it!</title>
  </head>
  <body>

    <div class="main_header">
      <div class="home">
        <h2>Print it!</h2>
      </div>
      <div class="header_usuario">
        <div id="header">
        			<ul class="nav">
                <li><a class="opciones_usuario" href="miPerfil.php"><?php echo $_SESSION['nombre']; ?></a>
        					<ul>
                     <h2><a href="miPerfil.php">Mi perfil</a></h2>
        						<li><h2><a href="logout.php">Cerrar sesion</a></h2></li>
        					</ul>
        				</li>
        			</ul>
            <img class="img_perfil" src="img/img-usuario.svg" alt="img_perfil">
        </div>
      </div>
    </div>

    <div class="main_container">
      <br>
      <h2>Ultimas impresiones</h2>
      <div class="publicacion">

        <div class="header_publicacion">
          <div class="usuario_publicacion">
            <img class="img_perfil" src="img/img-usuario.svg" alt="img_perfil">
            <h2>Usuario</h2>
          </div>
                <a href="#">Contactar Impresor</a>
        </div>
        <div class="datos_impresion">
          <ul>
            <li>Impresora: Prusa I3</li>
            <li>Material: ABS</li>
            <li>Velocidad: 50mm/s</li>
            <li>Infill: 20%</li>
          </ul>

        </div>
        <div class="imagen_impresion">
          <img class="img" src="img/elefante.jpg" alt="img1">

        </div>
    </div>
<!--
Publicacion =======================================
===================================================================
======================================================================== -->

<div class="publicacion">

  <div class="header_publicacion">
    <div class="usuario_publicacion">
      <img class="img_perfil" src="img/img-usuario.svg" alt="img_perfil">
      <h2>Usuario</h2>
    </div>
          <a href="#">Contactar Impresor</a>
  </div>
  <div class="datos_impresion">
    <ul>
      <li>Impresora: Prusa I3</li>
      <li>Material: ABS</li>
      <li>Velocidad: 50mm/s</li>
      <li>Infill: 20%</li>
    </ul>

  </div>
  <div class="imagen_impresion">
    <img class="img" src="img/elefante.jpg" alt="img1">

  </div>
</div>
<!--
Publicacion =======================================
===================================================================
======================================================================== -->
<div class="publicacion">

  <div class="header_publicacion">
    <div class="usuario_publicacion">
      <img class="img_perfil" src="img/img-usuario.svg" alt="img_perfil">
      <h2>Usuario</h2>
    </div>
          <a href="#">Contactar Impresor</a>
  </div>
  <div class="datos_impresion">
    <ul>
      <li>Impresora: Prusa I3</li>
      <li>Material: ABS</li>
      <li>Velocidad: 50mm/s</li>
      <li>Infill: 20%</li>
    </ul>

  </div>
  <div class="imagen_impresion">
    <img class="img" src="img/elefante.jpg" alt="img1">

  </div>
</div>
<!--
Publicacion =======================================
===================================================================
======================================================================== -->
<div class="publicacion">

  <div class="header_publicacion">
    <div class="usuario_publicacion">
      <img class="img_perfil" src="img/img-usuario.svg" alt="img_perfil">
      <h2>Usuario</h2>
    </div>
          <a href="#">Contactar Impresor</a>
  </div>
  <div class="datos_impresion">
    <ul>
      <li>Impresora: Prusa I3</li>
      <li>Material: ABS</li>
      <li>Velocidad: 50mm/s</li>
      <li>Infill: 20%</li>
    </ul>

  </div>
  <div class="imagen_impresion">
    <img class="img" src="img/elefante.jpg" alt="img1">

  </div>
</div>
<!--
Publicacion =======================================
===================================================================
======================================================================== -->
<div class="publicacion">

  <div class="header_publicacion">
    <div class="usuario_publicacion">
      <img class="img_perfil" src="img/img-usuario.svg" alt="img_perfil">
      <h2>Usuario</h2>
    </div>
          <a href="#">Contactar Impresor</a>
  </div>
  <div class="datos_impresion">
    <ul>
      <li>Impresora: Prusa I3</li>
      <li>Material: ABS</li>
      <li>Velocidad: 50mm/s</li>
      <li>Infill: 20%</li>
    </ul>

  </div>
  <div class="imagen_impresion">
    <img class="img" src="img/elefante.jpg" alt="img1">

  </div>
</div>
<!--
Publicacion =======================================
===================================================================
======================================================================== -->
<div class="publicacion">

  <div class="header_publicacion">
    <div class="usuario_publicacion">
      <img class="img_perfil" src="img/img-usuario.svg" alt="img_perfil">
      <h2>Usuario</h2>
    </div>
          <a href="#">Contactar Impresor</a>
  </div>
  <div class="datos_impresion">
    <ul>
      <li>Impresora: Prusa I3</li>
      <li>Material: ABS</li>
      <li>Velocidad: 50mm/s</li>
      <li>Infill: 20%</li>
    </ul>

  </div>
  <div class="imagen_impresion">
    <img class="img" src="img/elefante.jpg" alt="img1">

  </div>
</div>
<!--
Publicacion =======================================
===================================================================
======================================================================== -->
<div class="publicacion">

  <div class="header_publicacion">
    <div class="usuario_publicacion">
      <img class="img_perfil" src="img/img-usuario.svg" alt="img_perfil">
      <h2>Usuario</h2>
    </div>
          <a href="#">Contactar Impresor</a>
  </div>
  <div class="datos_impresion">
    <ul>
      <li>Impresora: Prusa I3</li>
      <li>Material: ABS</li>
      <li>Velocidad: 50mm/s</li>
      <li>Infill: 20%</li>
    </ul>

  </div>
  <div class="imagen_impresion">
    <img class="img" src="img/elefante.jpg" alt="img1">

  </div>
</div>
<!--
Publicacion =======================================
===================================================================
======================================================================== -->
<div class="publicacion">

  <div class="header_publicacion">
    <div class="usuario_publicacion">
      <img class="img_perfil" src="img/img-usuario.svg" alt="img_perfil">
      <h2>Usuario</h2>
    </div>
          <a href="#">Contactar Impresor</a>
  </div>
  <div class="datos_impresion">
    <ul>
      <li>Impresora: Prusa I3</li>
      <li>Material: ABS</li>
      <li>Velocidad: 50mm/s</li>
      <li>Infill: 20%</li>
    </ul>

  </div>
  <div class="imagen_impresion">
    <img class="img" src="img/elefante.jpg" alt="img1">

  </div>
</div>
<!--
Publicacion =======================================
===================================================================
======================================================================== -->
<div class="publicacion">

  <div class="header_publicacion">
    <div class="usuario_publicacion">
      <img class="img_perfil" src="img/img-usuario.svg" alt="img_perfil">
      <h2>Usuario</h2>
    </div>
          <a href="#">Contactar Impresor</a>
  </div>
  <div class="datos_impresion">
    <ul>
      <li>Impresora: Prusa I3</li>
      <li>Material: ABS</li>
      <li>Velocidad: 50mm/s</li>
      <li>Infill: 20%</li>
    </ul>

  </div>
  <div class="imagen_impresion">
    <img class="img" src="img/elefante.jpg" alt="img1">

  </div>
</div>
<!--
Publicacion =======================================
===================================================================
======================================================================== -->
<div class="publicacion">

  <div class="header_publicacion">
    <div class="usuario_publicacion">
      <img class="img_perfil" src="img/img-usuario.svg" alt="img_perfil">
      <h2>Usuario</h2>
    </div>
          <a href="#">Contactar Impresor</a>
  </div>
  <div class="datos_impresion">
    <ul>
      <li>Impresora: Prusa I3</li>
      <li>Material: ABS</li>
      <li>Velocidad: 50mm/s</li>
      <li>Infill: 20%</li>
    </ul>

  </div>
  <div class="imagen_impresion">
    <img class="img" src="img/elefante.jpg" alt="img1">

  </div>
</div>
<!--
Publicacion =======================================
===================================================================
======================================================================== -->
<div class="publicacion">

  <div class="header_publicacion">
    <div class="usuario_publicacion">
      <img class="img_perfil" src="img/img-usuario.svg" alt="img_perfil">
      <h2>Usuario</h2>
    </div>
          <a href="#">Contactar Impresor</a>
  </div>
  <div class="datos_impresion">
    <ul>
      <li>Impresora: Prusa I3</li>
      <li>Material: ABS</li>
      <li>Velocidad: 50mm/s</li>
      <li>Infill: 20%</li>
    </ul>

  </div>
  <div class="imagen_impresion">
    <img class="img" src="img/elefante.jpg" alt="img1">

  </div>
</div>
<!--
Publicacion =======================================
===================================================================
======================================================================== -->
<div class="publicacion">

  <div class="header_publicacion">
    <div class="usuario_publicacion">
      <img class="img_perfil" src="img/img-usuario.svg" alt="img_perfil">
      <h2>Usuario</h2>
    </div>
          <a href="#">Contactar Impresor</a>
  </div>
  <div class="datos_impresion">
    <ul>
      <li>Impresora: Prusa I3</li>
      <li>Material: ABS</li>
      <li>Velocidad: 50mm/s</li>
      <li>Infill: 20%</li>
    </ul>

  </div>
  <div class="imagen_impresion">
    <img class="img" src="img/elefante.jpg" alt="img1">

  </div>
</div>
<!--
Publicacion =======================================
===================================================================
======================================================================== -->
  </body>
</html>
