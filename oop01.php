<?php

class Gatos{
  var $nombre;
  var $colorPelo;
  var $corbata = "si";
  
  function maullar () {
    print "miau miau <br>";
  } 
  
  function tieneCorbata() {
    return $this->nombre." ".$this->corbata." Tiene Corbata y tiene el pelo ".$this->colorPelo.".<br>";
  }    
}

$cucho = new Gatos();
$benito = new Gatos();
$espanto = new Gatos();

$cucho->nombre = "Cucho";
$benito->nombre = "Benito";
$espanto->nombre = "Espanto";

$cucho->colorPelo = "rosa";
$benito->colorPelo = "azul";
$espanto->colorPelo = "naranaja";

$cucho->corbata = "NO"; 
print $cucho->tieneCorbata();
print $espanto->tieneCorbata();
print $benito->tieneCorbata();


?>