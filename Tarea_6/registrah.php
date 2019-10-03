<?php include ("conexion.php");


//$sql="SELECT id,nombres,apellidos,cu,ci from alumnos ";
//echo $sql;
$tipo=$_POST['tipoh'];


$sql="INSERT into tipohabitacion(habitacion) values ('$tipo')";
//echo $sql;
$resultado=$con->query($sql);
header("Location:habitaciones.php");
?>