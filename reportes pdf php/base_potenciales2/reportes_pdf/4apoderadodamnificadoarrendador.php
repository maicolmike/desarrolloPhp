<?php
require('../librerias/vendor/autoload.php');
  use Spipu\Html2Pdf\Html2Pdf;
include('../librerias/conectar.php');
ob_start();
?>

<!DOCTYPE html>
<html lang="es">
  <head>
<meta charset="utf-8">
<title></title>

  <style type="text/css">

  .marca {
  position: absolute;
  bottom: 300px;
  left: 40px;
  color: #F0CECD;
  font-size:60px;
  font-weight:bold;
         }
 </style>

  </head>

  <body backtop="23mm" backbottom="15mm" backleft="13mm" backright="13mm">

    <page_header >

		 <table border='0' align='center'>
        <tr>
				<td style='width:350px;font-size:16;text-align:left'><img src='../imagenes/asa.jpg' height='105'></td>
				<td style='width:380px;font-size:16;text-align:right'><img src='../imagenes/ungrd.jpg' height='90'></td>
			 </tr>
     </table>

    </page_header>

<?php


  echo "<div class='marca'>";
  echo "CONTRATO VALIDO";
  echo "</div>";

    $idinscripcion = $_GET['idinscripcion'];
    $res = mysqli_query($con,"SELECT * FROM inscripcion i
    WHERE idinscripcion='$idinscripcion' ");

    $row = mysqli_fetch_object($res);    // con esto no me dio error

    echo "<table border='0'>";
    echo "<tr><td style='width:675px;text-align:center;font-weight:bold;'><br><h1 style='font-size:16;'>OTROSÍ AL CONTRATO DE ARRENDAMIENTO No. 868600115231032017-
    ".$row->numero_contrato."-0 DE 2019</h1><br></td></tr>";
    echo "</table>";

    echo "<table border='0' style='border-collapse:collapse;border-color:#bee4fa'>";
    echo "<tr><td style='width:640px;font-size:12;text-align:justify;line-height:19px;'> Entre los suscritos a saber, por una parte ".$row->nombres_damnificado."
    ".$row->apellidos_damnificado.", mayor de edad, identificado (a) con la cédula de ciudadanía No. ".$row->cedula_damnificado.", quien adelante se
    denominará EL ARRENDATARIO, y su APODERADO (A) / DAMNIFICADO(A)  el (la) Sr.(a) ".$row->nombres_apoderado_damnificado."
		".$row->apellidos_apoderado_damnificado." mayor de edad, identificado (a) con la cédula de ciudadanía No. ".$row->cedula_apoderado_damnificado." y por la
    otra parte ".$row->nombres_arrendador." ".$row->apellidos_arrendador.", mayor de edad, identificado (a) con la
    cédula de ciudadanía No. ".$row->cedula_arrendador.", y su apoderado (a) el (a) Sr. (a). ".$row->nombres_apoderado_arrendador."
		".$row->apellidos_apoderado_arrendador." mayor de edad, identificado (a) con la cédula de ciudadanía No. ".$row->cedula_apoderado_arrendador."
		APODERADO(A) - ARRENDADOR, y quien en adelante se denominará EL ARRENDADOR, hemos convenido celebrar el presente  OtroSí No.
    868600115231032017-".$row->numero_contrato."-7  al Contrato de Arrendamiento No. 868600115231032017-".$row->numero_contrato."-0 el cual se regirá por
    las siguientes cláusulas: PRIMERA.- Duración: El término del presente OtroSí No. 868600115231032017-".$row->numero_contrato."-7 es de 3 Meses y 0 Dias
    contados a partir del ".$row->fecha_inicial.", y en el evento de que sea necesario prorrogarlo, las partes deberán dar aviso al Consejo Municipal de
    Gestión del Riesgo de Desastres (CMGRD) quien comunicará a la Unidad Nacional para la Gestión  del Riesgo  de Desastres (UNGRD) antes del vencimiento
    de éste para su conocimiento y por ende la aprobación si hay lugar a ella, y su legalización será mediante  OtroSí. TERCERA.- CANON Y FORMA DE PAGO:
    El valor del canon  mensual  del presente OtroSí No. 868600115231032017-".$row->numero_contrato."-7 es por la suma de: DOSCIENTOS CINCUENTA MIL
    PESOS M/CTE. ($250000 ) que pagará EL ARRENDATARIO a partir del día en que inicia éste contrato, es así que el pago total de los 3 Meses y 0 Dias de
    arrendamiento pactados en el presente contrato en la suma de: SETECIENTOS CINCUENTA MIL PESOS M/CTE. ($750000), serán cancelados por parte del
    BANCO AGRARIO con los recursos del Fondo Nacional de Gestión del Riesgo de Desastres (FNGRD) en calidad de subsidios de arriendo a EL ARRENDATARIO
    quien se encuentra en el Registro Único de Damnificados de la UNGRD bajo folio No. ".$row->rud_damnificado." como damnificado de la calamidad pública
    ocurrida por el Evento AVENIDA TORRENCIAL en el Municipio de MOCOA Departamento de PUTUMAYO con Fecha de Evento 31/03/2017. CUARTA.- Las demás
    cláusulas establecidas en el contrato No. 868600115231032017-".$row->numero_contrato."-0 surten todos sus efectos legales.
         </td> </tr>";
    echo "</table>";

   echo "<table border='0' style='border-collapse:collapse;border-color:#bee4fa'>";
    echo "<tr><td style='width:640;font-size:12;text-align:justify;line-height:19px;'> <br>
        Se   firma   el   presente   documento   en   el   Municipio   de MOCOA Departamento de PUTUMAYO a   los ___ días   del   mes de
    ________________________ del año __________
        <br><br><br><br></td></tr>";
    echo "</table>";

    echo "<table border='0' style='border-collapse:collapse;border-color:#bee4fa;line-height:19px;'>";
    echo "<tr><td style='width:320px;font-size:12;text-align:left;line-height:19px;'><br><br><br><br><br><br><br><br><br>_______________________________</td>
              <td style='width:320px;font-size:12;text-align:left;line-height:19px;'><br><br><br><br><br><br><br><br><br>_______________________________ </td> </tr>";
    echo "<tr><td style='width:320px;font-size:12;text-align:left;line-height:19px;'>EL ARRENDATARIO-APODERADO</td>
              <td style='width:320px;font-size:12;text-align:left;line-height:19px;'>EL ARRENDADOR-APODERADO</td> </tr>";
    echo "<tr><td style='width:320px;font-size:12;text-align:left;line-height:19px;'>".$row->nombres_apoderado_damnificado." ".$row->apellidos_apoderado_damnificado."</td>
              <td style='width:320px;font-size:12;text-align:left;line-height:19px;'>".$row->nombres_apoderado_arrendador." ".$row->apellidos_apoderado_arrendador."</td> </tr>";
    echo "<tr><td style='width:320px;font-size:12;text-align:left;line-height:19px;'>C.C: ".$row->cedula_apoderado_damnificado."</td>
              <td style='width:320px;font-size:12;text-align:left;line-height:19px;'>C.C: ".$row->cedula_apoderado_arrendador."</td> </tr>";
    echo "<tr><td style='width:320px;font-size:12;text-align:left;line-height:19px;'>Celular No. ".$row->cel_apoderado_damnificado."</td>
              <td style='width:320px;font-size:12;text-align:left;line-height:19px;'>Celular No. ".$row->cel_apoderado_arrendador."</td> </tr>";
    echo "</table>";

    $html = ob_get_clean(); //guardo lo de 1modelloprorroga en esa variable
    $html2pdf = new HTML2PDF('P','A4','es', true, 'UTF-8'); //dejar true para que funcione el utf-8
    $html2pdf->writeHTML($html);
    $html2pdf->Output(''.$row->numero_contrato.'-'.$row->cedula_damnificado.'-'.$row->nombres_damnificado.'-'.$row->apellidos_damnificado.'.pdf');
    ?>

  </body>

</html>
