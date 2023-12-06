<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Codigofacilito_model extends CI_Model{
	function __construct(){
  parent:: __construct();
  $this->load->database();
 }
 function crearcurso($data){
 	
 	$this->db->insert('cursos',array('nombrecursos'=>$data['nombre'],'cantidadcursos'=>$data['videos']));
 	
 }
 function obtenercursos(){
 	
 	$query=$this->db->get('cursos');
 	if ($query->num_rows()>0) return $query;
 	else return false;
 	
 }
function obtenercurso($id){
 	$this->db->where('idcurso',$id);
 	$query=$this->db->get('cursos');
 	if ($query->num_rows()>0) return $query;
 	else return false;
 	
 }
 function actualizarcurso($id,$data){
 	$datos= array('nombrecursos'=>$data['nombre'],'cantidadcursos'=>$data['videos']);
 	$this->db->where('idcurso',$id);
 	$query=$this->db->update('cursos',$datos);
 	
 }
 function eliminarcurso($id){
 	$query="DELETE FROM cursos WHERE idcurso= $id";
 	$this->db->query($query);
 	
 	
 }



}
?>