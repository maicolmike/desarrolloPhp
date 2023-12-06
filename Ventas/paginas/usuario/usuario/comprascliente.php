<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Mostrar Productos Adquiridos </title>


</head>

<body style="background:#CCC;">

	<?php 
	
		$cedula = $_SESSION['identificacion'];

		$conexion = mysqli_connect("localhost","root","","automoviles");
	 	
		$datos = mysqli_query($conexion,"select * from ventas where idcliente=$cedula");
		
		$datosimagen = mysqli_query($conexion,"select * from autos,ventas where ventas.idcliente=$cedula and autos.idauto=ventas.idautomivil" );
	
		$datosmarca = mysqli_query($conexion,"select * from autos,ventas,marca,clientes where ventas.idcliente=$cedula and ventas.idcliente=clientes.cedula and autos.idauto=ventas.idautomivil and autos.idmarca=marca.idmarca");
		
		$datosmodelo = mysqli_query($conexion,"select * from autos,ventas,modelo where ventas.idcliente=$cedula and autos.idauto=ventas.idautomivil and autos.idmodelo=modelo.idmodelo");
		
		$datoscolor = mysqli_query($conexion,"select * from autos,ventas,color where ventas.idcliente=$cedula and autos.idauto=ventas.idautomivil and autos.idcolor=color.idcolor");
 	
		$datosprecio = mysqli_query($conexion,"select * from autos,ventas,precios where ventas.idcliente=$cedula and autos.idauto=ventas.idautomivil and autos.idprecio=precios.idprecios");
	
	?>
    
    <br>
    
    	<center><h1>AUTOMOVILES ADQUIRIDOS</h1></center>
    
	<table width="100%" border="1">
    
  <tr bgcolor="#0000FF" align="center">
    <td>Codigo Venta</td>
    <td>codigo Cliente</td>
    <td>Matricula Auto</td>
    <td>Imagen</td>
    <td>Marca</td>
    <td>Modelo</td>
    <td>Color</td>
    <td>Precio</td>
    <td>Opcion</td>
    
  </tr>
  
  	
  
  
  <?php while (($registro = mysqli_fetch_array($datos)) && ($registroimagen = mysqli_fetch_array($datosimagen)) && ($registromarca = mysqli_fetch_array($datosmarca))&& ($registromodelo = mysqli_fetch_array($datosmodelo))&& ($registrocolor = mysqli_fetch_array($datoscolor))&& ($registroprecios = mysqli_fetch_array($datosprecio))) { ?>
  
  	<tr align="center">
    <td height="30px"><?php echo $registro['idventa'];?></td>
    <td height="30px"><?php echo $registro['idcliente'];?></td>
    <td height="30px"><?php echo $registro['idautomivil'];?></td>
    
 

    
    <td><div style="width:180px; height:100px;"><img src="../admin/productos/<?php echo $registroimagen['imagen'];?>" style="width:100%; height:100%;"/></div></td>
    
 
    <td height="30px"><?php echo $registromarca['nommarca'];?></td>
    <td height="30px"><?php echo $registromodelo['nommodelo'];?></td>
    <td height="30px"><?php echo $registrocolor['nomcolor'];?></td>
    <td height="30px"><?php echo $registroprecios['valores'];?></td>
    <td height="50px"><a href='<?php echo "principal.php?pag=usuario/eliminarventa.php&id=".$registro['idventa']."";?>' onclick='return confirm("¿Deseas Eliminar el Registro?");' >Eliminar</a></td>
    
     <?php }?> 

</table>

	<br>
	


</body>
</html>