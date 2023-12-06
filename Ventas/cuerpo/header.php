<style>

	#convertir a{
		
			background: #000;
			cursor:pointer;
			color:#FFF;
			text-decoration:none;		
		
		}

	#convertir a:hover{
		
			background:#FFF;
			cursor:pointer;
			color:#000;
			text-decoration:none;		
		
		}

</style>

    	<header>
    	  <table width="98%" border="0">
          
          	<form action="index.php?pagina=login.php" method="POST">
          
                <tr>
                  <td width="44%">&nbsp;</td>
                  <td width="13%">Nombre de usuario:</td>
                  <td width="13%"><input type="text" name="usuario" placeholder=" Usuario" required="required"></td>
                  <td width="8%"> Contraseña:</td>
                  <td width="12%"><input type="password" name="pass" placeholder=" Contraseña" required="required"></td>
                   <td width="10%"><div id="convertir"><input type="submit" name="boton" value="acceder"/></div></td>
                </tr>
          
          	</form>
          
  	    </table>
    	</header>
