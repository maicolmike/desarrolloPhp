<?php
if ( ! defined('BASEPATH')) exit('no se permite acceso directo al script');

class menu{
 private $arr_menu;
  public function __construct($arr){
 	$this->arr_menu=$arr;
  }
    public function construirmenu (){
   	$ret_menu="<nav><ul>";
   	 foreach ($this->arr_menu as $opcion) {
   	 	$ret_menu .= "<li>".$opcion."</li>";
   	 }
   	  $ret_menu .="</ul></nav>";
   	  return $ret_menu;
    }
}

?>