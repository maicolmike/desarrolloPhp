<?php
 $con = mysqli_connect("localhost","root","","buzon");
       
if($_POST)
{
	
        $nombre= $_POST ['nombre'];
		$identificacion= $_POST ['cedula'];
		$email= $_POST ['correo'];
		$telefono= $_POST ['telefono'];
		$tipo= $_POST ['tipo'];
		$mensaje= $_POST ['mensaje'];

mysqli_query($con,"insert into persona(nombre,identificacion,email,telefono,tipo,mensaje) values('$nombre','$identificacion','$email','$telefono','$tipo','$mensaje')");

  } 
//asi tambien funciona, se comentarea lo de arriba menos el } ni el {

/*mysqli_query($con,"insert into persona(nombre,identificacion,email,telefono,tipo,mensaje) values('".$_POST['nombre']."','".$_POST['cedula']."','".$_POST['correo']."','".$_POST['telefono']."','".$_POST['tipo']."','".$_POST['mensaje']."')");
	    */
	   
			
	
	//para hacer consultas, y en los echos imprimir
	/*     $res1 = mysqli_query($con,"SELECT * FROM persona");
		 $row1 = mysqli_fetch_array($res1);    // con esto no me dio error
echo "identificacion ".$row1['identificacion']; 
echo $row1['nombre'] ;*/
	
?>