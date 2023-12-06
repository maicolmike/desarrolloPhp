<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Consulta</title>
</head>

<body style="background-image:url(img/b1.jpg); background-repeat:no-repeat; color:#FFF;">

	<?php 

		$conexion = mysqli_connect("localhost","root","","automoviles");
	 	$datos = mysqli_query($conexion,"select * from autos,marca,modelo,color,precios where autos.idmarca=marca.idmarca and autos.idmodelo=modelo.idmodelo and autos.idcolor=color.idcolor and autos.idprecio=precios.idprecios");
 
	?>	

        <br>
   

			<table width="100%" border="0">
            	
                <tr align="right"><td height="46"><a href="principal.php?pag=agregarautos/formularioAgregarAuto.php">Adicionar Automovil</a></td></tr>
                
            </table>
  
        
    	<?php 
  
  	
			while($registro = mysqli_fetch_array($datos)) { ?>
        	
            <div id="lateral">	
            
               	<table border="1">
	  				<tr align="center"><td colspan="2"><?php echo $registro['idauto'] ?></td></tr>
                    <tr><td colspan="2"><div style="width:180px;; height:100px;"><img src="productos/<?php echo $registro['imagen'];?>" style="width:100%; height:100%;"/></div></td></tr>
                    <tr align="center"><td colspan="2"><?php echo $registro['nommarca'] ?></td></tr>
                   	<tr align="center"><td colspan="2"><?php echo $registro['nommodelo'] ?></td></tr>
                    <tr align="center"><td colspan="2"><?php echo $registro['nomcolor'] ?></td></tr>
                    <tr align="center"><td colspan="2"><?php echo $registro['valores'] ?></td></tr>                       
                    <tr height="50px" align="center"><?php	echo "<td>"."<a href=principal.php?pag=agregarautos/modificar.php&id=".$registro['idauto'].">"."Modificar"."</a>"."</td>" ?>
                    <td><a href='<?php echo "principal.php?pag=agregarautos/eliminar.php&id=".$registro['idauto']."";?>' onclick='return confirm("¿Deseas Eliminar el Registro?");' >Eliminar</a></td></tr>
                 
                </table>
                
             </div>                      
          
  		<?php } ?>
        
        <br>
        <br>
        <br>

</body>
</html>