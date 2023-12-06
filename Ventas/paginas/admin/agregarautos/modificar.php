<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Modificar Auto </title>
</head>

<body style="background-image:url(../img/fondo.jpg);">

	<?php 
	
		$ide = $_GET['id'];
		
		$conexion = mysqli_connect("localhost","root","","automoviles");
		
		
		$sql = mysqli_query($conexion,"select * from autos,marca where idauto='$ide' and autos.idmarca=marca.idmarca");		
		$datos = mysqli_fetch_array($sql);				
		$sqlmarca = mysqli_query($conexion,"select * from marca");
		
		
		$modelo = mysqli_query($conexion,"select * from autos,modelo where idauto='$ide' and autos.idmodelo=modelo.idmodelo");		
		$datosmodelo = mysqli_fetch_array($modelo);				
		$sqlmodelo = mysqli_query($conexion,"select * from modelo");
		
		
		$color = mysqli_query($conexion,"select * from autos,color where idauto='$ide' and autos.idcolor=color.idcolor");		
		$datoscolor = mysqli_fetch_array($color);				
		$sqlcolor = mysqli_query($conexion,"select * from color");
		
		
		$precio = mysqli_query($conexion,"select * from autos,precios where idauto='$ide' and autos.idprecio=precios.idprecios");		
		$datosprecio = mysqli_fetch_array($precio);				
		$sqlprecio = mysqli_query($conexion,"select * from precios");


				
	?>

	<br>
    <br>

	<div id="formulario">
    
    <section>

	
    <table align="center" width="23%" border="0">
        
        	<form action="principal.php?pag=agregarautos/actualizar.php" method="POST">
            
        			<tr><td colspan="2"><p> MODIFICAR AUTOMOVIL </p></td></tr> 
                    
	  				<tr><td>Matricula: </td><td width="77%"> <input type="text" name="matricula" value="<?php echo $datos['idauto']; ?>" readonly="readonly"></td></tr>
                    
                    <tr><td>Nombre imagen:</td><td><input type="text" name="nomimagen" value="<?php echo $datos['imagen']; ?>"> </td></tr>
                    
                    
                 	 <!-- Mostrar las Marcas de los Autos --->
                    
                      	<tr><td>Marca: </td><td>
                        
                      
                            <select name="marca">
                            
                                <option value="<?php echo $datos['idmarca'] ?>" >
                                
                                	 	<?php echo $datos['nommarca'] ?> 
                                
                                </option>
                              
										  <?php while($regmarca = mysqli_fetch_array($sqlmarca)){ ?>
                                          
                                          		<?php if( $datos['idmarca'] != $regmarca['idmarca'] ) { ?>
                                              
                                                    <option value="<?php echo $regmarca['idmarca'] ?>">
                                                    
                                                        <?php echo $regmarca['nommarca'] ?>
                                                    
                                                    </option>
                                                <?php }?>
                                            
                                            <?php }?>
                            
                            </select>
                        
                        </td></tr>
                        
                                            
                 	 <!-- Mostrar los Modelos de los Autos --->
                    
                      	<tr><td>Modelos: </td><td>
                        
                      
                            <select name="modelo">
                            
                                <option value="<?php echo $datosmodelo['idmodelo'] ?>" >
                                
                                	 	<?php echo $datosmodelo['nommodelo'] ?> 
                                
                                </option>
                              
										  <?php while($regmodelo = mysqli_fetch_array($sqlmodelo)){ ?>
                                          
                                          		<?php if( $datosmodelo['idmodelo'] != $regmodelo['idmodelo'] ) { ?>
                                              
                                                    <option value="<?php echo $regmodelo['idmodelo'] ?>">
                                                    
                                                        <?php echo $regmodelo['nommodelo'] ?>
                                                    
                                                    </option>
                                                <?php }?>
                                            
                                            <?php }?>
                            
                            </select>
                        
                        </td></tr>
                        
                        
                     <!-- Mostrar los Colores de los Autos --->
                    
                      	<tr><td>Color: </td><td>
                        
                      
                            <select name="color">
                            
                                <option value="<?php echo $datoscolor['idcolor'] ?>" >
                                
                                	 	<?php echo $datoscolor['nomcolor'] ?> 
                                
                                </option>
                              
										  <?php while($regcolor = mysqli_fetch_array($sqlcolor)){ ?>
                                          
                                          		<?php if( $datoscolor['idcolor'] != $regcolor['idcolor'] ) { ?>
                                              
                                                    <option value="<?php echo $regcolor['idcolor'] ?>">
                                                    
                                                        <?php echo $regcolor['nomcolor'] ?>
                                                    
                                                    </option>
                                                <?php }?>
                                            
                                            <?php }?>
                            
                            </select>
                        
                        </td></tr>

                     <!-- Mostrar los Precios de los Autos --->
                     
                     
                     	<tr><td>Precio: </td><td>
                        
                      
                            <select name="precio">
                            
                                <option value="<?php echo $datosprecio['idprecio'] ?>" >
                                
                                	 	<?php echo $datosprecio['valores'] ?> 
                                
                                </option>
                              
										  <?php while($regprecio = mysqli_fetch_array($sqlprecio)){ ?>
                                          
                                          		<?php if( $datosprecio['idprecios'] != $regprecio['idprecios'] ) { ?>
                                              
                                                    <option value="<?php echo $regprecio['idprecios'] ?>">
                                                    
                                                        <?php echo $regprecio['valores'] ?>
                                                    
                                                    </option>
                                                <?php }?>
                                            
                                            <?php }?>
                            
                            </select>
                        
                        </td></tr>
        <table align="center" width="50%" border="0">
        	<tr>
            	
                <td height="63">
                
                	<input type="submit" value="Modificar">
                
                </td>
                
            </form> 
              
                <td>
                
                	<form action="principal.php?pag=agregarautos/consulta.php" method="POST">          	             
                    			
                         <input type="submit" value="Cancelar">
							
                    </form>
                
                </td>
            
            </tr>
        </table>
                    
    </section>
    
    </div>

	<br>
    <br>


</body>
</html>