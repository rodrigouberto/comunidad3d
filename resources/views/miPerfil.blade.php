<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/bienvenido.css">
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

    <title>Print it - Mi Perfil</title>
  </head>
  <body>
    <div class="main_header">
      <div class="home">
        <h2>Print it!</h2>
      </div>

      <div class="header_usuario">
        <div id="header">
              <ul class="nav">
                <li><a class="opciones_usuario" href="miPerfil.php">{{Auth::user()->name}}</a>
                  <ul>
                     <h2><a href="home">Home</a></h2>
                    <li><h2><a href="logout">Cerrar sesion</a></h2></li>
                  </ul>
                </li>
              </ul>
            <img class="img_perfil" src="{{Auth::user()->perfil_src}}" alt="img_perfil">
        </div>
      </div>
    </div>
  </body>
</html>
