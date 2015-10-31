<?php
class RegAlumno_m extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}


	public function todos()
	{
		$resultado = $this->db->get('alumno');
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

		 public function sangre(){
		 	$resultado = $this->db->get_where('tipo_de_sangre',array('estado' => 1 ));

		 	return $resultado->result();

		 }
		 public function discapacidad(){
		 	$resultado = $this->db->get_where('tipo_de_discapacidad',array('estado' => 1 ));

		 	return $resultado->result();

		 }
		 public function actividad(){
		 	$resultado = $this->db->get_where('actividad',array('estado' => 1 ));

		 	return $resultado->result();

		 }
		 public function documento(){
		 	$resultado = $this->db->get_where('tipo_de_documento',array('estado' => 1 ));

		 	return $resultado->result();

		 }

		 public function listaprovincia($id){
		 	$resultado = $this->db->get_where('provincias',array('iddepartamento' =>$id));

		 	return $resultado->result();

		 }

		 public function provincia($id) {
		 	$id1=$this->db->get_where('distritos',array('iddistrito'=>$id));
		 	$id2=$id1->row();
		 	$resultado = $this->db->get_where('provincias',array('idprovincia' =>$id2->idprovincia));
		 	return $resultado->row();

		 }
		 public function distrito($id) {
		 	$resultado = $this->db->get_where('distritos',array('iddistrito'=>$id));
		 	return $resultado->row();

		 }
		 public function departamento1($id) {
		 	$id1=$this->db->get_where('provincias',array('idprovincia'=>$id));
		 	$id2=$id1->row();
		 	$resultado = $this->db->get_where('departamentos',array('iddepartamento' =>$id2->iddepartamento));
		 	return $resultado->row();

		 }


		 public function listadistrito($id){
		 	$resultado = $this->db->get_where('distritos',array('idprovincia' =>$id));

		 	return $resultado->result();

		 }

		 public function parto(){
		 	$this->db->select("*");
		 	$this->db->from("tipo_de_parto");
		 	$this->db->where('estado','1');
		 	$resultado = $this->db->get('');

		 	return $resultado->result();

		 }
		 public function traeruno($id)

		 {
		 	$result = $this->db->get_where('alumno',array("idalumno"=>$id));
		 	return $result->row();
		 }
		 public function departamento()
		 {

		 	$resultado= $this->db->get('departamentos');


		 	return $resultado->result();
		 }




		 public function insertar()
		 {
		 	//echo $this->input->post("apep");exit;
//   echo "<pre>";print_r($_REQUEST);EXIT();
		 	$datos = array(

		 		"nombres" => $this->input->post("nombres"),
		 		"apellido_paterno"=>$this->input->post("apep"),
		 		"apellido_materno"=>$this->input->post("apem"),
		 		"sexo"=>$this->input->post("sexo"),
		 		"estado_civil"=>$this->input->post("estado_civil"),
		 		"nacimiento_registrado"=>$this->input->post("nacimiento_registrado"),
		 		"fecha_nacimiento"=>$this->input->post("fecha_nacimiento"),
		 		"lengua_materna"=>$this->input->post("idioma"),
		 		"segunda_lengua"=>$this->input->post("idiomas"),
		 		"numero_hermanos"=>$this->input->post("numero"),
		 		"lugar_q_ocupa"=>$this->input->post("ocupas"),
		 		"religion"=>$this->input->post("religion"),
		 		"numero_documento"=>$this->input->post("documento"),
		 		"observaciones"=>$this->input->post("observacion"),
		 		"idtipo_sangre"=>$this->input->post("tiposangre"),
		 		"idtipo_documento"=>$this->input->post("tipodocumento"),
		 		"idtipo_parto"=>$this->input->post("tipoparto"),
		 		"idubigeo"=>$this->input->post("distrito")

		 		);
		 	//print_r($datos);exit;

$r=$this->db->insert("alumno",$datos);


$this->db->select_max ("idalumno");
$query = $this->db->get ('alumno');
$id=$query->row();
//echo $id->idalumno;exit();

if(($this->input->post("actividad"))){
	$x2 = $this->input->post("edad");
	$x=$this->input->post("actividad");
	for ($i=0; $i <count($x) ; $i++) {

		$dato=array(
			"idactividad"=>$x[$i],
			"idalumno"=>$id->idalumno,
			"edad"=>$x2[$i]

			);

		$this->db->insert("alumno_x_actividad",$dato);
	}

}

if (($this->input->post("discapacitadoedad")))
{
	$x1=$this->input->post("discapacitadoedad");

	for ($i=0; $i <count($x1) ; $i++) {

		$dato=array(
			"idalumno"=>$id->idalumno,
			"idtipo_discapacidad"=>$x1[$i]


			);

		$r=$this->db->insert("alumno_x_discapacidad",$dato);
	}


}



if ($r)
{
	return 1;
}
else
{
	return 0;
}
}



public function detalle($id){


	$r=$this->db->get_where("alumno_x_discapacidad",array("idalumno"=>$id));
	return $r->result();

}
public function detalle1($id){


	$r=$this->db->get_where("alumno_x_actividad",array("idalumno"=>$id));
	return $r->result();

}
public function modificar($id)
{

	$datos = array(

		"nombres" => $this->input->post("nombres"),
		"apellido_paterno"=>$this->input->post("apep"),
		"apellido_materno"=>$this->input->post("apem"),
		"sexo"=>$this->input->post("sexo"),
		"estado_civil"=>$this->input->post("estado_civil"),
		"nacimiento_registrado"=>$this->input->post("nacimiento_registrado"),
		"fecha_nacimiento"=>$this->input->post("fecha_nacimiento"),
		"lengua_materna"=>$this->input->post("idioma"),
		"segunda_lengua"=>$this->input->post("idiomas"),
		"numero_hermanos"=>$this->input->post("numero"),
		"lugar_q_ocupa"=>$this->input->post("ocupas"),
		"religion"=>$this->input->post("religion"),
		"numero_documento"=>$this->input->post("documento"),
		"observaciones"=>$this->input->post("observacion"),
		"idtipo_sangre"=>$this->input->post("tiposangre"),
		"idtipo_documento"=>$this->input->post("tipodocumento"),
		"idtipo_parto"=>$this->input->post("tipoparto"),
		"idubigeo"=>$this->input->post("distrito")

		);
		 	//print_r($datos);exit;
	$this->db->where("idalumno",$id);
	$r=$this->db->update("alumno",$datos);




//echo $id->idalumno;exit();

	if(($this->input->post("actividad"))){
		$x2 = $this->input->post("edad");
		$x=$this->input->post("actividad");
		for ($i=0; $i <count($x) ; $i++) {

			$dato=array(
				"idactividad"=>$x[$i],
				"idalumno"=>$id,
				"edad"=>$x2[$i]

				);

			$this->db->update("alumno_x_actividad",$dato);
		}

	}

	if (($this->input->post("discapacitadoedad")))
	{
		$x1=$this->input->post("discapacitadoedad");

		for ($i=0; $i <count($x1) ; $i++) {

			$dato=array(
				"idalumno"=>$id,
				"idtipo_discapacidad"=>$x1[$i]


				);

			$r=$this->db->update("alumno_x_discapacidad",$dato);
		}


	}



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

	$this->db->where("idarea",$id);
	$r = $this->db->update("_area",$datos);

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




