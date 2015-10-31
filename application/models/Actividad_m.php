<?php
	class Actividad_m extends CI_Model
	{
		public function __construct()
		 {
		 	parent::__construct();

		 }


		  public function todos()
		 {
		 	if($_SESSION["base"] == "oci8")
		 	{
		 		$this->db->select('a.idactividad, a.descripcion as "dac", asp.descripcion as "da", a.estado');
				$this->db->from('actividad "a"');
				$this->db->join('aspectos "asp"', 'a.idaspecto=asp.idaspecto');
				$this->db->where('a.estado', '1');

				$resultado = $this->db->get();
		 		return $resultado->result();

		 	}
		 	else
		 	{
		 		$this->db->select('a.idactividad, a.descripcion as dac, asp.descripcion as da, a.estado');
				$this->db->from('actividad as a');
				$this->db->join('aspectos as asp', 'a.idaspecto=asp.idaspecto');
				$this->db->where('a.estado', '1');

				$resultado = $this->db->get();
		 		return $resultado->result();
		 	}


			// echo "<pre>";
		 // 	echo print_r($this->db->where('actividad.estado', '1'));


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
		 	$result = $this->db->get_where('actividad',array("idactividad"=>$id));
		 	return $result->row();
		 }

		 public function traerAspectos()
		 {
		 	$result = $this->db->get_where('aspectos',array("estado"=>"1"));
		 	return $result->result();
		 }

		 public function insertar()
		 {

		 	$datos = array(
		 		"descripcion" => $this->input->post("descripcion"),
		 		"idaspecto" => $this->input->post("idaspecto")
		 	);

		 	$r = $this->db->insert("actividad",$datos);
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
		 		"idaspecto" => $this->input->post("idaspecto")
		 	);

		 	$this->db->where("idactividad",$id);
		 	$r = $this->db->update("actividad",$datos);

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

		 	$this->db->where("idactividad",$id);
		 	$r = $this->db->update("actividad",$datos);

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