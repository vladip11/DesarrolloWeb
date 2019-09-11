
<p><h1>seleccion de meses</h1></p>
<?php 
$mes=["enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre"];
$n=$_GET['txtm'];
?>
<select name="mes">
	<?php
for ($i=0; $i<=11 ; $i++) { 
	
	if ($i!=$n-1) {
		
		?>
		<option><?php echo $mes[$i];?></option>
	<?php
	}
	}
	?>
	<option selected><?php echo $mes[$n-1];?></option>
</select>




