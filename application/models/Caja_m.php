<?php
	class Caja_m extends CI_Model
	{
		public function __construct()
		 {
		 	parent::__construct();
		 }


		  public function todos()
		 {
			$this->db->select('c.idcaja, c.saldo_apertura, c.fecha_apertura, c.estado, p.nombres, p.apellidos, c.fecha_cierre, c.saldo_cierre');
			$this->db->from('caja as c');
			$this->db->join('personal as p', 'c.idpersonal = p.idpersonal');
		 	$resultado = $this->db->get();
		 	// $result = $this->db->get_where('usuario',array("usuario"=>"chanis"));
		 	return $resultado->result();

		 }

		  public function saldo()
		 {
			$this->db->select('max(idcaja) as id');
			$this->db->from('caja');
			$resultado = $this->db->get();
			$r = $resultado->row_array();
			$idcaja = $r["id"];
			$resultado = $this->db->get_where("caja",array("idcaja"=>$idcaja));
			return $resultado->result_array();


		 }


		 public function abrirCaja()
		 {

		 	$hora=date("H:i:s");
			$nuevahora=strtotime('-5 hour', strtotime ( $hora ));
			$nuevahora =  date('H:i:s', $nuevahora);

			$fecha = date('Y-m-j');
			$nuevafecha = strtotime ( '-7 hour' , strtotime ( $fecha ) ) ;
			$nuevafecha =  date('Y-m-j', $nuevafecha);
			$idpersonal = $_SESSION["idpersonal"];
			$fecha_apertura = $nuevafecha." ".$nuevahora;


			$this->db->select('max(idcaja) as id');
			$this->db->from('caja');
			$resultado = $this->db->get();
			$r = $resultado->row_array();

			if (isset($r) && count($r)>0 && $r!=NULL)
			{
				$idcaja = $r["id"];
				$resultado = $this->db->get_where("caja",array("idcaja"=>$idcaja));
				$re = $resultado->result_array();
				$saldo_apertura = $re[0]["saldo_cierre"];
				// print_r($re);
			}
			else
			{
				$saldo_apertura = 0.00;

			}




			$datos = array(
		 		"saldo_apertura" => $saldo_apertura,
		 		"fecha_apertura" => $fecha_apertura,
		 		"saldo_cierre" => $saldo_apertura,
		 		"fecha_cierre" => $fecha_apertura,
		 		"idpersonal" => $idpersonal,
		 		"estado" => '1'
		 	);

		 	$r = $this->db->insert("caja",$datos);
		 	if ($r)
		 	{
		 		return 1;
		 	}
		 	else
		 	{
		 		return 0;
		 	}



		 }

		 public function cerrarCaja()
		 {
		 	$hora=date("H:i:s");
			$nuevahora=strtotime('-5 hour', strtotime ( $hora ));
			$nuevahora =  date('H:i:s', $nuevahora);

			$fecha = date('Y-m-j');
			$nuevafecha = strtotime ( '-7 hour' , strtotime ( $fecha ) ) ;
			$nuevafecha =  date('Y-m-j', $nuevafecha);

			$fecha_cierre = $nuevafecha." ".$nuevahora;

			$this->db->select('sum(monto) as monto');
			$this->db->from('movimientos');
			$this->db->where("fecha",$nuevafecha);
			$this->db->where("extorno","1");
			$resultado = $this->db->get();
			$r = $resultado->row_array();
			$monto = $r["monto"];



			$this->db->select('max(idcaja) as id');
			$this->db->from('caja');
			$this->db->where("estado","1");

			$resultado = $this->db->get();
			$r = $resultado->row_array();
			$idcaja = $r["id"];




			$datos = array(
		 		"fecha_cierre" => $fecha_cierre,
		 		"saldo_cierre" => $monto,
		 		"estado" => 0

	 		);

		 	$this->db->where("idcaja",$idcaja);
		 	$r = $this->db->update("caja",$datos);

		 	if ($r)
		 	{
		 		return 1;
		 	}
		 	else
		 	{
		 		return 0;
		 	}

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