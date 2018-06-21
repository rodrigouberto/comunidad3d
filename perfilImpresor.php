<?php session_start() ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/perfilImpresor.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
    <title>Datos - Impresión 3D</title>
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

<!-- CUERPO =====================================================
================================================================== -->

  <div class="main_container">
    <h3 class="titulo_principal">Para poder ofrecer tu servicio de impresión 3D tenés que completar los siguientes datos</h3>

    <div class="datos_personales">
      <h2>Datos Personales</h2>
      <br>
      <form class="form_datos_personales" action="" method="post">
        <label for="pais">País:</label>
        <br>

        <input type="text" name="pais" value="" placeholder="Example: Argentina">
        <br>
        <label for="provincia">Provincia:</label>
        <br>
        <input type="text" name="provincia" value="" placeholder="Example: Buenos Aires">
        <br>
        <label for="localidad">Localidad:</label>
        <br>
        <input type="text" name="localidad" value="" placeholder="Example: CABA">
        <br>
        <label for="codigoPostal">Codigo Postal:</label>
        <br>
        <input type="text" name="codigoPostal" value="" placeholder="Example: 1431">
        <br>
        <label for="telefono">Telefono:</label>
        <br>
        <input type="text" name="telefono" value="" placeholder="Example: (011) 1536617317">
        <br>
        <input type="submit" name="" value="Guardar Datos">

      </form>


    </div>
    <div class="datos_tecnicos">
      <h2>Datos Técnicos</h2>
      <br>
      <form class="form_datos_tecnicos" action="" method="post">
        <label for="impresora">Modelo impresora</label>
        <br>
        <input type="text" name="impresora" value="" placeholder="Example: Prusa I3">
        <br>
        <label for="dimensionesImpresion">Volumen Impresión (cm)</label>
        <br>
        <input class="dimensionesImpresion" type="text" name="ejeX" value="" placeholder="Eje X"> <input class="dimensionesImpresion" type="text" name="ejeY" value="" placeholder="Eje Y"> <input class="dimensionesImpresion" type="text" name="ejeZ" value="" placeholder="Eje Z">
        <br>
        <label for="materiales">Materiales que puedo trabajar:</label>
        <br>
        <label for="PLA">PLA</label>
        <input type="checkbox" name="PLA" value="PLA">
        <label for="PLA">ABS</label>
        <input type="checkbox" name="ABS" value="ABS">
        <label for="Nylon">Nylon</label>
        <input type="checkbox" name="Nylon" value="Nylon">
        <label for="Wood">Wood</label>
        <input type="checkbox" name="Wood" value="Wood">
        <label for="PLA_Tough">PLA Tough</label>
        <input type="checkbox" name="PLA_Tough" value="PLA_Tough">
        <label for="otro">Otro</label>
        <input type="checkbox" name="Otro" value="Otro">
        <br>
        <label for="espesorCapa">Espesores de Capa (mm)</label>
        <br>
        <input class="dimensionesImpresion" type="text" name="espesorMinimo" value="" placeholder="Min">
        <input class="dimensionesImpresion" type="text" name="espesorMaximo" value="" placeholder="Max">
        <br>
        <input type="submit" name="" value="Guardar Datos">

    </div>


  </div>




  </body>
</html>
