<?php
	class Movimiento_m extends CI_Model
	{
		public function __construct()
		 {
		 	parent::__construct();
		 }


		  public function todos()
		 {
		 	$this->db->select('m.idmovimiento, m.idcaja, co.descripcion, m.monto, m.fecha, m.referencia

		 	');
			$this->db->from('movimientos as m');
			$this->db->join('concepto as co', 'co.idconcepto = m.idconcepto');
			$this->db->join('caja as ca', 'ca.idcaja = m.idcaja');

			$this->db->where('m.extorno', '1');

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

		 	$result = $this->db->get_where('concepto',array("idconcepto"=>$id));
		 	return $result->row();
		 }

		 public function traerConceptos()
		 {
		 	$result = $this->db->get_where('concepto',array("estado"=>"1"));
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

		  public function extornar($id)
		 {

		 	$datos = array(
		 		"extorno" => 0
		 	);

		 	$this->db->where("idmovimiento",$id);
		 	$r = $this->db->update("movimientos",$datos);

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