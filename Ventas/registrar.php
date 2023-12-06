<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> insertar clientes </title>
</head>

<body>

	<?php 
	
	$nit = $_POST['nit'];
	$cedula = $_POST['cedula'];
	$nombre = $_POST['nombre'];
	$dir = $_POST['dir'];
	$telefono = $_POST['telefono'];
	$usuario = $_POST['usuario'];
	$pass = $_POST['pass'];
	$ciudad = $_POST['ciudad'];
	$user = 'usuario';
	
		$conexion = mysqli_connect("localhost","root","","automoviles");
		$datos = mysqli_query($conexion,"select * from clientes where idcliente='$nit'");
		
		$filas = mysqli_num_rows($datos);
		
		if($filas == 0){
			
			
			$consultacliente = mysqli_query($conexion,"insert into clientes(idcliente,cedula,nomcliente,dircliente,idciudad,login) values('$nit',$cedula,'$nombre','$dir',$ciudad,'$usuario');");
			
			$consultatelefono = mysqli_query($conexion,"insert into telefonos(idcliente,numtelefono) values('$nit','$telefono');");
			
			$consultausuarios = mysqli_query($conexion,"insert into usuarios(login,pass,nombrecompleto,tipousuario) values('$usuario',md5('$pass'),'$nombre','$user');");	
			
					header("Location:index.php?pagina=galeria.php&mensaje=1");
			
			}else {
				
						header("Location:index.php?pagina=registro.php&mensaje=2");
				
					}		
		 	
	?>

</body>
</html>