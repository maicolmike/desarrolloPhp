<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/estilo_index.css" rel="stylesheet"/>

<title>REGISTRAR</title>

</head>

<body style="background-image:url(img/fondo.jpg);">

                      	<?php
            
                                        $con = mysqli_connect("localhost","root","","automoviles");
                                        $consulta = mysqli_query($con,"select * from ciudades");
                                    
                         ?>
  
  
    <div id="formulario">
    
    	<form action="registrar.php" method="POST">
        	
            <table border="0" align="center">
            
            	<tr>
                
                	<td style="color:#000;" colspan="4"><h1><center>REGISTRO DE INGRESO</center></h1></td>
                
                </tr>
                             
                <tr>  
                
                	<td style="text-align:left; color:#000;">NIT:</td>
                    <td><input type="text" name="nit" placeholder="NIT" required="required"></td>
                 
                
                </tr>
                <tr height="1px">
                
                	<td colspan="4">&nbsp;</td>
                
                </tr>
               
                <tr>  
                
                	<td style="text-align:left; color:#000;">Cedula:</td>
                    <td><input type="number" name="cedula" placeholder="Cedula" required="required"></td>
                 
                
                </tr>
                <tr height="1px">
                
                	<td colspan="4">&nbsp;</td>
                
                </tr>

                
                <tr>  
                
                	<td style="text-align:left; color:#000;">Nombres Completos:</td>
                    <td><input type="text" name="nombre" placeholder="Nombre Completo" required="required"></td>
                 
                
                </tr>
                <tr height="1px">
                
                	<td colspan="4">&nbsp;</td>
                
                </tr>

               	<tr>  
                
                	<td style="text-align:left; color:#000;">Direccion:</td>
                    <td><input type="text" name="dir" placeholder="Direccion" required="required"></td>
                 
                
                </tr>
                <tr height="1px">
                
                	<td colspan="4">&nbsp;</td>
                
                </tr>
                <tr>  
                
                	<td style="text-align:left; color:#000;">Telefono:</td>
                    <td><input type="text" name="telefono" placeholder="Telefono" ></td>
                 
                
                </tr>
                <tr height="1px">
                
                	<td colspan="4">&nbsp;</td>
                
                </tr>
		
                <tr>  
                
                	<td style="text-align:left; color:#000;">Usuario de ingreso:</td>
                    <td><input type="text" name="usuario" placeholder="Usuario" required="required"></td>
                 
                
                </tr>
                <tr height="1px">
                
                	<td colspan="4">&nbsp;</td>
                
                </tr>
               	<tr>  
                
                	<td style="text-align:left; color:#000;">Contraseña de ingreso:</td>
                    <td><input type="password" name="pass" placeholder="Contraseña" required="required"></td>                 
                
                </tr>
                
                <tr height="5px">
                
                	<td colspan="4">&nbsp;</td>
                
                </tr>
                
                <tr>
                
                	<td style="text-align:left; color:#000;">Ciudad:</td>
                    <td>
                    
                    
                    	<select name="ciudad">
                                  <option > ----------.---------- </option>
                                       <?php while($registro = mysqli_fetch_array($consulta)) {?>
                                  <option value="<?php echo $registro['idciudad'] ?>"> 
                                       <?php echo $registro['nomciudades'];?>                                         
                                  </option> 
                                                                        
                                  											    <?php } ?>
                                        
                       </select>
            
                    
                    </td>
                
                </tr>
                
                <tr height="1px">
                
                	<td colspan="4">&nbsp;</td>
                
                </tr>
                
                <tr>
                	<td align="center"><input type="submit" value="Registrar" required="required"></td>
                    
                       </form>
                    
                            <form action="Index.php" method="POST">          	             
                    			
                                <td align="left"><input type="submit" value="Cancelar"></td>
							
                            </form>                                                              
                   
                
                </tr>
                               
           	</table>
        
    	
        <br/>

        
        
	        
    </div>


</body>
</html>
