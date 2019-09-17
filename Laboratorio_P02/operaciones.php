<?php
class operaciones {
	private $n;
	private $a;
	private $b;
	private $c;
	private $cadena;
	public function  __construct() {
		
		$this->n=0;
		$this->a=0;
		$this->b=0;
		$this->c=0;
		$this->cadena="";

	}
	public function  calcularFibonacci($n1)
	{
		$n=$n1;
		$v=array();
		$a=0;
		$b=1;
		$c;
		for ($i=0;$i<$n;$i++)
		{
			echo $a." ";
 		$c=$a+$b;
 		$a=$b;
 		$b=$c;
 		
 		} 
		}
    
    public function  calcularMenor($a1,$b1,$c1)
	{
		$a=$a1;
		$b=$b1;
		$c=$c1;
		if (($a<$b)&&($a<$c)) {
			echo "El numero menor de los valores ".$a.", ".$b.", ".$c." es: ".$a;
		}
		if (($b<$a)&&($b<$c)) {
			echo "El numero menor de los valores ".$a.", ".$b.", ".$c." es: ".$b;
		}
		if (($c<$b)&&($c<$a)) {
			echo "El numero menor de los valores ".$a.", ".$b.", ".$c." es: ".$c;
		}
    }
    	public function  gencadena($cadena1)
		{
		 $cadena=$cadena1;
		 $aux=strlen($cadena)/2;
		 $post="";
		 $ant="";
		 $imp="";
		 if(strlen($cadena)%2!=0){
		 	$imp=substr($cadena,$aux,1);
		 	$aux2=$aux;
		 }else{
		 	$aux2=$aux;
		 	$aux=$aux-1;
		 }
		 echo $imp;
		 echo "<br>";
		 

		 for ($i=$aux+1; $i < strlen($cadena); $i++) { 
		 	$aux2=$aux2-1;
		 	$post=substr($cadena,$i,1);
		 	$ant=substr($cadena,$aux2,1);
		 	$imp=$ant.$imp.$post;
		 	echo $imp;
		 	echo "<br>";
		 	
		 }
		 
		}
    
	}

   
?>
