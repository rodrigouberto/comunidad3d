<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/miPerfil.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <div class="sendPost">
          <h3>Enviar publicacion</h3>
          <div class="datos_impresion">
            <form class="formsend" action="" method="get">
              <p>Descripcion</p>
              <textarea name="name" style="height:75px; width:300px;"></textarea>
              <div class="datossendimpresion">
                <div class="">
                  <p>Impresion:</p>
                  <p>Material:</p>
                  <p>Velocidad:</p>
                  <p>Infill:</p>
                </div>
                <div class="">
                  <p><input type="text" name="impresora" value=""></p>
                  <p><input type="text" name="material" value=""></p>
                  <p><input type="text" name="velocidad" value=""></p>
                  <p><input type="text" name="infill" value=""></p>
                </div>
              </div>
            <input class="botonsend" type="submit" name="enviar" value="Enviar">
          </form>
          <div class="imagen_impresion">
            <p>Agregar imagenes</p>
            <div class="">
              <img class="img" src="img/plus.png" alt="img1">
              <img class="img" src="img/plus.png" alt="img1">
              <img class="img" src="img/plus.png" alt="img1">
            </div>
          </div>
        </div>
      </div>
      <div class="">
        <h2>Publicaciones</h2>
        <div class="publicacion">
          <div class="p-parteizq">
            <div class="datos_impresion">
              <p style="width:100%;">Descripcion</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercit.</p>
              <div class="datossendimpresion" style="width:100%;">
                <div class="">
                  <p>Impresion:</p>
                  <p>Material:</p>
                  <p>Velocidad:</p>
                  <p>Infill:</p>
                </div>
                <div class="">
                  <p>asda</p>
                  <p>asdas</p>
                  <p>sad</p>
                  <p>asd</p>
                </div>
              </div>
            </div>
          </div>
          <div class="p-parted">
            <div class="imagen_post">
              <p>Imagenes</p>
              <div class="">
                <img class="img" src="img/plus.png" alt="img1">
                <img class="img" src="img/plus.png" alt="img1">
                <img class="img" src="img/plus.png" alt="img1">
              </div>
            </div>
          </div>
        </div>
      </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </body>
</html>
