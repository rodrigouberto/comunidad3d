
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="css/reset.css">
      <link rel="stylesheet" href="css/bienvenido.css">
      <link rel="stylesheet" href="css/busqueda.css">

      <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

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
                  <li><a class="opciones_usuario" href="miPerfil">{{Auth::user()->name}}</a>
          					<ul>
                       <h2><a href="home">Home</a></h2>
                       <h2><a href="miPerfil">Mi perfil</a></h2>
          						<li><h2><a href="logout">Cerrar sesion</a></h2></li>
          					</ul>
          				</li>
          			</ul>
              <img class="img_perfil" src="{{Auth::user()->perfil_src}}" alt="img_perfil">
          </div>
        </div>
      </div>
      <div class="busqueda">

        <form class="formBusqueda" action="busqueda" method="get">
          <h3>Buscar impresor</h3>

          <label for="Zona">Zona</label>
          <select class="List" name="zona">
            <option selected value="0"> Seleccionar Zona </option>
              <optgroup label="Zona">
               <option value="1">Villa Urquiza</option>
               <option value="2">Belgrano</option>
               <option value="3">Saavedra</option>
              </optgroup>
          </select>
          <label for="Material">Material</label>
          <select class="List" name="Material">
            <option selected value="0"> Seleccionar Material </option>
              <optgroup label="Material">
                 <option value="1">PLA</option>
                 <option value="2">ABS</option>
                 <option value="3">Nylon</option>
                 <option value="4">Flex</option>
                 <option value="5">Wood</option>
              </optgroup>
          </select>
          <input class="button" type="submit" name="buscar" value="Buscar">
        </form>
      </div>


      <div class="main_container">
              @foreach($printers as $printer)
              <div class="resultadosBusqueda">
                <div class="izq_col">
                  <img class="perfil_impresor" src="{{$printer->perfil_src}}" alt="">
                  {{ $printer->nombreUsuario }}
                   <!-- $printer->materiales  -->

                </div>
                <div class="datos_tecnicos">
                  <ul>
                    <li>Materiales:</li>
                    <li>Tamaño máximo de impresión:</li>
                    <li>Espesores de capa:</li>
                    <li>Modelado 3D:</li>
                  </ul>
                </div>
                <div class="datos_personales">
                  <ul>
                    <li>Zona:</li>
                    <li>Reputación:</li>
                    <li>Precio/hora:</li>
                    <li>Envíos:</li>
                  </ul>
                </div>
                <!-- <div class="comentarios">
                  <h3>Comentarios</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div> -->
                <div class="links">
                  <a href="#">Ver perfil</a>
                  <a href="#">Contactar</a>
                </div>
              </div>

              @endforeach



      </div>

</body>
</html>
