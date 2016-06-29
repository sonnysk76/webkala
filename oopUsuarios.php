<?php

class Usuarios {
  
  private var $id;
  private var $clave;
  private var $correo;
  private var $empresa;
  private var $nombre;
  private var $apellidoMaterno;
  private var $apellidoPaterno;
  private var $fechaNacimiento;
  private var $direccion;
  private var $entreCalles;
  private var $colonia;
  private var $ciudad;
  private var $estado;
  private var $codigoPostal;
  private var $pais
  private var $telefono;
  private var $obervaciones;
  private static var $numItems = 0;
  
  function __construct(){
    
    print "Hola desde la clase Usuarios.<br>";
    
    
  }
  
  function __destruct(){
    print "Adios desde la clase Usuarios. <br>";
    
  }
  
  
}

?>