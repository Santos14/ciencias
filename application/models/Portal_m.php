<?php
	class Portal_m extends CI_Model
	{
		public function __construct()
		 {
		 	parent::__construct();
		 }


		  public function autentificar($user,$pass)
		 {
		 	$this->db->where("usuario",$user);
		 	$this->db->where("clave",$pass);
		 	$r = $this->db->get("personal");
		 	return $r->row_array();


		 }

	}



 ?>