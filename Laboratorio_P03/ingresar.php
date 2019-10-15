<?php include ('conexion.php');
 $num=$_COOKIE['numero'];

 for ($i=0; $i <$num ; $i++) { 
 	$nombre=$_POST['nombre'.$i];
 	$apellido=$_POST['apellido'.$i];
 	$CU=$_POST['carnet'.$i];
 	$sexo=$_POST['sexo'.$i];
 	$carrera=$_POST['carrera'.$i];
 	$sql="SELECT cod_carrera from carrera where nombreC='$carrera'";
 	$resultado=$con->query($sql);
 	$fila=$resultado->fetch_assoc();
 	$codigo=$fila['cod_carrera'];
 	$sql="INSERT INTO alumnos ( nombre, apellido, cu, sexo, cod_carrera) VALUES ( '$nombre', '$apellido', '$CU', '$sexo', '$codigo')";
 	echo $sql;
 	$resultado=$con->query($sql);
 	#$resultado->fetch_assoc();
 }
echo'<meta http-equiv="REFRESH" content="0;URL=fintro.html">';
?>