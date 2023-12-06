<?php
extract($_REQUEST);
//http://wiki.spipu.net/doku.php?id=html2pdf:es:v3:etiquetas
require $_SERVER['DOCUMENT_ROOT']."/php/Aplicacion Centro Medico/CentroMedico/Modelo/conexionBasesDatos.php";
require $_SERVER['DOCUMENT_ROOT']."/php/Aplicacion Centro Medico/CentroMedico/Modelo/Medico.php";
$objMedico=new Medico();
$Medico=$objMedico->consultarMedico($identificacion);
$registro=$Medico->fetch_object();
?>


<!-- page define la hoja con los márgenes señalados -->
<page backtop="50mm" backbottom="10mm" backleft="20mm" backright="20mm">
    <page_header> <!-- Define el header de la hoja -->
    	<table width="800 "align="center">
        	<tr><td align="center" width="800"><img src="img/encabezado.png" width="700" height="120"></td>
            </tr>
        </table>
    </page_header>
    
    <table width="500" align="center" cellpadding="5" cellspacing="5" border="1">
    	<tr><td width="500" height="50" colspan="2" align="center" bgcolor="#3399CC">DATOS PACIENTE</td>
        </tr>
    	<tr>
    	  <td width="200" align="right">Identificación</td>
    	  <td width="300" align="center"><?php echo $registro->medIdentificacion?></td>
      </tr>
       <tr>
    	  <td align="right">Nombres</td>
    	  <td align="center"><?php echo $registro->medNombres?></td>
      </tr>
      <tr>
    	  <td align="right">Apellidos</td>
    	  <td align="center"><?php echo $registro->medApellidos?></td>
      </tr>
      <tr>
    	  <td align="right">Especialidad</td>
    	  <td align="center"><?php echo $registro->medEspecialidad?></td>
       </tr>
       <tr>
    	  <td align="right">Telefono</td>
    	  <td align="center"><?php echo $registro->medTelefono?></td>
       </tr>
       <tr>
    	  <td align="right">E-Mail</td>
    	  <td align="center"><?php echo $registro->medCorreo?></td>
       </tr>

     </table>
    <page_footer> <!-- Define el footer de la hoja -->
    <table width="500" align="center">
    	<tr><td>Dirección: Calle 20 Barrio San Agustín - Teléfono: 4204566</td>
        </tr>
    </table>
    </page_footer>
</page>