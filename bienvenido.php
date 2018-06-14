<?php
require_once("functions.php");
include_once("registro.php");
session_start();
$_SESSION['user']= $user;
$user=$_POST["nombre"];
echo "Hello $user";

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
  </body>
</html>
