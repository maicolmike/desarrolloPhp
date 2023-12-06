<?php
$num = $_POST["campo"];
$valor = $_POST["oculto"];

if($valor=='1') //aqui para el factorial
  {
$fact=1;

for ($i=1;$i<=$num;$i++)
    {
		$fact=$fact*$i;
		
	}
echo "El factorial de ".$num." es: ".$fact;

   }

if($valor=='2')
{
	
	$resultado1="";
	 for($j=1;$j<=10;$j++){
		 $resultado=$num*$j;
		 $resultado1=$resultado1.$num." * ".$j." = ".$resultado."\n";
	    
		 }
		  echo "<textarea name = 'ta' rows='15' cols='10'> $resultado1       </textarea>";
	
	
	
}







?>