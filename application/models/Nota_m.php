<?php
	class Nota_m extends CI_Model
	{
		public function __construct()
		 {
		 	parent::__construct();
		 }


		  public function todos()
		 {
		 	$this->db->where('estado', '1');
		 	$resultado = $this->db->get('anio_lectivo');
		 	// $result = $this->db->get_where('usuario',array("usuario"=>"chanis"));
		 	return $resultado->result();

		 }
		 public function traeruno($id)

		 {
		 	$result = $this->db->get_where('anio_lectivo',array("idanio_lectivo"=>$id));
		 	return $result->row();
		 }

		 public function insertar()
		 {
                   
                     $datos = array(
		 		"descripcion" => $this->input->post("descripcion"),"estado"=>1
		 	);

		 	$r = $this->db->insert("anio_lectivo",$datos);
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

		 	$this->db->where("idanio_lectivo",$id);
		 	$r = $this->db->update("anio_lectivo",$datos);

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

		 	$this->db->where("idanio_lectivo",$id);
		 	$r = $this->db->update("anio_lectivo",$datos);

		 	if ($r)
		 	{
		 		return 1;
		 	}
		 	else
		 	{
		 		return 0;
		 	}
		 	// $this->db->where("idanio_lectivo",$id);
		 	// $this->db->delete("usuario");
		 }
	}



 ?>