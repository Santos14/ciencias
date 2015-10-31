<?php
	class Cuotas_m extends CI_Model
	{
		public function __construct()
		 {
		 	parent::__construct();
		 }


		  public function todos()
		 {
		 	$this->db->select('m.idmatricula, c.idcuota, sum(c.monto) as monto, c.monto as m,count(c.numero_cuota) as numero_cuota,
			 sum(c.monto_cobrado) as mc, c.fecha_vencimiento, a.nombres,  a.apellido_paterno, a.apellido_materno');
			$this->db->from('cuotas as c');
			$this->db->join('matricula as m', 'c.idmatricula = m.idmatricula');
			$this->db->join('alumno as a', 'a.idalumno = m.idalumno');

			$this->db->where('c.estado', '1');
			$this->db->group_by("m.idmatricula");
		 	$resultado = $this->db->get();
		 	return $resultado->result();

		 }



		 public function monto_cobrado()
		 {
		 	$this->db->select("
			 sum(c.monto_cobrado) as mc");
			$this->db->from('cuotas as c');
			$this->db->join('matricula as m', 'c.idmatricula = m.idmatricula');
			$this->db->join('alumno as a', 'a.idalumno = m.idalumno');

			$this->db->where('c.estado', '0');
			$this->db->group_by("m.idmatricula");
		 	$resultado = $this->db->get();

		 	return $resultado->result();

		 }

		 public function estadoCaja()
		 {
		 	$this->db->select('max(idcaja) as id');
			$this->db->from('caja');
			$resultado = $this->db->get();
			$r = $resultado->row_array();
			$idcaja = $r["id"];
			$resultado = $this->db->get_where("caja",array("idcaja"=>$idcaja));

			return $resultado->result_array();
		 }

		 public function traeruno($id)
		 {

		 	$result = $this->db->get_where('concepto',array("idconcepto"=>$id));
		 	return $result->row();
		 }

		 public function cuotas($id)
		 {
			 $result = $this->db->get_where('cuotas',array("idmatricula"=>$id));
			 	return $result->result();
		 }

		  public function montos($id)
		 {
		 	$this->db->select("sum(monto) as total,monto");
		 	$this->db->from('cuotas');
		 	$this->db->where("idmatricula",$id);
		 	$this->db->where("estado","1");
			$result = $this->db->get();
		 	return $result->result();
		 }

		 public function traerMovimientos()
		 {
		 	$result = $this->db->get_where('tipo_de_movimiento',array("estado"=>"1"));
		 	return $result->result();
		 }

		 public function insertar()
		 {
		 	$this->db->select('min(idcuota) as id');
			$this->db->from('cuotas');
			$this->db->where("idmatricula",$this->input->post("idmatricula"));
			$this->db->where("estado","1");
			$resultado = $this->db->get();
			$r = $resultado->row_array();
			$idcuota = $r["id"];
			$monto = $this->input->post("monto");
			$monto_recibido = $this->input->post("monto_recibido");
			$cont = $monto_recibido/$monto;

			for($i=0 ; $i<$cont ; $i++)
			{
				$datos = array(
		 		"monto_cobrado" => $monto,
		 		"estado" => 0
		 			);
				$this->db->where("idcuota",$idcuota);
				$r = $this->db->update("cuotas",$datos);
				$idcuota++;
			}

			$this->db->select('max(idcaja) as id');
			$this->db->from('caja');
			$this->db->where("estado","1");
			$resultado = $this->db->get();
			$r = $resultado->row_array();
			$idcaja = $r["id"];
			$datoss = array(
		 		"monto" => $monto_recibido,
		 		"idcaja" => $idcaja,
		 		"idconcepto" => 1,
		 		"fecha" => $this->input->post("fecha"),
		 		"referencia" => "Pago de Pension"
		 			);

			$this->db->insert("movimientos",$datoss);
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