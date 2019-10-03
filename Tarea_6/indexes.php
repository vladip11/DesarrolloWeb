<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>INDEX</title>

	<link rel="stylesheet" type="text/css" href="maqueta.css">
	<link rel="stylesheet" href="inde.css">
</head>

<body>
	<div id='contenedor'>

	<?php 
		
		session_start();
		if(isset($_SESSION['login'])){
			if($_SESSION['Nivel']==1){
				$nivel="ADMINISTRADOR  ";
				echo"<div id='arriba'>";
				echo "<div align='center'><h3>Binevenidos al Hotel Tarabuco</h3></div>";
				echo "<div align='center'><b>Usuario: </b>".$_SESSION['login']."<br><b>Nivel: </b>"."$nivel"."</div>";
				  
				echo"</div>";
	?>	
				<div id="izquierda">
				<br>	
				<div align="center"><a href="habitaciones.php">Habitaciones</a><br><br>	</div>	
				<div align="center"><a href="freservas.php">Reservas</a><br><br>	
				<a href="cerrar.php">Salir</a><br></div>	
				</div>	
				<table align="center" ><br><br><br>
					<th><td>TIPO</td><td>PRECIO POR NOCHE</td></th>
					<tr><td></td><td>Simple</td><td>100</td></tr>
					<tr><td></td><td>doble</td><td>150</td></tr>
					<tr><td></td><td>tiple</td><td>200</td></tr>
					<tr><td></td><td>Matrimonial</td><td>250</td></tr>
					<tr><td></td><td>suite</td><td>400</td></tr>
				</table>

			 <?php	 
		    }  

			else{
				$nivel="CLIENTE<br>";
				echo"<div id='contenedor'>";
				echo"<div id='arriba'>";
				echo "<div align='center'><h3>Binevenidos al Hotel Tarabuco</h3></div>";
				echo "<div align='center'><b>Usuario: </b>".$_SESSION['login']."<br><b>Nivel: </b>"."$nivel"."</div>";
				echo"</div>";
				?>		
				<div id="izquierda">
				<br>	
				<div align="center"><a href="habitaciones.php">Habitaciones</a><br><br>	</div>	
				<div align="center"><a href="freservas.php">Reservas</a><br><br>	</div>
				<div align="center"><a href="cerrar.php">Cerrar sesion</a><br></div>	
				</div>
				<table align="center"><br><br><br>
					<th><td>TIPO</td><td>PRECIO POR NOCHE</td></th>
					<tr><td></td><td>Simple</td><td>100</td></tr>
					<tr><td></td><td>doble</td><td>150</td></tr>
					<tr><td></td><td>tiple</td><td>200</td></tr>
					<tr><td></td><td>Matrimonial</td><td>250</td></tr>
					<tr><td></td><td>suite</td><td>400</td></tr>
				</table>	
			<?php	
			}
			?>	
		
	<?php	

		}
		else{
			echo"ACCESO DENEGADO";
			echo'<meta http-equiv="REFRESH" content="2;URL=login.html">';
		}	
	?>
</body>
</html>