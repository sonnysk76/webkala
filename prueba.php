<?php 
include ("oopUsuarios.php");
$usuario = new Usuarios();
unset ($usuario);

print "Numero de Usuarios en el sistema: ".Usuarios::$numItems."<br>";

?>