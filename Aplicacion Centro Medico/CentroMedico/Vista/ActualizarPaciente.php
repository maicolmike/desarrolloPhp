<?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Paciente.php";
$objPaciente=new Paciente();
$pacientes=$objPaciente->consultarPacientes();
?>


<h1 align="center">LISTADO DE PACIENTES</h1>
<table width="70%" border="1" align="center">
  <tr align="center" bgcolor="#cc0000" class="texto">
    <td>Identificacion</td>
    <td>Nombres</td>
    <td>Apellidos</td>
    <td>Fecha Nacimiento</td>
    <td>Sexo</td>
    <td colspan="2">Actualizar</td>
    
  </tr>
 <?php
while($registro=$pacientes->fetch_object())
{
?>
  <tr>
    <td><?php echo $registro->pacIdentificacion?></td>
    <td><?php echo $registro->pacNombres?></td>
    <td><?php echo $registro->pacApellidos?></td>
    <td><?php echo $registro->pacFechaNacimiento?></td>
    <td><?php echo $registro->pacSexo?></td>
    <td><a href="index2.php?pag=modificarPaciente&identificacion=<?php echo $registro->pacIdentificacion ?>">Modificar</a></td>
    <td><a href="index2.php?pag=../Controlador/validarEliminarPaciente&identificacion=<?php echo $registro->pacIdentificacion ?>">Eliminar</a></td>    
  </tr>  
 <?php
}  //cerrando el ciclo while
?>

<?php

if ($msj==1)
	echo '<p align="center" >Se ha Eliminado el Paciente Correctamente';
if ($msj==2)
	echo '<p align="center"> El usuario tiene programada una cita';

?>

</table>