<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reservas</title>
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
				<div align="center"><a href="freservas.php">Reservas</a><br><br>	</div>
				<div align="center"><a href="cerrar.php">Salir</a><br></div>
			    </div>
			    	<br><br>
				<div id="centro">
					<form action="registrah.php" method="POST" align="center">
						<label for="tipoh">Tipo de habitacion</label>
						<input type="text" name="tipoh"><br>
						<input type="submit" value="Registrar">
					</form>	
	
				</div>	
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
				<div align="center"><a href="cerrar.php">Salir</a><br></div>
			    </div>
			    		<br><br>
				<div id="centro">
				<form action="registrah.php" method="POST" align="center">
					<form action="registrah.php" method="POST" align="center">
						<label for="tipoh">Tipo de habitacion</label>
						<input type="text" name="tipoh"><br>
						<input type="submit" value="Registrar">
					</form>	
				</form>	
				</div>	
		<?php	
			}
		?>	

	</div>
	<?php
	}
	?>
</body>
</html>	