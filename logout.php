<?php
  session_start();
  session_destroy();
  if (isset($_COOKIE['nombre'])){
    unset($_COOKIE['nombre']);
    unset($_COOKIE['email']);
    unset($_COOKIE['password']);
  }

  header('Location: index.php');
?>
