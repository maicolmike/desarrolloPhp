<?php

require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Paciente.php";
$objMedico=new Paciente();
$medico=$objMedico->consultarPacientes();

?>
   
       	<form action="Reportes/pdf/pdf_PacienteIde.php" method="post" target="_blank">

			<table width="417" align="center" border="1">
              <tr>
                <td colspan="2" align="center"> Generar Reporte Paciente</td>
              </tr>
              <tr>
                <td width="197">Ingrese Identificacion: &nbsp;</td>
                <td width="204"><input type="text" name="identificacion"/></td>
              </tr>
              <tr>
                <td style="text-align:center;"><input type="submit" value="GenererPDF" ></td>
                <td style="text-align:center;"><input type="reset" value="Cancelar"></td>
              </tr>
            </table>

        
        </form>
	
