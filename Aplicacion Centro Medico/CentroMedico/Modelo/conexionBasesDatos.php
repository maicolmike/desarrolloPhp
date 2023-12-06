<?php
function Conectarse()
{
	$objConexion = new mysqli("localhost","root","","centromedico");
	if ($objConexion->connect_error)
	{
		echo "Erro de conexion a la Base de Datos ".$objConexion->connect_error;
		exit();
	}
	else
	{
		return $objConexion;
	}
}
?>
