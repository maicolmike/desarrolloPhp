<?php
	function conectar($servidor, $usuario, $clave, $base) {
		$con = mysqli_connect($servidor, $usuario, $clave);	
		$con->set_charset('utf8'); //dejar este comando para que se imprima el archivo pdf
		if(!$con) {
			echo "No se pudo conectar a $servidor";
			exit;
		}
		if(!mysqli_select_db($con,$base)) {
			echo "No se pudo establecer $base como activa<br>";
			exit;
		}
		return $con;
	}
	$con=conectar("funacsep.com", "funacsep_prueba", "Mocoa2020*", "funacsep_prueba");
?>