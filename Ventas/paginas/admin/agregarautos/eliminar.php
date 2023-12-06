<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Eliminar Automovil </title>
</head>

<body>

	<?php
    
		$ide = $_GET['id'];
		
		$conexion = mysqli_connect("localhost","root","","automoviles");
		$sql = mysqli_query($conexion,"delete from autos where idauto='$ide'");
		
			header('location:principal.php?pag=agregarautos/consulta.php');
	
	?>

</body>
</html>