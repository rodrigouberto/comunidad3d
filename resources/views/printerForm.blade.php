<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="/printerForm/create" method="GET" enctype="multipart/form-data">
      @csrf
      <p>Datos personales</p>
      <input type="hidden" name="nombreUsuario" value="{{Auth::user()->name}}">
      <br>
      <br>
      <!-- <label for="web">Web</label>
      <input type="text" name="" value="" placeholder="www.miweb.com.ar">
      <br> -->
      <label for="localidad">Localidad</label>
      <input type="text" name="zona" value="{{old('zona')}}">
      <!-- <select class="List" name="zona">
        <option selected value="0"> Seleccionar Zona </option>
          <optgroup label="Zona">
           <option value="1">Villa Urquiza</option>
           <option value="2">Belgrano</option>
           <option value="3">Saavedra</option>
          </optgroup>
      </select> -->
      <br>

      <!-- <p>Datos tecnicos</p>

      <label for="materiales">Materiales</label>
      <br>
      <label for="PLA">PLA</label>
      <input type="checkbox" name="PLA" value="PLA">
      <label for="ABS">ABS</label>
      <input type="checkbox" name="ABS" value="ABS">
      <label for="Wood">Wood</label>
      <input type="checkbox" name="Wood" value="Wood">
      <label for="Flex">Flex</label>
      <input type="checkbox" name="Flex" value="Flex">
      <label for="HIPS">HIPS</label>
      <input type="checkbox" name="HIPS" value="HIPS">
      <label for="otro">Otro</label>
      <input type="checkbox" name="otro" value="otro">
      <br>
      <p>Tamaño maximo de impresión (en cm)</p>
      <label for="alto">Alto</label>
      <input type="text" name="alto" value="">
      <label for="ancho">Ancho</label>
      <input type="text" name="ancho" value="">
      <label for="profundidad">Profundidad</label>
      <input type="text" name="profundidad" value="">
      <p>Espesores de capa</p>
      <label for="[object Object]">Min:</label>
      <input type="text" name="" value="">
      <label for="[object Object]">Max:</label>
      <input type="text" name="" value="">
      <br>
      <label for="[object Object]">Precio por hora de impresion</label>
      <input type="text" name="" value="">
      <br>
      <br> -->

  <input type="text" name="perfil_src" value="{{old('perfil_src')}}">

  <input type="submit" name="submit" value="Guardar datos">


    </form>
  </body>
</html>
