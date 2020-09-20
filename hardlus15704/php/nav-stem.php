<?php
class Botones {

  private $indice;
  private $texto_btns = array(
    array("actividades-ciencia.php", "back-img-verde", "Ciencia"),
    array("actividades-tecnologia.php", "back-img-amarillo", "Tecnolog&iacute;a"),
    array("actividades-ingenieria.php", "back-img-azul", "Ingenier&iacute;a"),
    array("actividades-matematicas.php", "back-img-naranja", "Matem&aacute;ticas"),
    array("actividades-ecologia.php", "back-img-ecologia", "Ecolog&iacute;a"),
    array("actividades-arte.php", "back-img-arte", "Artes")
  );

  function __construct($indice){
    $this->indice = $indice;
  }

  function toString(){
    $texto_btns = "";
    foreach($this->texto_btns as $k => $texto){
      $opacar = $this->indice == $k ? "": "opacar";
      $texto_btns .= "<a href='{$texto[0]}' class='btn-area btn {$texto[1]} {$opacar}'>{$texto[2]}</a>\n";
    }
    return $texto_btns;
  }
}

function printNavStem($indice){
  $primera_parte = "<div class='centre flexbox'>";
  $ultima_parte = "</div>";
  $boton = new Botones($indice);
  echo $primera_parte . $boton->toString() . $ultima_parte;
}