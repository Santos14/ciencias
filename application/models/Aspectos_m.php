<?php
	class Aspectos_m extends CI_Model
	{
		public function __construct()
		 {
		 	parent::__construct();
		 }


		  public function todos()
		 {
			$this->db->select('a.idaspecto, a.descripcion as da, n.descripcion as dn, a.estado');
			$this->db->from('aspectos as a');
			$this->db->join('nivel as n', 'a.idnivel = n.idnivel');
			$this->db->where('a.estado', '1');
		 	$resultado = $this->db->get();
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
		 	$result = $this->db->get_where('aspectos',array("idaspecto"=>$id));
		 	return $result->row();
		 }

		 public function traerNivel()
		 {
		 	$result = $this->db->get_where('nivel',array("estado"=>"1"));
		 	return $result->result();
		 }

		 public function insertar()
		 {

		 	$datos = array(
		 		"descripcion" => $this->input->post("descripcion"),
		 		"idnivel" => $this->input->post("idnivel")
		 	);

		 	$r = $this->db->insert("aspectos",$datos);
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
		 		"idnivel" => $this->input->post("idnivel")
		 	);

		 	$this->db->where("idaspecto",$id);
		 	$r = $this->db->update("aspectos",$datos);

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

		 	$this->db->where("idaspecto",$id);
		 	$r = $this->db->update("aspectos",$datos);

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