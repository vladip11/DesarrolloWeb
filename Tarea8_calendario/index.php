<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Navegar Calendario</title>
	<script>
	function llamar(mes,anio)
	{ 

		ajax=new XMLHttpRequest();
		ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			document.getElementById('contenido').innerHTML= ajax.responseText;
			}
		}
		url= "calendario.php?mes="+mes+"&anio="+anio;
		
		ajax.open("get",url,true);
		ajax.send(null);

	}

	</script>
</head>
<body>
<script>
	x1=new Date();
	x2=new Date();
	mes=x1.getMonth()+1;
	anio=x2.getFullYear();
	llamar(mes,anio);
</script>	
<button onclick="anio--;llamar(mes,anio)" >&lt;&lt; año</button>
<button onclick="if (mes==1) mes=12; else mes--;llamar(mes,anio)" >&lt;&lt; mes</button>
<button onclick="x1=new Date(); x2=new Date(); mes=x1.getMonth()+1; anio=x2.getFullYear(); llamar(mes,anio)">actual</button>
<button onclick="mes=(mes %12)+1;llamar(mes,anio)" >&gt;&gt; mes</button>
<button onclick="anio++;llamar(mes,anio)" >&gt;&gt; año</button>

<div id="contenido">
	
</div> 


</body>
</html>