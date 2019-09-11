
<p><h1>Generacion de la tabla <br></h1></p>
<?php 
$Nfilas=$_POST["txtfilas"];
$Altura=$_POST["txtAltura"];
$Ncolumnas=$_POST["txtcolumnas"];
$Anchura=$_POST["txtAnchura"];

?>
<table width="<?php echo $Anchura; ?>" height="<?php echo $Altura;?>" border=1>
<?php	
for ($i=0;$i<=$Nfilas;$i++)
{ 
	?>
	<tr>
	<?php

	for ($j=0;$j<=$Ncolumnas;$j++)
	{ 
		if ($i==0)
		{
			if ($j==0)
			{
				?>
				<th>Nº</th>
			<?php 
			}
			else
			{
			?>
			<th><?php echo $j; ?></th>	
			<?php 
			}
		 }	
		else
		{	
		  if ($j==0)
		   {?>
		   	<th><?php echo $i; ?></th>
		   <?php }
		   else {
		   	?>
			<td><?php echo $i*$j; ?></td>
		   	<?php }	
		?>
		<?php
		}
		?>
	<?php	
	}
	?>
	</tr>
<?php	
}
?>
</table>