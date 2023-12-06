<!DOCTYPE html>
<html>
    <head>
        <title>Evidencia 3</title>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    </head>
    <body>
            <?php
            /* Michael yela Valencia
            Desarrollo web con php
            Taller “Uso de funciones” */

            #llamo a la libreria o funcion
            include_once('evidenciaA3_MichaelBiblioteca.php');

            echo( operaciones(10,2,"M"));  #paso los parametros a la funcion que se encuentra en el otro arcivo php
            echo ("<br>");
            echo( operaciones(4,2,"R"));
            echo ("<br>");
            echo( operaciones(2,2,"S"));
            echo ("<br>");
            echo( operaciones(9,3,"D"));
            echo ("<br>");
            echo( operaciones(9,2,));
            echo ("<br>");
            echo( operaciones(9,2,"G"));
            
            ?>
    </body>
</html>