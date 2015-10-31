<?php
	class Criterio_m extends CI_Model
	{
		public function __construct()
		 {
		 	parent::__construct();
		 }


		  public function todos()
		 {
		 	$this->db->select('c.idcriterio, c.descripcion as cd, a.descripcion as ad, c.estado');
			$this->db->from('criterio as c');
			$this->db->join('asignatura as a', 'c.idasignatura = a.idasignatura');
			$this->db->where('c.estado', '1');
		 	$resultado = $this->db->get();
		 	return $resultado->result();

		 }
		/*
		 public function mostrar()
		 {
		 	$result = $this->db->get('usuario');
		 	// $result = $this->db->get_where('usuario',array("usuario"=>"chanis"));
		 	return $result->result();

		 }*/

		 public function traeruno($id)

		 {
		 	$result = $this->db->get_where('criterio',array("idcriterio"=>$id));
		 	return $result->row();
		 }

		 public function traerAsignaturas()
		 {
		 	$result = $this->db->get_where('asignatura',array("estado"=>"1"));
		 	return $result->result();
		 }

		 public function insertar()
		 {

		 	$datos = array(
		 		"descripcion" => $this->input->post("descripcion"),
		 		"idasignatura" => $this->input->post("idasignatura")
		 	);

		 	$r = $this->db->insert("criterio",$datos);
		 	if ($r)
		 	{
		 		return 1;
		 	}
		 	else
		 	{
		 		return 0;
		 	}
		 }

		  public function modificar($id)
		 {
		 	$datos = array(
		 		"descripcion" => $this->input->post("descripcion"),
		 		"idasignatura" => $this->input->post("idasignatura")
		 	);

		 	$this->db->where("idcriterio",$id);
		 	$r = $this->db->update("criterio",$datos);

		 	if ($r)
		 	{
		 		return 1;
		 	}
		 	else
		 	{
		 		return 0;
		 	}
		 }

		  public function eliminar($id)
		 {

		 	$datos = array(
		 		"estado" => "0"
		 	);

		 	$this->db->where("idcriterio",$id);
		 	$r = $this->db->update("criterio",$datos);

		 	if ($r)
		 	{
		 		return 1;
		 	}
		 	else
		 	{
		 		return 0;
		 	}
		 	// $this->db->where("idarea",$id);
		 	// $this->db->delete("usuario");
		 }
	}



 ?>