<?php include("operaciones.php"); 
SESSION_START();
$n1=$_POST["txtn"];
?>
<p><h3>calclulo de la serie fibonacci</h3><br></p>
<?php
	operaciones::calcularFibonacci($n1);
?>