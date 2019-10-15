<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BD_alumnos</title>
</head>
<body>
	<form action="autenticar.php" method="POST" >
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

		<label for="login"> Usuario:</label>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
		<input type="text" name="login" value="<?php if(isset($_COOKIE['usuario'])){
				echo $_COOKIE['usuario'];
		}  ?>"><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

		<label for="password">Contraseña:</label>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

		<input type="password" name="password" value="<?php if(isset($_COOKIE['password'])){
				echo $_COOKIE['password'];
		}  ?>"><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

		<label><input type="checkbox" name="chk" value="recordar" <?php if(isset($_COOKIE['usuario'])){
				echo "checked='checked'";
		}  ?> >Recordar usuario</label><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

		<input type="checkbox" name="chkc" value="recordar" <?php if(isset($_COOKIE['usuario'])){
				echo "checked='checked'";
		}  ?>>
		<label for="chkc">Recordar Contraseña</label><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

		<input type="submit" value="Ingresar">
		&nbsp;&nbsp;
		<input type="reset" value="Limpiar">
	</form>
	
</body>
</html>