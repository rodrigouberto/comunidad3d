
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="css/reset.css">
      <link rel="stylesheet" href="css/home.css">
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
                  <li><a class="opciones_usuario" href="miPerfil.php">{{Auth::user()->name}}</a>
          					<ul>
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
        <br>
        <h2>Ultimas impresiones</h2>
        @foreach ($users as $user)
        <div class="publicacion">
          <div class="parte-izq" style="width:30%;">
            <div class="postt">
              <img class="" style="height:80px;" src="img/img-usuario.svg" alt="img_perfil">
              <h2><a href="/user/{{$user->id}}">{{$user->name}}</a></h2>
            </div>
            <ul class="ul-post">
              <li>Impresora: Prusa I3</li>
              <li>Material: ABS</li>
              <li>Velocidad: 50mm/s</li>
              <li>Infill: 20%</li>
            </ul>
          </div>
          <div class="parte-medio">
              <a href="/printerProfile/{{$user->printers_id}}">Contactar Impresor</a>
          </div>
          <div class="parte-der">
            <img class="img" src="img/elefante.jpg" alt="img1">
          </div>
      </div>
      @endforeach





    </div>

</body>
</html>
