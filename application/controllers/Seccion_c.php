<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Seccion_c extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Seccion_m");
	}

	public function index()
	{

		$datos = $this->Seccion_m->todos();

		$hijo = "Seccion";
		$padre = "Mantenimientos";
		$this->load->view('Mantenimientos/Seccion/seccion_v',compact("datos","padre","hijo"));
	}



	public function nuevo()
	{

		if($this->input->post())
		{
			if($this->input->post("idseccion") == "")
			{

				$r = $this->Seccion_m->insertar();
				if($r == 1)
				{
					echo    '<script>
								alert("SE INSERTO CORRECTAMENTE");
							</script>';
				}
				else
				{
					echo    '<script>
								alert("ERROR AL INSERTAR SECCION");
							</script>';
				}
			}
			else
			{
				$r = $this->Seccion_m->modificar($this->input->post("idseccion"));
				if($r == 1)
				{
					echo    '<script>
								alert("SE MODIFICO CORRECTAMENTE");
							</script>';
				}
				else
				{
					echo    '<script>
								alert("ERROR AL MODIFICAR SECCION");
							</script>';
				}
			}
			redirect(base_url()."Seccion_c","refresh");
		}
		else
		{
			$titulo = "Registrar Seccion";
			$datos = "";

			$hijo = "Seccion";
			$padre = "Mantenimientos";
			$this->load->view("Mantenimientos/Seccion/agregar_v.php",compact("datos","titulo","padre","hijo"));
		}
	}


	public function modificar($id)
	{

		$datos = $this->Seccion_m->traeruno($id);
		$titulo = "Modificar Seccion";

		$hijo = "Seccion";
		$padre = "Mantenimientos";
		$this->load->view("Mantenimientos/Seccion/agregar_v.php",compact("datos","titulo","padre","hijo"));
	}

	public function eliminar($id)
	{

		$r = $this->Seccion_m->eliminar($id);
		if($r == 1)
		{
			echo    '<script>
						alert("SE ELIMINO CORRECTAMENTE");
					</script>';
		}
		else
		{
			echo    '<script>
						alert("ERROR AL ELIMINAR SECCION");
					</script>';
		}
		redirect(base_url()."Seccion_c","refresh");

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */