<?php
	class Grado_m extends CI_Model
	{
		public function __construct()
		 {
		 	parent::__construct();
		 }


		  public function todos()
		 {

		 	$this->db->select('g.idgrado, g.descripcion as dg, n.descripcion as dn, g.estado');
			$this->db->from('grado as g');
			$this->db->join('nivel as n', 'g.idnivel = n.idnivel');
			$this->db->where('g.estado', '1');
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
		  public function traerNiveles()

		 {
		 	$result = $this->db->get_where('nivel',array("estado"=>"1"));
		 	return $result->result();
		 }


		 public function traeruno($id)

		 {
		 	$result = $this->db->get_where('grado',array("idgrado"=>$id));
		 	return $result->row();
		 }

		 public function insertar()
		 {

		 	$datos = array(
		 		"descripcion" => $this->input->post("descripcion"),
		 		"idnivel" => $this->input->post("idnivel")
		 	);

		 	$r = $this->db->insert("grado",$datos);
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

		 	$this->db->where("idgrado",$id);
		 	$r = $this->db->update("grado",$datos);

		 	if ($r)
		 	{
		 		return 1;
		 	}
		 	else
		 	{
		 		return 0;
		 	}
		 }

		 	 public function pornivel($id){
		 	$result = $this->db->get_where('grado',array("estado"=>"1","idnivel"=>$id));
		 	return $result->result();
		 }
		  public function eliminar($id)
		 {

		 	$datos = array(
		 		"estado" => "0"
		 	);

		 	$this->db->where("idgrado",$id);
		 	$r = $this->db->update("grado",$datos);

		 	if ($r)
		 	{
		 		return 1;
		 	}
		 	else
		 	{
		 		return 0;
		 	}
		 	// $this->db->where("idgrado",$id);
		 	// $this->db->delete("usuario");
		 }
	}



 ?>