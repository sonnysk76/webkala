<?php
class Productos {
  private var  $id;
  private var  $numero;
  private var  $producto;
  private var  $stock;
  private var  $descripcion;
  private var  $precio;
  private var  $depto;
   private static var $numItems = 0;
  
  function __construct(){
    print "Hola desde la clase Productos.<br>";
  }
    function __destruct(){
    print "Adios desde la clase Productos.<br>";
  }
  
    public function setNumero($valor){
    if ($valor!=""){
      $this->numero = $valor;
      return true;
    } else {
      return false;
    }
      
    public function getNumero(){
      return $this->numero;
    }  
  public function setProducto($valor){
    if ($valor!=""){
      $this->producto = $valor;
    return true;
    } else {
      return false;
    }
      public function getProducto(){
      return $this->producto;
    } 
      public function setStock($valor) {
        if ($valor>=0 && $valor<=10000){
          $this->stock = $valor;
   return true;
    } else {
      return false;
    }
     public function getStock(){
      return $this->stock;
    } 
        public function setDescripcion($valor){
          if ($valor!=""){
            $this->descripcion = $valor;
            return true;
          } else {
            return false;
          }
        }
            public function getDescripcion(){
      return $this->descripcion;
    } 
      public function setPrecio($valor){
        if ($valor>=0 && $valor <=100000){
          $this->precio = $valor;
          return true;
        } else{
          return false;
        }
      }
            public function getPrecio(){
      return $this->precio;
    } 
      public function setDepto($valor){
        if ($valor != ""){
          $this->depto=$valor;
        }
      }
        
        
        
}

 
	
  
?>