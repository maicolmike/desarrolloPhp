<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 4</title>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    </head>
    <body>
        <h3>Directorio Telefonico</h3>
            <?php
            /* Michael yela Valencia
            Desarrollo web con php
            taller uso de arreglos */
            
            // arreglo principal
            $directorio = array(
                array("Juan Perez 2", " Cra. 45 #45-5 ","3456789 ","23/12/1997 ","amarillo"),
                array("Pablo Manrique "," Clle. 23 # 12 -19 Sur ", "3214567 ", "12/10/1980 " ,"verde"),
                array("Nancy Peña ", " Av. 34 # 16 -12 ", "2135423 ","07/06/2000 ","tomate")
            );
            $color = array("amarillo"=>"Riqueza y alegría.", "azul"=>"mares y oceanos", "rojo"=>"pura sangre");

            // primera forma de recorrerlo
            echo "<h3>Recorriendo el array metodo tradicional</h3>";
             for ($i=0; $i < 3; $i++) { 
                for ($j=0; $j < 5; $j++) { 
                   echo $directorio[$i][$j];
                 }
                 echo "<br/>";
             }

             // segunda forma de recorrerlo
            echo "<h3>Recorriendo el array Foreach</h3>";
            echo "<table border='1'width='60%' cellspacing='0'>";
            echo "<th>Nombre</th>";
            echo "<th>Dirección</th>";
            echo "<th>Teléfono</th>";
            echo "<th>Fecha de cumpleaños</th>";
            echo "<th>Color favorito</th>";
            echo "<th>significado</th>";
             foreach ($directorio as $valor1) {
               echo "<tr>";
                foreach ($valor1 as $valor2 ) {
                   //echo $valor2;
                   echo "<td>$valor2</td>";
                }
                echo "</tr>";
               // echo "<br/>";
             }
             echo "</table>";  

             // tercera forma de recorrerlo
             echo "<h3>Recorriendo el array Foreach 2da forma</h3>";
             $cabecera=array("Nombre","Direccion","Telefono","Fecha de cumpleaños","Color favorito","significado");
             $juan=array("Juan Perez 2", " Cra. 45 #45-5 ","3456789 ","23/12/1997 ","amarillo");
             $pablo=array("Pablo Manrique "," Clle. 23 # 12 -19 Sur ", "3214567 ", "12/10/1980 " ,"verde");
             $nancy=array("Nancy Peña ", " Av. 34 # 16 -12 ", "2135423 ","07/06/2000 "," tomate");
             $agenda=array($cabecera,$juan,$pablo,$nancy);

             echo "<table border='1'width='60%' cellspacing='0'>";
             foreach ($agenda as $fila){
                    echo "<tr>";
                    foreach ($fila as $celda){
                            echo "<td> $celda </td>";
                            }
                    echo "</tr>";
            }
            echo "</table>";
            ?>
    </body>
</html>