<?php
	class Situacion_m extends CI_Model
	{
		public function __construct()
		 {
		 	parent::__construct();
		 }


		  public function todos()
		 {
		 	$this->db->select('s.idsituacion_laboral, s.anio, s.descripcion, s.estado, s.edad, s.horas_semanales_trabajo, a.nombres,
		 		a.apellido_paterno, a.apellido_materno');
			$this->db->from('situacion_laboral as s');
			$this->db->join('alumno as a', 's.idalumno = a.idalumno');
			$this->db->where('s.estado', '1');
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
		 	$result = $this->db->get_where('situacion_laboral',array("idsituacion_laboral"=>$id));
		 	return $result->row();
		 }

		 public function traerAlumnos()
		 {
		 	$result = $this->db->get_where('alumno',array("estado"=>"1"));
		 	return $result->result();
		 }

		 public function insertar()
		 {

		 	$datos = array(
		 		"anio" => $this->input->post("anio"),
		 		"horas_semanales_trabajo" => $this->input->post("horas_semanales_trabajo"),
		 		"edad" => $this->input->post("edad"),
		 		"descripcion" => $this->input->post("descripcion"),
		 		"idalumno" => $this->input->post("idalumno")
		 	);

		 	$r = $this->db->insert("situacion_laboral",$datos);
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
		 		"anio" => $this->input->post("anio"),
		 		"horas_semanales_trabajo" => $this->input->post("horas_semanales_trabajo"),
		 		"edad" => $this->input->post("edad"),
		 		"descripcion" => $this->input->post("descripcion"),
		 		"idalumno" => $this->input->post("idalumno")
		 	);

		 	$this->db->where("idsituacion_laboral",$id);
		 	$r = $this->db->update("situacion_laboral",$datos);

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

		 	$this->db->where("idsituacion_laboral",$id);
		 	$r = $this->db->update("situacion_laboral",$datos);

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