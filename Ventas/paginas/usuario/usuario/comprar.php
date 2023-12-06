<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Comprar Automovil </title>
</head>

<body>

	<?php 
	
		$idcarro = $_GET['idcarro'];
		$nombre = $_SESSION['nombre'];
		$tiempo = date("Y-m-d H:i:s");
		
				
			$conexion = mysqli_connect("localhost","root","","automoviles");
			
			$consultacliente = mysqli_query($conexion,"select * from clientes where nomcliente = '$nombre'");
			$sql = mysqli_fetch_array($consultacliente);
			
			$asignacion = $sql['cedula'];
			
			
			$datos = mysqli_query($conexion,"insert into ventas(idcliente,fechaventa,idautomivil) values($asignacion,'$tiempo','$idcarro');");
			
			
			header("location:principal.php?pag=usuario/comprascliente.php");
			
	
	?>
    
    
    	
    
    	

</body>
</html>