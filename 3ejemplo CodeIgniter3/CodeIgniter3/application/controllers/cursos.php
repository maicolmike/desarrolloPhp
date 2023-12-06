<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursos extends CI_Controller {
	function __construct(){
    parent:: __construct();
    $this->load->helper('form');
    $this->load->model('codigofacilito_model');
   }
   function index(){
   	$data['segmento']= $this->uri->segment(3);
   	$this->load->view('codigofacilito/header');
   	if (!$data['segmento']) {
   		$data['cursos']= $this->codigofacilito_model->obtenercursos();
   	}
 	else {
 		$data['cursos']= $this->codigofacilito_model->obtenercurso($data['segmento']);
 	}
 	
 	$this->load->view('cursos/cursos',$data);

    }

    function nuevo(){
 	$this->load->view('codigofacilito/header');
 	$this->load->view('cursos/formulario');
    }
    function recibirdatos(){
 	$data= array(
    'nombre'=>$this->input->post('nombre'),
    'videos'=>$this->input->post('videos')
    );
     $this->codigofacilito_model->crearcurso($data);
     $this->load->view('codigofacilito/header');
     $this->load->view('cursos/body');
 	}
  function editar(){
    $data['id']=$this->uri->segment(3);
    $data['cursos']= $this->codigofacilito_model->obtenercurso($data['id']);
    $this->load->view('codigofacilito/header');
    $this->load->view('cursos/editar',$data);
  
  }
  function actualizar(){
    $data= array(
    'nombre'=>$this->input->post('nombre'),
    'videos'=>$this->input->post('videos')
    );
     $this->codigofacilito_model->actualizarcurso($this->uri->segment(3),$data);
     redirect(base_url());
  
  }
  function borrar(){
    $id = $this->uri->segment(3);
    $this->codigofacilito_model->eliminarcurso($id);
   
  
  }
  
 	


}

?>