<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="{{ asset('css/miPerfil.css') }}" rel="stylesheet" type="text/css" >

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
            <img class="img_perfil" src="img/user.png">
      </div>

    </div>
    <div class="container">
      <div class="parte-izq">
        <img class="perfil_impresor" src="{{asset($printer->perfil_src)}}" alt="">
        <h2>{{$printer->nombreUsuario}}</h2>
        <p>Descripcion usuario</p>
        <ul>
          <li>Buenos Aires, Argentina</li>
          <li>www.userpage.com</li>
          <li>Se unio el: 21 de Julio de 2018</li>
        </ul>
        <h3>Contacto</h3>
        <p>{{$printer->email}}</p>
        <p>11-1234-4567</p>
      </div>
      <div class="parte-derecha">
        <h3>Ultimas impresiones:</h3>
        <div class="publicaciones">
          <div class="publicacion">
              <p><strong>Nombre de la impresion 1 - 5 days ago</strong></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
          </div>
          <div class="publicacion">
            <p><strong>Nombre de la impresion 2 - 15 days ago</strong></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
          </div>
          <div class="publicacion">
            <p><strong>Nombre de la impresion 3 - 45 days ago</strong></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
