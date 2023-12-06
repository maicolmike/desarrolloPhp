<!doctype html>

<html>
<head>
<meta charset="utf-8">
<title>Buzon sugerencias</title>
<link href="estilos.css" rel="stylesheet" type="text/css">
<script src="scripts/validar.js"></script>
<?php 
include("insertar.php");
?>
</head>

<body>


<br>
<table width="80%" border="0" align="center">
  <tbody>
    <tr>
      <td align="center" class="titulo">Buzon de Sugerencias Virtual </td> 
    </tr>
    <tr> <td>&nbsp;</td> </tr>
    <tr>
    <td align="center"> En este formulario usted puede realizar sugerencias,quejas y solicitudes acerca del servicio que le brinda nuestra pagina web. Gracias por su opinion </td>
    </tr>
  <tr> <td>&nbsp;</td> </tr>  
  </tbody>
</table>

<form name="form1" method="post" action="buzon.php"> 

<table align="center" class="tabla">
  <tbody>
    <tr>
      <td class="filas">Nombre y apellidos</td>
      <td class="celda"><input type="text" name="nombre"></td>
    </tr>
    <tr>
      <td class="filas">Identificacion</td>
      <td class="celda"> <input type="text" name="cedula"></td>
    </tr>
    <tr>
      <td class="filas">Email</td>
      <td class="celda"><input type="email" name="correo"></td>
    </tr>
    <tr>
      <td class="filas">Telefono</td>
      <td><input type="text" name="telefono"></td>
    </tr>
    <tr>
      <td class="filas">Tipo</td>
      <td><select name="tipo">
      <option value="sugerencia"> Sugerencia</option>
      <option value="queja"> Queja o reclamo</option>
      <option value="felicitaciones"> Felicitaciones</option>
      
      </select></td>
    </tr>
    <tr>
      <td class="filas">Mensaje</td>
      <td><textarea name="mensaje" cols="50" rows="5"></textarea></td>
    </tr>
  </tbody>
</table>

<table width="200" border="0" align="center">
  <tbody>
  <tr> <td>&nbsp;</td> </tr> 
    <tr>
      <td align="center"> <input type="submit" name="enviar" value="Enviar" class="boton" onClick="return validar()"></td>
    </tr>
  </tbody>
</table>







</form>



</body>

</html>