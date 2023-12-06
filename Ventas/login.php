<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> login </title>
</head>

<body>

	<?php 
		
		$login = $_POST['usuario'];
		$passw = md5($_POST['pass']);
	
				$conexion = mysqli_connect("localhost","root","","automoviles");
				
				$consultanombre =  mysqli_query($conexion,"select * from clientes");
								
				while ($re = mysqli_fetch_array($consultanombre)){
					
						if($login == $re['login']){
							
								$cedula = $re['cedula'];							
							
							}
					
					}				
								
				
				$sql = mysqli_query($conexion,"select * from usuarios where login='$login' and pass='$passw'");				
				$tipo = mysqli_fetch_array($sql);
				
				$consulta = mysqli_num_rows($sql);
				
				
				
				
					if(($consulta == 1)&&($tipo['tipousuario'] == 'administrador')){
							
										session_start();
										
										$_SESSION['login']=$login;
										$_SESSION['nombre']=$tipo['nombrecompleto'];
										
										
										header("location:paginas/admin/principal.php");
							
								}else if(($consulta == 1)&&($tipo['tipousuario'] == 'usuario')){
										
												session_start();
												
												$_SESSION['login']=$login;
												$_SESSION['nombre']=$tipo['nombrecompleto'];
												$_SESSION['identificacion']=$cedula;
										
											
														header("location:paginas/usuario/principal.php");
											
											}else {
															header("location:index.php?pagina=galeria.php&mensaje=3");
																								
															}
																					
																	
								
		
	?>

</body>
</html>