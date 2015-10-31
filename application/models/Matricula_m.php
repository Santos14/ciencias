<?php
	class Matricula_m extends CI_Model
	{
		public function __construct()
		 {
		 	parent::__construct();
		 }


		  public function todos()
		 {
		 	$this->db->select('m.idmatricula, a.nombres, a.apellido_paterno, a.apellido_materno, p.nombres, p.apellidos,
		 		m.anio_lectivo, m.fecha');
			$this->db->from('matricula as m');
			$this->db->join('alumno as a', 'a.idalumno = m.idalumno');
			$this->db->join('seccion as s', 's.idseccion = m.idseccion');
			$this->db->join('grado as g', 'g.idgrado = m.idgrado');
			$this->db->join('turno as t', 't.idturno = m.idturno');
			$this->db->join('personal as p', 'p.idpersonal = m.idpersonal');

			$this->db->where('m.estado', '1');
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
		 	$result = $this->db->get_where('matricula',array("idmatricula"=>$id));
		 	return $result->row();
		 }

		 public function traerAlumnos()
		 {
		 	$result = $this->db->get_where('alumno',array("estado"=>"1"));
		 	return $result->result();
		 }

		  public function traerSecciones()
		 {
		 	$result = $this->db->get_where('seccion',array("estado"=>"1"));
		 	return $result->result();
		 }

		  public function traerGrados()
		 {
		 	$result = $this->db->get_where('grado',array("estado"=>"1"));
		 	return $result->result();
		 }

		  public function traerTurnos()
		 {
		 	$result = $this->db->get_where('turno',array("estado"=>"1"));
		 	return $result->result();
		 }

		 public function insertar()
		 {


		 	$idpersonal = $_SESSION["idpersonal"];

		 	$anio = date("Y");

		 	$fecha = date('Y-m-j');
			$nuevafecha = strtotime ( '-7 hour' , strtotime ( $fecha ) ) ;
			$nuevafecha =  date('Y-m-j', $nuevafecha);


		 	$datos = array(
		 		"idalumno" => $this->input->post("idalumno"),
		 		"idseccion" => $this->input->post("idseccion"),
		 		"idgrado" => $this->input->post("idgrado"),
		 		"idturno" => $this->input->post("idturno"),
		 		"observacion" => $this->input->post("observacion"),
		 		"idpersonal" => $idpersonal,
		 		"fecha" => $nuevafecha,
		 		"anio_lectivo" => $anio
		 	);



		 	$re = $this->db->insert("matricula",$datos);

		 	$this->db->select(" max(idmatricula) as id");
		 	$this->db->from(" matricula");
		 	$r = $this->db->get();
		 	$row = $r->row_array();
		 	$id = $row["id"];

		 	$fecha = $this->input->post("fecha");
		 	for($i = 1 ; $i<10 ; $i++)
		 	{


			 	if($i == 1)
			 	{
		 			$datos = array(
				 		"idmatricula" => $id,
				 		"monto" => $this->input->post("monto"),
				 		"numero_cuota" => $i,

				 		"fecha_vencimiento" => $fecha,
				 		"monto_cobrado" => 0.00
				 	);
			 	}
		 		else
		 		{
		 			$datos = array(
				 		"idmatricula" => $id,
				 		"monto" => $this->input->post("monto"),
				 		"numero_cuota" => $i,

				 		"fecha_vencimiento" => $nuevafecha,
				 		"monto_cobrado" => 0.00
				 	);
		 		}
		 		if($i == 2)
		 		{
		 			$nuevafecha = $fecha;
		 		}


			 	$nuevafecha = strtotime ( '+ '.$i.' month' , strtotime ( $fecha ) ) ;
				$nuevafecha =  date('Y-m-j', $nuevafecha);


			 	$this->db->insert("cuotas",$datos);

		 	}

			if ($re)
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

		 	$this->db->where("idmatricula",$id);
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

		 	$this->db->where("idmatricula",$id);
		 	$r = $this->db->update("matricula",$datos);

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