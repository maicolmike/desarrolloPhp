<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Agregar Automoviles</title>
</head>

<body style="background-image:url(../img/fondo.jpg);">

	<br/>
    <br/>

	<?php
    
		$con = mysqli_connect("localhost","root","","automoviles");		
		
		$consultamarca = mysqli_query($con,"select * from marca");
		
		$consultamodelo = mysqli_query($con,"select * from modelo");
		
		$consultacolor = mysqli_query($con,"select * from color");
		
		$consultaprecios = mysqli_query($con,"select * from precios");
	
	?>


 	<div id="formulario">
    
    <section>
   
   		<table align="center" width="23%" border="0">
        
        	<form action="principal.php?pag=agregarautos/agregar.php" method="POST">
            
        			<tr><td colspan="2"><p> AGREGAR AUTOMOVIL </p></td></tr> 
                    
	  				<tr><td>Matricula: </td><td width="77%"> <input type="text" name="matricula" placeholder="Matricula" required="required"></td></tr>
                    
                    <tr><td>Nombre imagen:</td><td><input type="text" name="nomimagen" placeholder="Nombre imagen"></td></tr>
                    
                    
                    <!-- Mostrar las Marcas de los Autos --->
                    
                    
                        <tr><td>Marca: </td><td>
                        
                            <select name="marca">
                            
                                <option> ------ . ------- </option>
                              
                              <?php while($regmarca = mysqli_fetch_array($consultamarca)){ ?>
                                  
                                <option value="<?php echo $regmarca['idmarca'] ?>">
                                
                                    <?php echo $regmarca['nommarca'] ?>
                                
                                </option>
                                
                                <?php }?>
                            
                            </select>
                        
                        </td></tr>
                   	
                  <!-- Mostrar los Modelos de los Autos --->
                    
                    <tr><td>Modelo: </td><td>
                    
                    	<select name="modelo">
                        
                        	<option> ------ . ------- </option>
                          
                          <?php while($regmodelo = mysqli_fetch_array($consultamodelo)){ ?>
                         	  
                            <option value="<?php echo $regmodelo['idmodelo'] ?>">
                            
                            	<?php echo $regmodelo['nommodelo'] ?>
                            
                            </option>
                        	
                            <?php }?>
                        
                        </select>
                    
                    </td></tr>
                    
                    <!-- Mostrar los Colores de los Autos --->               

                    <tr><td>Color: </td><td>
                    
                    	<select name="color">
                        
                        	<option> ------ . ------- </option>
                          
                          <?php while($regcolor = mysqli_fetch_array($consultacolor)){ ?>
                         	  
                            <option value="<?php echo $regcolor['idcolor'] ?>">
                            
                            	<?php echo $regcolor['nomcolor'] ?>
                            
                            </option>
                        	
                            <?php }?>
                        
                        </select>
                    
                    </td></tr>
                    
                   	<!-- Mostrar los Precios de los Autos ---> 
                    
                    
                     <tr><td>Precio: </td><td>
                    
                    	<select name="precio">
                        
                        	<option> ------ . ------- </option>
                          
                          <?php while($regprecio = mysqli_fetch_array($consultaprecios)){ ?>
                         	  
                            <option value="<?php echo $regprecio['idprecios'] ?>">
                            
                            	<?php echo $regprecio['valores'] ?>
                            
                            </option>
                        	
                            <?php }?>
                        
                        </select>
                    
                    </td></tr>
                    
                  
                    
                    
                </table>
                
        <table align="center" width="50%" border="0">
        	<tr>
            	
                <td height="63">
                
                	<input type="submit" value="Agregar">
                
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
    
    <br/>
    <br/>

</body>
</html>