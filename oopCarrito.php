<?php
class Carrito {
  private var  $id;
  private var  $idProducto;
  private var  $idUsuario;
  private var  $cantidad;
  private var  $precio;
  private var  $fecha;
  private static var $numItems = 0;
  
  function __construct(){
    print "Hola desde la clase Carrito.<br>";
  }
  
  function __destruct(){
    print "Adios desde la clase Carrito.<br>";
  }
}

?>