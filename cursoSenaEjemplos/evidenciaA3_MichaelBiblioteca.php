<?php
function operaciones($num1,$num2,$operador="S"){
    $resultado="";
    $mensaje="";

    switch ($operador) {
        case 'S':
           $resultado= $num1+$num2;
           $mensaje= ("La suma es: ");
            break;
        case 'R':
            $resultado= $num1-$num2;
            $mensaje= ("La resta es: ");
            break;
        case 'M':
            $resultado= $num1*$num2;
            $mensaje= ("La multiplicacion es: ");
            break;
        case 'D':
            $resultado= $num1/$num2;
            $mensaje= ("La division es: ");
        break;
        default:
            echo("No ingreso ningun valor correcto");
            break;
    }
    return ($mensaje.$resultado);
}


?>