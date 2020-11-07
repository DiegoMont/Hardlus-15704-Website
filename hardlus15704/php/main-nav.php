<?php
class Boton {
  private const inicio_boton = "<a class='btn' href='";
  private const final_boton = "</a>\n";
  private $texto_btns = array(
    array("index.php", "Home"),
    array("our-team.php", "Nosotros"),
    array("menu-STEM.php", "Actividades")
  );

  function __construct($indice){
    $this->texto_btns[$indice][0] = "#' id='btn-pagina-actual";
  }

  function toString(){
    $texto_btns = "";
    foreach($this->texto_btns as &$texto){
      $texto_btns .= self::inicio_boton .  $texto[0] . "'>" . $texto[1] . self::final_boton;
    }
    return $texto_btns;
  }
}

$indice_home = 0;
$indice_actividades = 2;
$indice_nosotros = 1;
$indice_torneo = 3;

function printNav($indice){
  $primera_parte = "<div class='centre nav-grid'>
<div class='btns-nav flexbox'>";
$ultima_parte = "</div>
<div class='logo-nav'>
  <a href='index.php'>
    <img src='img/hardlus-sin-fondo-blanco.png' alt='Hardlus 15704'>
  </a>
</div>
</div>";
  $boton = new Boton($indice);
  echo $primera_parte . $boton->toString() . $ultima_parte;
}