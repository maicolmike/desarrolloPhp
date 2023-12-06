<!DOCTYPE html>
<html>
    <head>
        <title>Unidad 3 - Ejercicio 2</title>
        <meta http-equiv="Content-Type" 
              content="text/html; charset=ISO-8859-1" />
    </head>
    <body>
        <?php
    
        function saludo(&$cadena, $mensaje = "Hola mundo") {
            $cadena .= 'Y algo más.'; // variable referencia
            $mensaje = $mensaje;
            return ($mensaje);
        }

        $cad = 'Esto es una cadena ';
        saludo($cad); // llamando a la funcion con argumento referencia
        echo $cad;    // imprime 'Esto es una cadena, y algo más.'
        echo ('<br>');
        echo (saludo($cad)); // llamando e imprimiendo una funcion con valores predeteminados
        echo ('<br>');
        echo (saludo($cad,"Hola Maicol")); // llamando e imprimiendo una funcion pasandole un valor

        ?>
    </body>
    
</html>