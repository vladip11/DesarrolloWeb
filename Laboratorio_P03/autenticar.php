<?php include ('conexion.php');

$usuario=$_POST["login"];
$password=$_POST["password"];
$rusuario=$_POST["chk"];
$rcontrasena=$_POST["chkc"];

if ($rusuario=="recordar"){
	setcookie("usuario",$usuario,time()+3600);
}
if ($rcontrasena=="recordar"){
	setcookie("password",$password,time()+3600);
}
if ($rusuario==Null){
	
	setcookie("usuario","",time()-6400);
}
if ($rcontrasena==Null){
	
	setcookie("password","",time()-6400);
	
}

$sql="SELECT * from usuarios where login='$usuario' and contrasena='$password'";
	$resultado=$con->query($sql);	
	if($fila=$resultado->fetch_assoc()){
		$nivel=$fila['Nivel'];
		$login=$fila['login'];
		session_start();
		$_SESSION['Nivel']=$nivel;
		$_SESSION['login']=$login;
		echo'<meta http-equiv="REFRESH" content="0;URL=fintro.html">';
	}
	else
		echo "USUARIO O CONTRASEÑA INCORRECTO";
		echo'<meta http-equiv="REFRESH" content="2;URL=fromlogin.php">';
?>

	
