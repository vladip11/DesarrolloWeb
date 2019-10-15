<?php include ('conexion.php');
$n=$_POST["numero"];
	setcookie("numero",$n,time()+3600);
?>
<label><h3>&nbsp;&nbsp;&nbsp;&nbsp; Nombres &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Apellidos &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CU &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sexo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Carrera </h3></label>
<form action="ingresar.php" method="POST">
<?php
for ($i=0; $i < $n; $i++) { 
echo $i+1; echo "&nbsp;&nbsp;";
?>
<input type="text" name="nombre<?php echo $i; ?>">
<input type="text" name="apellido<?php echo $i; ?>">
<input type="text" name="<?php echo "carnet".$i;?>"/> 
<input type="radio" name="<?php echo "sexo".$i; ?>" value="masculino">Masculino
<input type="radio" name="<?php echo "sexo".$i; ?>" value="femenino">Femenino &nbsp;
<select name="carrera<?php echo $i; ?>">
	<?php $sql="SELECT * from carrera ";
	$resultado=$con->query($sql); 
	while($fila=$resultado->fetch_assoc()){
		echo "<option >";
		echo $fila['nombreC']; echo "</option>";
	} ?>
</select>
<br>
<?php
}
?>
&nbsp;&nbsp;&nbsp;<input type="submit" value="Registrar"> &nbsp;&nbsp;
<input type="reset" value="Limpiar">
</form>