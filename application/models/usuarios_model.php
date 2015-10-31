<?php
	class Usuarios_model extends CI_Model
	{
		public function __construct()
		 {
		 	parent::__construct();
		 }

		 public function mostrar()
		 {
		 	$result = $this->db->get('usuario');
		 	// $result = $this->db->get_where('usuario',array("usuario"=>"chanis"));
		 	return $result->result();

		 }

		 public function traeruno($id)

		 {
		 	$result = $this->db->get_where('usuario',array("idusuario"=>$id));
		 	return $result->row();
		 }

		 public function insertar()
		 {



		 	$datos = array(
		 		"usuario" => $this->input->post("usuario")
		 	);

		 	$this->db->insert("usuario",$datos);
		 }

		  public function modificar($id)
		 {
		 	$datos = array(
		 		"usuario" => $this->input->post("usuario")
		 	);

		 	$this->db->where("idusuario",$id);
		 	$this->db->update("usuario",$datos);
		 }

		   public function eliminar($id)
		 {


		 	$this->db->where("idusuario",$id);
		 	$this->db->delete("usuario");
		 }
	}



 ?>