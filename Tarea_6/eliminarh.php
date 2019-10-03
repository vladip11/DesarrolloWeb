<?php include ("conexion.php");

$id=$_GET['txtId'];
$sql="DELETE FROM tipohabitacion where id_tipohabitacion=$id";
//echo $sql;
$resultado=$con->query($sql);
header("Location:habitaciones.php");
?>