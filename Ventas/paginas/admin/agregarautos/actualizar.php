<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Actualizar Datos de Autos </title>
</head>

<body>

	<?php 
	
		$id = $_POST['matricula'];
		$nomimg = $_POST['nomimagen'];
		$marca = $_POST['marca'];
		$modelo = $_POST['modelo'];
		$color = $_POST['color'];
		$precio = $_POST['precio'];	
		
			$conexion = mysqli_connect("localhost","root","","automoviles");
			$sqlupdate = mysqli_query($conexion,"update autos set imagen = '$nomimg', idmarca = '$marca', idmodelo = '$modelo', idcolor = '$color', idprecio = '$precio' where idauto = '$id' ");
			
			header('location:principal.php?pag=agregarautos/consulta.php'); 	
	
	?>

</body>
</html>