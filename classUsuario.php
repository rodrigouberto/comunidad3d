<?php
/**
 *
 */
class usuario
{
  public $nombre;
  private $email;
  public function getEmail(){
    return $this->email;
  }
  private $localidad;
  public function getLocalidad(){
    return $this->localidad;
  }

  function __construct($nombreUsuario, $emailUsuario,$localidadUsuario)
  {
    $this->nombre=$nombreUsuario;
    $this->email=$emailUsuario;
    $this->localidad=$localidadUsuario;
  }
}
$AlejoArdanaz=new usuario("Alejo Ardanaz","alejo.ardanaz@gmail.com","Nuñez");
 ?>
