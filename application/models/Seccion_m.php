<?php
	class Seccion_m extends CI_Model
	{
		public function __construct()
		 {
		 	parent::__construct();
		 }


		  public function todos()
		 {

		 	$resultado = $this->db->get_where('seccion',array("estado"=>"1"));

		 	// $result = $this->db->get_where('usuario',array("usuario"=>"chanis"));
		 	return $resultado->result();

		 }

		  public function filtrocursosajax($grado,$seccion){

		 	$this->db->select("a.descripcion,dxs.iddocente_x_seccion,dxs.duracion");
		 	$this->db->from("docente_x_seccion AS dxs");
		 	$this->db->join("personal AS p","dxs.idpersonal = p.idpersonal", "inner");
		 	$this->db->join("asignatura AS a","dxs.idasignatura = a.idasignatura", "inner");
		 	$this->db->where(array("dxs.idgrado"=>$grado,"dxs.idseccion"=>$seccion));
		 	$a = $this->db->get();
		 	return $a->result();

		 	//print  $this->db->last_query();
		 	//exit();
		 	/*SELECT a.descripcion, dxs.duracion
			FROM ciencias.docente_x_seccion dxs
			INNER JOIN personal p on p.idpersonal = dxs.idpersonal
			INNER JOIN asignatura a on dxs.idasignatura = a.idasignatura
			WHERE dxs.idgrado=2 AND dxs.idseccion=1*/
		 }


		 public function traeruno($id)

		 {
		 	$result = $this->db->get_where('seccion',array("idseccion"=>$id));
		 	return $result->row();
		 }

		 public function insertar()
		 {

		 	$datos = array(
		 		"descripcion" => $this->input->post("descripcion")

		 	);

		 	$r = $this->db->insert("seccion",$datos);
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

		 	$this->db->where("idseccion",$id);
		 	$r = $this->db->update("seccion",$datos);

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

		 	$this->db->where("idseccion",$id);
		 	$r = $this->db->update("seccion",$datos);

		 	if ($r)
		 	{
		 		return 1;
		 	}
		 	else
		 	{
		 		return 0;
		 	}
		 	// $this->db->where("idseccion",$id);
		 	// $this->db->delete("usuario");
		 }
	}



 ?>