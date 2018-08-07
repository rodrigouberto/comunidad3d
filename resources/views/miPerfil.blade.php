<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/miPerfil.css">
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

    <title>Print it - Mi Perfil</title>
  </head>
  <body>
    <div class="main_header">
      <div class="opciones">
        <div><a href="#">Home</a></div>
        <div><a href="#">Algo</a></div>
      </div>

      <div class="home">
        <p>Print it!</p>
      </div>
      <div class="header_usuario">
        {{Auth::user()->name}}
        <img class="img_perfil" src="{{Auth::user()->perfil_src}}">
      </div>

    </div>
    <div class="container">
      <div class="parte-izq">
        <img src="{{Auth::user()->perfil_src}}" alt="">
        <h2>{{Auth::user()->name}}</h2>
        <p>Descripcion usuario</p>
        <ul>
          <li>Buenos Aires, Argentina</li>
          <li>www.userpage.com</li>
          <li>Se unio el: 21 de Julio de 2018</li>
        </ul>
        <h3>Contacto</h3>
        <p>{{Auth::user()->email}}</p>
        <p>11-1234-4567</p>

        <?php
          $esImpresor=Auth::user()->esImpresor;
          if ($esImpresor==0){
          echo  "<a href='printerForm'>Ofrecer mi servicio</a>";
          }
          else {
            echo "<a href=''>Modificar info de mi servicio</a>" ;
          }
        ?>
      </div>
      <div class="parte-derecha">
        <h3>Ultimas impresiones:</h3>

        <div class="publicacion">
          <div class="header_publicacion">
            <div class="usuario_publicacion">
              <img class="img_perfil" src="img/img-usuario.svg" alt="img_perfil">
              <h2><a href="">USER NAME</a></h2>
            </div>
            <div class="imagen_impresion">
              <p>Agregar imagenes</p>
              <img class="img" src="img/plus.png" alt="img1">
              <img class="img" src="img/plus.png" alt="img1">
              <img class="img" src="img/plus.png" alt="img1">
            </div>
          </div>
          <div class="datos_impresion">
            <ul>
              <li>Impresora: Prusa I3</li>
              <li>Material: ABS</li>
              <li>Velocidad: 50mm/s</li>
              <li>Infill: 20%</li>
            </ul>
          </div>

      </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </body>
</html>
