<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portal_c extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Portal_m");
	}

	public function Index()
	{




		// $listausuarios = $this->Usuarios_model->mostrar();
		// $saludo = "saludo";
		// $despedida = "chau";
		$this->load->view('Mantenimientos/Portal/index_v');

	}


	public function vistas($vista)
	{
		switch ($vista) {

			case 'actividades':

				$this->load->view('Mantenimientos/Portal/actividades_v');
				break;
			case 'eventos':

				$this->load->view('Mantenimientos/Portal/eventos_v');
				break;
			case 'nosotros':

				$this->load->view('Mantenimientos/Portal/nosotros_v');
				break;
			case 'multimedia':

				$this->load->view('Mantenimientos/Portal/multimedia_v');
				break;
			case 'noticias':

				$this->load->view('Mantenimientos/Portal/noticias_v');
				break;

		}
	}

	public function autentificar()
	{

		$r = $this->Portal_m->autentificar($_POST["usuario"], $_POST["pass"]);

		if(count($r)>0)
		{

			$_SESSION["usuario"] = $r["usuario"];
			$_SESSION["idpersonal"] = $r["idpersonal"];
			redirect(base_url()."Principal_c","refresh");
		}
		else
		{
			echo    '<script>
						alert("ERROR USUARIO O CLAVE INCORRECTOS");
					</script>';
			redirect(base_url()."Portal_c","refresh");
		}
	}

	public function agregar()
	{

		if($this->input->post())
		{
			if($this->input->post("idusuario") == "")
			{

				$this->Usuarios_model->insertar();
			}
			else
			{
				$this->Usuarios_model->modificar($this->input->post("idusuario"));
			}
			redirect(base_url()."portal","refresh");
		}
		else
		{
			$datosusuario = "";
			$datosusuario = $this->load->view("Mantenimientos/portal/editar.php",compact("datosusuario"));
		}



	}
	public function editar($id)
	{

		$datosusuario = $this->Usuarios_model->traeruno($id);
		$datosusuario = $this->load->view("Mantenimientos/portal/editar.php",compact("datosusuario"));
	}

	public function eliminar($id)
	{

	$this->Usuarios_model->eliminar($id);
			redirect(base_url()."portal","refresh");

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */