<?php 

	session_start();
	
	if(!isset($_SESSION['nombre'])&& !isset($_SESSION['login'])){
		
			header("location:../../Index.php");
		
		}

?>

<?php

	extract($_REQUEST);
	if(!isset($_REQUEST['pag']))
		
		$pag='centro.php';		

?>

<?php

	extract($_REQUEST);
	if(!isset($_REQUEST['men']))		
		$men=0;		

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />

<link href="css/estilo_index.css" rel="stylesheet">
<link href="agregarautos/estilosAgregar.css" rel="stylesheet">

<title> Pagina Principal Administrador </title>
</head>

<body>

		

	<header><?php include('cuerpos/header.php'); ?></header>
    
    <div style="font-size-adjust: 20px; text-align:right; background:#333; color:#FFF;"> <?php echo "Bienvenido Administrador: ".$_SESSION['nombre']; ?> </div>
    
    <nav id="navegar"><?php include('cuerpos/navegacion.php'); ?></nav>
    
	<section><?php include $pag ?></section>
    
    <footer><?php include('cuerpos/pie.php'); ?>  </footer>

</body>

	<?php include('men.php'); ?>

</html>