<?php

$uno = $_POST["primer"];
$dos = $_POST["segundo"];
$s = $_POST["seleccion"];

if ($s=='+')
   {
$resultado=$uno+$dos;
   }
if ($s=='-')
   {
$resultado=$uno-$dos;
   }
   if ($s=='*')
   {
$resultado=$uno*$dos;
   }
   if ($s=='/')
   {
$resultado=$uno/$dos;
   }
				

echo "resultado ".$resultado


?>