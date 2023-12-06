<?php
extract($_REQUEST);
//http://wiki.spipu.net/doku.php?id=html2pdf:es:v3:etiquetas
require $_SERVER['DOCUMENT_ROOT']."/php/Aplicacion Centro Medico/CentroMedico/Modelo/conexionBasesDatos.php";
require $_SERVER['DOCUMENT_ROOT']."/php/Aplicacion Centro Medico/CentroMedico/Modelo/Paciente.php";
$objPaciente=new Paciente();
$pacientes=$objPaciente->consultarPaciente($identificacion);
$registro=$pacientes->fetch_object();
?>


<!-- page define la hoja con los márgenes señalados -->
<page backtop="50mm" backbottom="10mm" backleft="20mm" backright="20mm">
    <page_header> <!-- Define el header de la hoja -->
    	<table width="800 "align="center">
        	<tr><td align="center" width="800"><img src="img/encabezado.png" width="700" height="120"></td>
            </tr>
        </table>
    </page_header>
    
    <table width="500" align="center" cellpadding="5" cellspacing="5">
    	<tr><td width="500" height="50" colspan="2" align="center" bgcolor="#3399CC">DATOS PACIENTE</td>
        </tr>
    	<tr>
    	  <td width="200" align="right">Identificación</td>
    	  <td width="300"><?php echo $registro->pacIdentificacion?></td>
      </tr>
       <tr>
    	  <td align="right">Nombres</td>
    	  <td ><?php echo $registro->pacNombres?></td>
      </tr>
      <tr>
    	  <td align="right">Apellidos</td>
    	  <td ><?php echo $registro->pacApellidos?></td>
      </tr>
      <tr>
    	  <td align="right">Fecha de nacimiento</td>
    	  <td><?php echo $registro->pacFechaNacimiento?></td>
       </tr>
       <tr>
    	  <td align="right">Sexo</td>
    	  <td><?php echo $registro->pacSexo?></td>
       </tr>
     </table>
    <page_footer> <!-- Define el footer de la hoja -->
    <table width="500" align="center">
    	<tr><td>Dirección: Calle 20 Barrio San Agustín - Teléfono: 4204566</td>
        </tr>
    </table>
    </page_footer>
</page>