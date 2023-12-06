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
	".$row->apellidos_damnificado.", mayor de edad, identificado (a) con la c�dula de ciudadan�a No. ".$row->cedula_damnificado.", quien adelante se denominar�
	EL ARRENDATARIO, y por la otra parte ".$row->nombres_arrendador." ".$row->apellidos_arrendador.", mayor de edad, identificado (a) con la c�dula de 
	ciudadan�a No. ".$row->cedula_arrendador.", quien en adelante se denominar� EL ARRENDADOR, hemos convenido celebrar el 
	presente Contrato de Arrendamiento, el cual se regir� por las siguientes cl�usulas: PRIMERA.- OBJETO DEL CONTRATO: EL ARRENDADOR, entrega a t�tulo de 
	arrendamiento a EL ARRENDATARIO y este lo recibe a igual a t�tulo, un inmueble situado en la:   libano del Municipio de MOCOA Departamento de PUTUMAYO, 
	SEGUNDA.- DESTINACION: El Arrendatario se compromete a utilizar el inmueble materia de este contrat� para vivienda familiar. TERCERA.- Duraci�n: El t�rmino
	del presente contrato es de 3 Meses y 0 Dias, contados a partir del ".$row->fecha_inicial.", y en el evento de que sea necesario prorrogarlo, las partes 
	deber�n dar aviso al Consejo Municipal de Gesti�n del Riesgo de Desastres (CMGRD) quien comunicar� a   la Unidad Nacional para la Gesti�n del Riesgo de 
	Desastres (UNGRD) antes del vencimiento de �ste para su  conocimiento y por ende la aprobaci�n si hay lugar a ella, y su legalizaci�n ser� mediante otro 
	si del presente contrato. CUARTA.- RESTITUCION: A la terminaci�n de este contrato, por cualquier causa, EL ARRENDATARIO restituir� el �rea al ARRENDADOR 
	en el mismo estado en que EL ARRENDADOR ha entregado a EL ARRENDATARIO, el cual a la fecha de entrega se encuentra en buen estado, salvo el deterioro 
	natural por uso y goce leg�timos. Para tal efecto, a m�s tardar el d�a de la entrega material del inmueble, suscribir�n el acta de recibo correspondiente. 
	QUINTA.- C�NON Y FORMA DE PAGO: El valor del canon mensual  es por la suma de: 250000 PESOS M/CTE. ($250000 ) que pagar� EL ARRENDATARIO a partir del d�a 
	en que inicia �ste contrato, es as� que el pago total de los (3 Meses y 0 Dias) de arrendamiento pactados en el presente contrato en la suma de: 750000 
	PESOS M/CTE. ($750000), ser�n cancelados por parte del BANCO AGRARIO con los recursos del Fondo Nacional de Gesti�n del riesgo de Desastres (FNGRD) en 
	calidad de subsidios de arriendo a EL ARRENDATARIO  quien se encuentra en el Registro �nico de Damnificados de la UNGRD bajo folio 
	No. ".$row->rud_damnificado." como damnificado de la calamidad p�blica ocurrida por el Evento AVENIDA TORRENCIAL en el Municipio de MOCOA Departamento 
	de PUTUMAYO con Fecha de Evento 31/03/2017. SEXTA.- SERVICIOS PUBLICOS: El pago del consumo mensual de los servicios de agua, alcantarillado,  
	recolecci�n  de  basuras,  energ�a  el�ctrica,  tel�fonos  ser�n  a  cargo  del  ARRENDATARIO  y  pagados directamente por �ste sin que el ARRENDADOR 
	tenga responsabilidad alguna por la correcta o deficiente prestaci�n de tales servicios. As� mismo EL ARRENDATARIO se obliga a pagar las sanciones, 
	costas o multas que las empresas respectivamente o cualquier autoridad imponga por las infracciones de los respectivos reglamentos o por no haber pagado
	oportunamente los servicios causado durante la vigencia de este contrato e indemnizar� a EL ARRENDADOR por los perjuicios que tales infracciones u omisiones puedan causarle. PAR�GRAFO PRIMERO.- Al 
	finalizar este contrato de arrendamiento y al entregar EL ARRENDATARIO a EL ARRENDADOR el inmueble objeto de este contrato, entregar� los �ltimos (3) 
	recibos de servicios cancelados y compromiso de cancelar el consumo causado hasta el d�a de la devoluci�n del inmueble. S�PTIMA.- REPARACIONES Y MEJORAS: 
	EL ARRENDADOR o propietario autoriza expresamente a EL ARRENDATARIO para efectuar las mejoras indispensables para la adecuaci�n del inmueble a fin de 
	desarrollar las actividades propias de su objeto social las cuales ser�n por cuenta del ARRENDATARIO. En cuanto a las mejoras �tiles que realice EL 
	ARRENDATARIO en desarrollo de dicha autorizaci�n, aquel podr� separar y llevarse los materiales utilizados en las obras que ejecute, sin detrimento del 
	inmueble arrendado, pero las que no pueden ser separadas sin que sufra da�o alguno la propiedad, acrecer�n al inmueble sin costo alguno para EL ARRENDADOR 
	y quedar�n de su propiedad. OCTAVA.- INSPECCION: EL ARRENDADOR podr� efectuar inspecciones al inmueble arrendado siempre que no  se  obstaculice  la  
	prestaci�n  del  servicio,  formulando  por  escrito  las  sugerencias  y  recomendaciones  que  sean necesarias  para  un  mejor  funcionamiento  del  
	inmueble.  NOVENA.-  CESION  DEL  CONTRATO:  A)  POR  EL ARRENDADOR: Podr� EL ARRENDADOR transferir sus derechos a terceras personas encuyo caso EL 
	ARRENDATARIO se compromete a cumplir las obligaciones emanadas de este contrato con el cesionario, desde la fecha en que tal acto le sea comunicado por 
	correo con confirmaci�n de entrega a la direcci�n del inmueble materia del presente contrato. B) POR EL  ARRENDATARIO,  �ste  no  podr�  ceder  el  
	presente  contrato.  PAR�GRAFO:  Tanto  ARRENDADOR  como  el ARRENDATARIO podr�n terminar de manera unilateral en caso de que cualquiera de las partes o 
	de nuevos cesionarios de  este  contrato  o  delinmueble  aparezca  en  lista  Clinton  ,  la  lista  OFAC,  o  en  cualquier  otro  registro  nacional  o 
	internacional que lo vincule con la comisi�n o realizaci�n de actividades criminales o acciones il�citas, as� corro el que dicho cesionario se encuentre 
	vinculado a proceso o investigaciones por la posible comisi�n o realizaci�n de actividades delincuenciales o acciones il�citas o sea, una persona, entidad,
	o miembro de un pa�s al que el gobierno de los Estados Unidos o Colombia proh�ba o llegara aprohibir establecer o mantener negocios de cualquier tipo. 
	D�CIMA.- CAUSALES DE TERMINACI�N: El presente contrato podr� darse por terminado por las causales establecidas para el contrato de arrendamiento de 
	vivienda y especialmente por las siguientes: 1) Por mutuo acuerdo; 2) Por incumplimiento de cualquiera de las partes de las obligaciones contractuales; 3) 
	Por vencimiento del t�rmino. Si EL ARRENDATARIO desocupare el inmueble antes del vencimiento del t�rmino principal o de las pr�rrogas del presente 
	contrato, se dar� aplicaci�n al art�culo2003 del C�digo Civil. DECIMA PRIMERA.- ABANDONO DEL INMUEBLE: Al suscribir este contrato EL ARRENDATARIO faculta 
	expresamente a EL ARRENDADOR y a su eventual cesionario para penetrar en el inmueble y recuperar su tenencia con solo el requisito de la presencia de dos 
	(2) testigos, en procura de evitar el deterioro del inmueble siempre que por cualquier circunstancia el mismo permanezca abandonado o deshabitado por el 
	t�rmino de dos (2) meses o m�s, siempre y cuanto est� por igual t�rmino en mora con el pago del canon de arrendamiento. DECIMA   SEGUNDA.- GASTOS: Los 
	gastos que se ocasionen por el otorgamiento de este contrato, sus pr�rrogas y renovaciones ser�n asumidos  por  partes  iguales  entre  los  contratantes. 
	Se  firma  el  presente  documento  en  el  Municipio  de  MOCOA Departamento de  PUTUMAYO a los ______d�as del mes de________________del a�o ______
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