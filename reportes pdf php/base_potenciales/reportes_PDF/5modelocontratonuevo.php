<?php
	require('../librerias/html2pdf/html2pdf.class.php');
	include('../librerias/conectar.php');
	ob_start();
?>

<page backtop="30mm" backbottom="17mm" backleft="16mm" backright="15mm">
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
		
	echo"<h1 style='font-size:18;text-align:center;'>CONTRATO DE ARRENDAMIENTO No. 868600115231032017-".$row->numero_contrato."-0 DE 2019 </h1>";	

	echo"<p style='font-size:12;text-align:justify;line-height:19px;'>Entre los suscritos a saber, por una parte ".$row->nombres_damnificado." 
	".$row->apellidos_damnificado.", mayor de edad, identificado (a) con la cédula de ciudadanía No. ".$row->cedula_damnificado.", quien adelante se denominará
	EL ARRENDATARIO, y por la otra parte ".$row->nombres_arrendador." ".$row->apellidos_arrendador.", mayor de edad, identificado (a) con la cédula de 
	ciudadanía No. ".$row->cedula_arrendador.", quien en adelante se denominará EL ARRENDADOR, hemos convenido celebrar el 
	presente Contrato de Arrendamiento, el cual se regirá por las siguientes cláusulas: PRIMERA.- OBJETO DEL CONTRATO: EL ARRENDADOR, entrega a título de 
	arrendamiento a EL ARRENDATARIO y este lo recibe a igual a título, un inmueble situado en la:   libano del Municipio de MOCOA Departamento de PUTUMAYO, 
	SEGUNDA.- DESTINACION: El Arrendatario se compromete a utilizar el inmueble materia de este contrató para vivienda familiar. TERCERA.- Duración: El término
	del presente contrato es de 3 Meses y 0 Dias, contados a partir del ".$row->fecha_inicial.", y en el evento de que sea necesario prorrogarlo, las partes 
	deberán dar aviso al Consejo Municipal de Gestión del Riesgo de Desastres (CMGRD) quien comunicará a   la Unidad Nacional para la Gestión del Riesgo de 
	Desastres (UNGRD) antes del vencimiento de éste para su  conocimiento y por ende la aprobación si hay lugar a ella, y su legalización será mediante otro 
	si del presente contrato. CUARTA.- RESTITUCION: A la terminación de este contrato, por cualquier causa, EL ARRENDATARIO restituirá el área al ARRENDADOR 
	en el mismo estado en que EL ARRENDADOR ha entregado a EL ARRENDATARIO, el cual a la fecha de entrega se encuentra en buen estado, salvo el deterioro 
	natural por uso y goce legítimos. Para tal efecto, a más tardar el día de la entrega material del inmueble, suscribirán el acta de recibo correspondiente. 
	QUINTA.- CÁNON Y FORMA DE PAGO: El valor del canon mensual  es por la suma de: 250000 PESOS M/CTE. ($250000 ) que pagará EL ARRENDATARIO a partir del día 
	en que inicia éste contrato, es así que el pago total de los (3 Meses y 0 Dias) de arrendamiento pactados en el presente contrato en la suma de: 750000 
	PESOS M/CTE. ($750000), serán cancelados por parte del BANCO AGRARIO con los recursos del Fondo Nacional de Gestión del riesgo de Desastres (FNGRD) en 
	calidad de subsidios de arriendo a EL ARRENDATARIO  quien se encuentra en el Registro Único de Damnificados de la UNGRD bajo folio 
	No. ".$row->rud_damnificado." como damnificado de la calamidad pública ocurrida por el Evento AVENIDA TORRENCIAL en el Municipio de MOCOA Departamento 
	de PUTUMAYO con Fecha de Evento 31/03/2017. SEXTA.- SERVICIOS PUBLICOS: El pago del consumo mensual de los servicios de agua, alcantarillado,  
	recolección  de  basuras,  energía  eléctrica,  teléfonos  serán  a  cargo  del  ARRENDATARIO  y  pagados directamente por éste sin que el ARRENDADOR 
	tenga responsabilidad alguna por la correcta o deficiente prestación de tales servicios. Así mismo EL ARRENDATARIO se obliga a pagar las sanciones, 
	costas o multas que las empresas respectivamente o cualquier autoridad imponga por las infracciones de los respectivos reglamentos o por no haber pagado
	oportunamente los servicios causado durante la vigencia de este contrato e indemnizará a EL ARRENDADOR por los perjuicios que tales infracciones u omisiones puedan causarle. PARÁGRAFO PRIMERO.- Al 
	finalizar este contrato de arrendamiento y al entregar EL ARRENDATARIO a EL ARRENDADOR el inmueble objeto de este contrato, entregará los últimos (3) 
	recibos de servicios cancelados y compromiso de cancelar el consumo causado hasta el día de la devolución del inmueble. SÉPTIMA.- REPARACIONES Y MEJORAS: 
	EL ARRENDADOR o propietario autoriza expresamente a EL ARRENDATARIO para efectuar las mejoras indispensables para la adecuación del inmueble a fin de 
	desarrollar las actividades propias de su objeto social las cuales serán por cuenta del ARRENDATARIO. En cuanto a las mejoras útiles que realice EL 
	ARRENDATARIO en desarrollo de dicha autorización, aquel podrá separar y llevarse los materiales utilizados en las obras que ejecute, sin detrimento del 
	inmueble arrendado, pero las que no pueden ser separadas sin que sufra daño alguno la propiedad, acrecerán al inmueble sin costo alguno para EL ARRENDADOR 
	y quedarán de su propiedad. OCTAVA.- INSPECCION: EL ARRENDADOR podrá efectuar inspecciones al inmueble arrendado siempre que no  se  obstaculice  la  
	prestación  del  servicio,  formulando  por  escrito  las  sugerencias  y  recomendaciones  que  sean necesarias  para  un  mejor  funcionamiento  del  
	inmueble.  NOVENA.-  CESION  DEL  CONTRATO:  A)  POR  EL ARRENDADOR: Podrá EL ARRENDADOR transferir sus derechos a terceras personas encuyo caso EL 
	ARRENDATARIO se compromete a cumplir las obligaciones emanadas de este contrato con el cesionario, desde la fecha en que tal acto le sea comunicado por 
	correo con confirmación de entrega a la dirección del inmueble materia del presente contrato. B) POR EL  ARRENDATARIO,  éste  no  podrá  ceder  el  
	presente  contrato.  PARÁGRAFO:  Tanto  ARRENDADOR  como  el ARRENDATARIO podrán terminar de manera unilateral en caso de que cualquiera de las partes o 
	de nuevos cesionarios de  este  contrato  o  delinmueble  aparezca  en  lista  Clinton  ,  la  lista  OFAC,  o  en  cualquier  otro  registro  nacional  o 
	internacional que lo vincule con la comisión o realización de actividades criminales o acciones ilícitas, así corro el que dicho cesionario se encuentre 
	vinculado a proceso o investigaciones por la posible comisión o realización de actividades delincuenciales o acciones ilícitas o sea, una persona, entidad,
	o miembro de un país al que el gobierno de los Estados Unidos o Colombia prohíba o llegara aprohibir establecer o mantener negocios de cualquier tipo. 
	DÉCIMA.- CAUSALES DE TERMINACIÓN: El presente contrato podrá darse por terminado por las causales establecidas para el contrato de arrendamiento de 
	vivienda y especialmente por las siguientes: 1) Por mutuo acuerdo; 2) Por incumplimiento de cualquiera de las partes de las obligaciones contractuales; 3) 
	Por vencimiento del término. Si EL ARRENDATARIO desocupare el inmueble antes del vencimiento del término principal o de las prórrogas del presente 
	contrato, se dará aplicación al artículo2003 del Código Civil. DECIMA PRIMERA.- ABANDONO DEL INMUEBLE: Al suscribir este contrato EL ARRENDATARIO faculta 
	expresamente a EL ARRENDADOR y a su eventual cesionario para penetrar en el inmueble y recuperar su tenencia con solo el requisito de la presencia de dos 
	(2) testigos, en procura de evitar el deterioro del inmueble siempre que por cualquier circunstancia el mismo permanezca abandonado o deshabitado por el 
	término de dos (2) meses o más, siempre y cuanto esté por igual término en mora con el pago del canon de arrendamiento. DECIMA   SEGUNDA.- GASTOS: Los 
	gastos que se ocasionen por el otorgamiento de este contrato, sus prórrogas y renovaciones serán asumidos  por  partes  iguales  entre  los  contratantes. 
	Se  firma  el  presente  documento  en  el  Municipio  de  MOCOA Departamento de  PUTUMAYO a los ______días del mes de________________del año ______
	</p>";
		
		echo "<table border='0' style='border-collapse:collapse;border-color:#bee4fa;text-align:center;'>";
		echo "<tr><td style='width:320px;font-size:12;text-align:left;'><br><br><br><br><br><br><br><br><br><br><br>_______________________________</td>  
                  <td style='width:320px;font-size:12;text-align:left;'><br><br><br><br><br><br><br><br><br><br><br>_______________________________ </td>
             </tr>";
		echo "</table>";
		
		echo "<table border='0' style='border-collapse:collapse;border-color:#bee4fa'>";
		echo "<tr><td style='width:320px;font-size:12;text-align:left;'>EL ARRENDATARIO</td>  
                  <td style='width:320px;font-size:12;text-align:left;'>EL ARRENDADOR </td>
             </tr>";
		echo "</table>";
		
		echo "<table border='0' style='border-collapse:collapse;border-color:#bee4fa'>";
		echo "<tr><td style='width:320px;font-size:12;text-align:left;'>".$row->nombres_damnificado." ".$row->apellidos_damnificado."</td>  
                  <td style='width:320px;font-size:12;text-align:left;'>".$row->nombres_arrendador." ".$row->apellidos_arrendador."</td>
             </tr>";
		echo "</table>";
		
		echo "<table border='0' style='border-collapse:collapse;border-color:#bee4fa'>";
		echo "<tr><td style='width:320px;font-size:12;text-align:left;'>CC. ".$row->cedula_damnificado."</td>  
                  <td style='width:320px;font-size:12;text-align:left;'>C.C.: ".$row->cedula_arrendador." </td>
             </tr>";
		echo "</table>";
		
		echo "<table border='0' style='border-collapse:collapse;border-color:#bee4fa'>";
		echo "<tr><td style='width:320px;font-size:12;text-align:left;'>Celular No. ".$row->cel_damnificado."</td>  
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
	
  // $html2pdf = new HTML2PDF('P','Letter','es', false, 'UTF-8');
	$html2pdf = new HTML2PDF('P','A4','es', false, 'UTF-8');
	//$html2pdf->setTestTdInOnePage(false); // tratar de solucionar error cuando se pasa mas de dos hojas
    $html2pdf->WriteHTML($content);
	$html2pdf->Output('contrato-'.$row->numero_contrato.'-'.$row->nombres_damnificado.'-'.$row->apellidos_damnificado.'.pdf');
	$html2pdf->pdf->SetDisplayMode('fullpage');
            
?>