<?php

require $_SERVER['DOCUMENT_ROOT']."/php/Aplicacion Centro Medico/CentroMedico/Modelo/conexionBasesDatos.php";
require $_SERVER['DOCUMENT_ROOT']."/php/Aplicacion Centro Medico/CentroMedico/Modelo/Paciente.php";

$identificacion = $_REQUEST['identificacion'];

$objcitasPaciente=new Paciente();
$citaspacientes=$objcitasPaciente->citasPacientes($identificacion);

?>

<h1 align="center">PACIENTE POR CITA</h1>
<table width="70%" border="1" align="center">
 
      <tr align="center" bgcolor="#cc0000" class="texto">
        <td>Identificacion</td>
        <td>Nombres</td>
        <td>Apellidos</td>
        <td>Fecha</td>
        <td>Hora</td>
        <td>Medico</td>
        <td>Consultorio</td>        
      </tr>
  
  
 <?php
while($registro=$citaspacientes->fetch_object())
{
?>
  <tr>
    <td><?php echo $registro->pacIdentificacion?></td>
    <td><?php echo $registro->pacNombres?></td>
    <td><?php echo $registro->pacApellidos?></td>
    <td><?php echo $registro->citFecha?></td>
    <td><?php echo $registro->citHora?></td>
    <td><?php echo $registro->medNombres?></td>
    <td><?php echo $registro->citConsultorio?></td>	
  </tr>  
<?php
}  //cerrando el ciclo while
?>
</table>