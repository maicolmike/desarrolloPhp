<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evidencia 4</title>
</head>
<body>

  <?php
  require_once 'funciones.php'; # dentro de este archivo hay una matriz la cual utilizare para imprimir
  ?>

  <form method="POST">
    <table border='1' width='40%'><th>Escenario</th></table>
    <table border='1'width='40%'>

    <?php
    #recorro la matriz que se encuentra en el archivo funciones.php la recorro y la imprimo
    foreach ($filas as $valor1) {
      echo "<tr>";
        foreach ($valor1 as $valor2 ) {
           echo "<td>$valor2</td>";
         }
      echo "</tr>";
     }
    ?>
    </table>
    <br>
    <label for="name">Fila:</label>
    <input type="text" name="fila" required>
    <br><br>
    <label for="puesto">Puesto:</label>
    <input type="text" name="puesto" required>
    <br><br>
    <label for="reserva">Reserva:</label>
    <input type="radio" name="escoger" value="R" required>
    <br><br>
    <label for="comprar">Comprar:</label>
    <input type="radio" name="escoger" value="C" required>
    <br><br>
    <label for="liberar">Liberar:</label>
    <input type="radio" name="escoger" value="L" required>
    <br><br>
    <button type="submit">Enviar</button> <button>Borrar</button>
    </form>
</body>
</html>