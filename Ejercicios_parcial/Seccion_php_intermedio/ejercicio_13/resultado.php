
<?php 
$n=$_COOKIE['n'];
$mult=1;
for ($i=0; $i < $n; $i++) { 
$mult=$mult*$_POST['n'.$i];
 } 
echo "la multiplicacion de los numeros es:" .$mult;

?>
