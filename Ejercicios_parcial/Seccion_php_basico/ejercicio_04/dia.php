<?php $n=$_GET['txtn'];
	$dia=["lunes","martes","miercoles","jueves","viernes","sabado","domingo"];
	$n=$_GET['txtn'];
	
?>
<select name="" >
	<?php  
		for ($i=0; $i < 7; $i++) { 
			?><option <?php if ($i==$n-1) echo "selected";
			 ?>>
			  <?php echo $dia[$i]; ?>

		</option>
		<?php
		}

	?>
	
</select>
