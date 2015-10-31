<?php
	class Concepto_m extends CI_Model
	{
		public function __construct()
		 {
		 	parent::__construct();
		 }


		  public function todos()
		 {
		 	$this->db->select('c.idconcepto, c.descripcion as dc, tm.descripcion as dtm, c.estado');
			$this->db->from('concepto as c');
			$this->db->join('tipo_de_movimiento as tm', 'c.idtipo_movimiento = tm.idtipo_movimiento');
			$this->db->where('c.estado', '1');
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
		 	$result = $this->db->get_where('concepto',array("idconcepto"=>$id));
		 	return $result->row();
		 }

		 public function traerMovimientos()
		 {
		 	$result = $this->db->get_where('tipo_de_movimiento',array("estado"=>"1"));
		 	return $result->result();
		 }

		 public function insertar()
		 {

		 	$datos = array(
		 		"descripcion" => $this->input->post("descripcion"),
		 		"idtipo_movimiento" => $this->input->post("idtipo_movimiento")
		 	);

		 	$r = $this->db->insert("concepto",$datos);
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
		 		"idtipo_movimiento" => $this->input->post("idtipo_movimiento")
		 	);

		 	$this->db->where("idconcepto",$id);
		 	$r = $this->db->update("concepto",$datos);

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

		 	$this->db->where("idconcepto",$id);
		 	$r = $this->db->update("concepto",$datos);

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