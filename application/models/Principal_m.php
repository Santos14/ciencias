<?php
	class Principal_m extends CI_Model
	{
		public function __construct()
		 {
		 	parent::__construct();
		 }


		function getList() {
        $sql = "SELECT * FROM {$this->table}";
        $data = $this->db->query($sql);
        $data = $data->result_array();
//         echo "<pre>";print_r($data);exit;
        return $data;
    }
	}



 ?>