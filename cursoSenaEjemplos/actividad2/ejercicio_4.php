<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 4</title>
        <meta http-equiv="Content-Type" 
              content="text/html; charset=ISO-8859-1" />
    </head>
    <body>
        <h3>Directorio Telefonico</h3>
        <p>
            <?php
            $directorio = array(
                array("Juan Perez ", "Cra. 45 #45-5 ","3456789 ","23/12/1997 "),
                array("Pablo Manrique ","Clle. 23 # 12 -19 Sur ", "3214567 ", "12/10/1980"),
                array("Nancy Peña ", "Av. 34 # 16 -12 ", "2135423 ","07/06/2000")
            );
             for ($i=0; $i < 3; $i++) { 
                for ($j=0; $j < 3; $j++) { 
                   #echo "Agenda ".$directorio[$i][$j]."<br/>";
                   echo $directorio[$i][$j];
                 }
                 echo "<br/>";
             }
                
            ?>
        </p> 

    </body>
</html>
