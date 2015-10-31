<?php
	class Vacuna_m extends CI_Model
	{
		public function __construct()
		 {
		 	parent::__construct();
		 }


		  public function todos()
		 {
		 		$resultado = $this->db->get_where('vacuna',array("estado"=>"1"));
		 	// $result = $this->db->get_where('usuario',array("usuario"=>"chanis"));
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
		 	$result = $this->db->get_where('vacuna',array("idvacuna"=>$id));
		 	return $result->row();
		 }

		 public function insertar()
		 {

		 	$datos = array(
		 		"descripcion" => $this->input->post("descripcion")

		 	);

		 	$r = $this->db->insert("vacuna",$datos);
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
		 		"descripcion" => $this->input->post("descripcion")

		 	);

		 	$this->db->where("idvacuna",$id);
		 	$r = $this->db->update("vacuna",$datos);

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

		 	$this->db->where("idvacuna",$id);
		 	$r = $this->db->update("vacuna",$datos);

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