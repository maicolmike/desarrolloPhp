<?php
	//ob_start guardará en un búfer lo que esté en la ruta del include.
	ob_start();
    include(dirname(__FILE__).'/vistas/pdf_listarPacientesTabla.php');
    $content = ob_get_clean();//Traer solo contenido
    require_once(dirname(__FILE__).'/../html2pdf.class.php');    //Se obtiene la librería
    // Las lineas siguientes siempre serán las mismas
    try
    {
		ob_end_clean();
        $html2pdf = new HTML2PDF('L', 'A4', 'es', true, 'UTF-8', 3); 
		//Configura la hoja
        $html2pdf->pdf->SetDisplayMode('fullpage'); //Ver otros parámetros para SetDisplaMode
        $html2pdf->writeHTML($content); //Se escribe el contenido 
        $html2pdf->Output('listarPacientes.pdf'); //Nombre default del PDF
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
?>