<?php

	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Principal_c extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model("Principal_m");
		}

		public function index()
		{
			$padre = "";
			$hijo = "";

			$this->load->view("Mantenimientos/Principal/principal_v",compact("padre","hijo"));
		}

		public function cerrar()
		{
			session_destroy();
			redirect(base_url()."Portal_c","refresh");
		}

	}
 ?>