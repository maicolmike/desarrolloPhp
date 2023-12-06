<?php
	//require __DIR__.'/vendor/autoload.php'; // asi cuando este en la misma carpeta
	require('../librerias/vendor/autoload.php');
    use Spipu\Html2Pdf\Html2Pdf;
	include('../librerias/conectar.php');
	ob_start();
	require_once '1modeloprorroga.php';

    $html = ob_get_clean(); //guardo lo de 1modelloprorroga en esa variable
    $html2pdf = new HTML2PDF('P','A4','es', true, 'UTF-8'); //dejar true para que funcione el utf-8
    $html2pdf->writeHTML($html);
    $html2pdf->Output('contrato.pdf');
?>
