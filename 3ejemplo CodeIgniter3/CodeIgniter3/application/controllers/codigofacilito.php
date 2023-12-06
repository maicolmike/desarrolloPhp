<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Codigofacilito extends CI_Controller {
function __construct(){
  parent:: __construct();
  $this->load->helper('mihelper');
   $this->load->helper('form');
   $this->load->model('codigofacilito_model');


 }
 function index(){
 	$this->load->library('menu', array('<h1>inicio</h1>','contacto','nosotros','cursos')); 
 	$data['mi_menu']= $this->menu->construirmenu();
 	$this->load->view('codigofacilito/header');
 	$this->load->view('codigofacilito/bienvenidos',$data);
 }

 function holaMundo(){
 	$this->load->view('codigofacilito/header');
 	$this->load->view('codigofacilito/bienvenidos');
 }
  function nuevo(){
 	$this->load->view('codigofacilito/header');
 	$this->load->view('codigofacilito/formulario');
 }
  function recibirdatos(){
 	$data= array(
    'nombre'=>$this->input->post('nombre'),
    'videos'=>$this->input->post('videos')
    );
     $this->codigofacilito_model->crearcurso($data);
     $this->load->view('codigofacilito/header');
     $this->load->view('codigofacilito/body');
 	
  }
  function enviaremail(){
   $this->load->library('email');
   $this->email->from('maicolmike@hotmail.com','maicol yela');
   $this->email->to('maicol1110@hotmail.com');

   $this->email->subject('probando mensajes code');
   $this->email->message('probando 11');
   if ($this->email->send('')) {
   echo "correo enviado";
   $this->load->view('codigofacilito/header');
   }
   else {
   echo "correo no enviado";
   echo $this->email->print_debugger();
    $this->load->view('codigofacilito/header');
     $this->load->view('codigofacilito/body');
        }
   
  }
  
}

?>