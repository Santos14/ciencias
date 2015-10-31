<?php
	class TipoDoc_m extends CI_Model
	{
		public function __construct()
		 {
		 	parent::__construct();
		 }


		  public function todos()
		 {

		 	$resultado = $this->db->get_where('tipo_de_documento',array("estado"=>"1"));

		 	// $result = $this->db->get_where('usuario',array("usuario"=>"chanis"));
		 	return $resultado->result();

		 }



		 public function traeruno($id)

		 {
		 	$result = $this->db->get_where('tipo_de_documento',array("idtipo_documento"=>$id));
		 	return $result->row();
		 }

		 public function insertar()
		 {

		 	$datos = array(
		 		"descripcion" => $this->input->post("descripcion")

		 	);

		 	$r = $this->db->insert("tipo_de_documento",$datos);
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

		 	$this->db->where("idtipo_documento",$id);
		 	$r = $this->db->update("tipo_de_documento",$datos);

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

		 	$this->db->where("idtipo_documento",$id);
		 	$r = $this->db->update("tipo_de_documento",$datos);

		 	if ($r)
		 	{
		 		return 1;
		 	}
		 	else
		 	{
		 		return 0;
		 	}
		 	// $this->db->where("idtipo_documento",$id);
		 	// $this->db->delete("usuario");
		 }
	}



 ?>