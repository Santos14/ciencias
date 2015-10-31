<?php
	class Horario_m extends CI_Model
	{
		public function __construct()
		 {
		 	parent::__construct();
		 }


		 public function grabar($iddia,$idhora,$iddxa)
		 {

		 	//print "ASd";exit();

		 	$datos = array(
		 		"iddia" => $iddia,
		 		"idhora" => $idhora,
		 		"iddocente_x_seccion" => $iddxa

		 	);

		 	$this->db->insert("horario",$datos);
		 	return "ok";

		 }
		
	}



 ?>