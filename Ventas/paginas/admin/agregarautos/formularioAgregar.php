<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Agregar Automoviles</title>
</head>

<body style="background-image:url(../img/fondo.jpg);">

	<br/>
    <br/>


 	<div id="formulario2">
    
    <section>
   
   		<table align="center" width="20%" border="0">
        
        	<form action="principal.php?pag=agregarautos/agregartodo.php" method="POST">
            
        			<tr align="center"><td><p> AGREGAR CARACTERISTICAS </p></td></tr> 

                    <tr align="center"><td><input type="text" name="marca" placeholder="Marca"></td></tr>
                    <tr align="center"><td><input type="text" name="color" placeholder="Color"></td></tr>
                    <tr align="center"><td><input type="text" name="precio" placeholder="Precio"></td></tr>
                </table>
                
                <br>
                <br>
                
        <table align="center" width="20%" border="0">
        	<tr>
            	
                <td align="center">
                
                	<input type="submit" value="Agregar">
                
                </td>
                
            </form> 
              
                <td align="center">
                
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