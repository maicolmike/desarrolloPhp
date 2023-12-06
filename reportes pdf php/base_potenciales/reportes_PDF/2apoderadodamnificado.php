<?php
	require('../librerias/html2pdf/html2pdf.class.php');
	include('../librerias/conectar.php');
	ob_start();
?>

<page backtop="30mm" backbottom="17mm" backleft="16mm" backright="20mm">
	<page_header >
		<table class='page_header' border='0' align='center'>
             <tr>
				<td style='width:350px;font-size:16;text-align:left'><img src='../imagenes/asa.jpg' height='105'></td>
				<td style='width:380px;font-size:16;text-align:right'><img src='../imagenes/ungrd.jpg' height='90'></td>
				 
		    </tr>
			
			
        </table>
		
    </page_header>
    <?php	
		$idinscripcion = $_GET['idinscripcion'];
		$res = mysqli_query($con,"SELECT * FROM inscripcion i
		WHERE idinscripcion='$idinscripcion' ");
		
		$row = mysqli_fetch_object($res);    // con esto no me dio error
		
		
		echo "<table border='0'>";
		echo "<tr><td style='width:700px;font-size:16;text-align:justify;font-weight:bold;'>OTROS� AL CONTRATO DE ARRENDAMIENTO No. 868600115231032017-
		".$row->numero_contrato."-0 DE 2019<br><br><br><br></td></tr>";
		echo "</table>";
		
		echo "<table border='0' style='border-collapse:collapse;border-color:#bee4fa'>";
		echo "<tr><td style='width:640px;font-size:12;text-align:justify;line-height:19px;'> Entre los suscritos a saber, por una parte ".$row->nombres_damnificado." 
		".$row->apellidos_damnificado.", mayor de edad, identificado (a) con la c�dula de ciudadan�a No. ".$row->cedula_damnificado.", quien adelante se 
		denominar� EL ARRENDATARIO, y su APODERADO (A) / DAMNIFICADO(A)  el (la) Sr.(a) ".$row->nombres_apoderado_damnificado." 
		".$row->apellidos_apoderado_damnificado." mayor de edad, identificado (a) con la c�dula de ciudadan�a No. ".$row->cedula_apoderado_damnificado." 
		y por la otra parte ".$row->nombres_arrendador." ".$row->apellidos_arrendador.", mayor de edad, identificado (a) con la
		c�dula de ciudadan�a No. ".$row->cedula_arrendador.", y quien en adelante se denominar� EL ARRENDADOR, hemos convenido celebrar el presente  OtroS� No.
		868600115231032017-".$row->numero_contrato."-7  al Contrato de Arrendamiento No. 868600115231032017-".$row->numero_contrato."-0 el cual se regir� por 
		las siguientes cl�usulas: PRIMERA.- Duraci�n: El t�rmino del presente OtroS� No. 868600115231032017-".$row->numero_contrato."-7 es de 3 Meses y 0 Dias 
		contados a partir del ".$row->fecha_inicial.", y en el evento de que sea necesario prorrogarlo, las partes deber�n dar aviso al Consejo Municipal de 
		Gesti�n del Riesgo de Desastres (CMGRD) quien comunicar� a la Unidad Nacional para la Gesti�n  del Riesgo  de Desastres (UNGRD) antes del vencimiento 
		de �ste para su conocimiento y por ende la aprobaci�n si hay lugar a ella, y su legalizaci�n ser� mediante  OtroS�. TERCERA.- CANON Y FORMA DE PAGO: 
		El valor del canon  mensual  del presente OtroS� No. 868600115231032017-".$row->numero_contrato."-7 es por la suma de: DOSCIENTOS CINCUENTA MIL 
		PESOS M/CTE. ($250000 ) que pagar� EL ARRENDATARIO a partir del d�a en que inicia �ste contrato, es as� que el pago total de los 3 Meses y 0 Dias de
		arrendamiento pactados en el presente contrato en la suma de: SETECIENTOS CINCUENTA MIL PESOS M/CTE. ($750000), ser�n cancelados por parte del 
		BANCO AGRARIO con los recursos del Fondo Nacional de Gesti�n del Riesgo de Desastres (FNGRD) en calidad de subsidios de arriendo a EL ARRENDATARIO  
		quien se encuentra en el Registro �nico de Damnificados de la UNGRD bajo folio No. ".$row->rud_damnificado." como damnificado de la calamidad p�blica
		ocurrida por el Evento AVENIDA TORRENCIAL en el Municipio de MOCOA Departamento de PUTUMAYO con Fecha de Evento 31/03/2017.    CUARTA.- Las dem�s 
		cl�usulas  establecidas  en el  contrato   No.868600115231032017-".$row->numero_contrato."-0 surten todos sus efectos legales.
         </td> </tr>";
			

		echo "</table>";
		echo "<table border='0' style='border-collapse:collapse;border-color:#bee4fa'>";
		echo "<tr><td style='width:640;font-size:12;text-align:justify;line-height:19px;'> <br>
        Se   firma   el   presente   documento   en   el   Municipio   de MOCOA Departamento de PUTUMAYO a   los ___ d�as   del   mes de 
		________________________ del a�o 2019.
        </td></tr>";
		echo "</table>";
		
		echo "<table border='0' style='border-collapse:collapse;border-color:#bee4fa;text-align:center;'>";
		echo "<tr><td style='width:320px;font-size:12;text-align:left;'><br><br><br><br><br><br><br><br><br><br>_______________________________</td>  
                  <td style='width:320px;font-size:12;text-align:left;'><br><br><br><br><br><br><br><br><br><br>_______________________________ </td>
             </tr>";
		echo "</table>";
		
		echo "<table border='0' style='border-collapse:collapse;border-color:#bee4fa'>";
		echo "<tr><td style='width:320px;font-size:12;text-align:left;'>EL ARRENDATARIO-APODERADO</td>  
                  <td style='width:320px;font-size:12;text-align:left;'>EL ARRENDADOR </td>
             </tr>";
		echo "</table>";
		
		echo "<table border='0' style='border-collapse:collapse;border-color:#bee4fa'>";
		echo "<tr><td style='width:320px;font-size:12;text-align:left;'>".$row->nombres_apoderado_damnificado." ".$row->apellidos_apoderado_damnificado."</td>  
                  <td style='width:320px;font-size:12;text-align:left;'>".$row->nombres_arrendador." ".$row->apellidos_arrendador."</td>
             </tr>";
		echo "</table>";
		
		echo "<table border='0' style='border-collapse:collapse;border-color:#bee4fa'>";
		echo "<tr><td style='width:320px;font-size:12;text-align:left;'>CC. ".$row->cedula_apoderado_damnificado."</td>  
                  <td style='width:320px;font-size:12;text-align:left;'>C.C.: ".$row->cedula_arrendador." </td>
             </tr>";
		echo "</table>";
		
		echo "<table border='0' style='border-collapse:collapse;border-color:#bee4fa'>";
		echo "<tr><td style='width:320px;font-size:12;text-align:left;'>Celular No. ".$row->cel_apoderado_damnificado."</td>  
                  <td style='width:320px;font-size:12;text-align:left;'>Celular No. ".$row->cel_arrendador." </td>
             </tr>";
		echo "</table>";
		
		
	?>
</page>

<?php
 //pongo este codigo aqui para poder imprimir el numero de contrato
        $idinscripcion = $_GET['idinscripcion'];
		$res = mysqli_query($con,"SELECT * FROM inscripcion i
		WHERE idinscripcion='$idinscripcion' ");
		$row = mysqli_fetch_object($res);    // con esto no me dio error



    $content = ob_get_clean();
    $html2pdf = new HTML2PDF('P','Letter','es', false, 'UTF-8');
    $html2pdf->WriteHTML($content);
    $html2pdf->Output('contrato-'.$row->numero_contrato.'-'.$row->nombres_damnificado.'-'.$row->apellidos_damnificado.'.pdf');
?>