<?php
require_once("functions.php");
session_start();
 echo $_SESSION["nombre_usuario"];

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bienvenido.css">
    <title></title>
  </head>
  <body>
    <h1>BIENVENIDO</h1>

    <h2><a href="index.php">cerrar sesion</a></h2>
  </body>
</html>
