<?php include("operaciones.php"); 
session_start();
$a1=$_POST["txta"];
$b1=$_POST["txtb"];
$c1=$_POST["txtc"];
?>
<p><h3>Calculo del menor</h3></p>
<?php
	operaciones::calcularMenor($a1,$b1,$c1);

?>
