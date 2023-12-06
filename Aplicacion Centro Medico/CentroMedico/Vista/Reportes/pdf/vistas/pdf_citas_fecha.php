<?php
require $_SERVER['DOCUMENT_ROOT']."/php/Aplicacion Centro Medico/CentroMedico/Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();

/*hacemos la sentencia sql que me permita traer datos de las tablas medicos, pacientes,
pacientes y citas */

$inicial = $_REQUEST['inicial'];
$final = $_REQUEST['final'];

$sql="select * from citas,medicos,pacientes,consultorios where citas.citFecha between '$inicial' and '$final' and citas.citPaciente=pacientes.idPaciente and citas.citMedico=medicos.idMedico and citas.citConsultorio=consultorios.idConsultorio";
	  	  
$citas = $objConexion->query($sql);

?>

<h1 align="center">LISTADO DE CITAS POR FECHA</h1>
<table width="90%" border="1" align="center">
  <tr align="center" bgcolor="#cc0000" class="texto">
    <td>Fecha</td>
    <td>Hora</td>
    <td>Paciente</td>
    <td>Medico</td>
    <td>Consultorio</td>
    <td>Estado</td>
    <td>Observaciones</td>
  </tr>
 <?php
while($cita=$citas->fetch_object())
{
?>
  <tr>
    <td><?php echo $cita->citFecha?></td>
    <td><?php echo $cita->citHora?></td>
    <td><?php echo $cita->pacNombres." ".$cita->pacApellidos?></td>
    <td><?php echo $cita->medNombres." ".$cita->medApellidos?></td>
    <td><?php echo $cita->conNombre?></td>
    <td><?php echo $cita->citEstado?></td>
    <td><?php echo $cita->citObservaciones?></td>
  </tr>  
 <?php
}  //cerrando el ciclo while
?>
</table>