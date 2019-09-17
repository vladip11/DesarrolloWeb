<?php include("operaciones.php"); 
session_start();
$cadena1=$_POST["txtcadena"];

?>
<p><h3>Generacion de piramide a partir de una cadena</h3></p>
<?php
	operaciones::gencadena($cadena1);

?>