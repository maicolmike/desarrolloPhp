<?php

	extract($_REQUEST);
	if(!isset($_REQUEST['pagina']))
		
		$pagina='galeria.php';		

?>

<?php

	extract($_REQUEST);
	if(!isset($_REQUEST['mensaje']))
		
		$mensaje=0;		

?>

<?php

	session_start();
	
	session_unset();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />

<link href="css/estilo_index.css" rel="stylesheet">
<link href="css/css/bootstrap.min.css" rel="stylesheet">

<title> Pagina Principal </title>
</head>

<script src="css/js/jquery.js"></script>
<script src="css/js/bootstrap.min.js"></script>

<body>

	<header><?php include('cuerpo/header.php'); ?></header>
    
    <nav><?php include('cuerpo/navegacion.php'); ?></nav>
    
    
	<section><?php include $pagina ?></section>
    
    <footer><?php include('cuerpo/pie.php'); ?>  </footer>

	<?php include('mensajesinclude.php'); ?>

</body>
</html>