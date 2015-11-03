<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Periodo_c extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Periodo_m");
	}

	public function index()
	{
		$datos = $this->Periodo_m->todos();
		$hijo = "Periodo";
		$padre = "Mantenimientos";
		$this->load->view('Mantenimientos/Periodo/periodo_v',compact("datos","padre","hijo"));
	}

	public function nuevo()
	{

		if($this->input->post())
		{
			if($this->input->post("idperiodo") == "")
			{

				$r = $this->Periodo_m->insertar();
				if($r == 1)
				{
					echo    '<script>
								alert("SE INSERTO CORRECTAMENTE");
							</script>';
				}
				else
				{
					echo    '<script>
								alert("ERROR AL INSERTAR PERIODO");
							</script>';
				}
			}
			else
			{
				$r = $this->Periodo_m->modificar($this->input->post("idperiodo"));
				if($r == 1)
				{
					echo    '<script>
								alert("SE MODIFICO CORRECTAMENTE");
							</script>';
				}
				else
				{
					echo    '<script>
								alert("ERROR AL MODIFICAR PERIODO");
							</script>';
				}
			}
			redirect(base_url()."Periodo_c","refresh");
		}
		else
		{
			$titulo = "Registrar Periodo";
			$datos = "";
			$hijo = "Periodo";
			$padre = "Mantenimientos";
			$this->load->view("Mantenimientos/Periodo/agregar_v.php",compact("datos","titulo","padre","hijo"));
		}
	}


	public function modificar($id)
	{

		$datos = $this->Periodo_m->traeruno($id);
		$titulo = "Modificar Periodo";
		$hijo = "Periodo";
		$padre = "Mantenimientos";
		$this->load->view("Mantenimientos/Periodo/agregar_v.php",compact("datos","titulo","padre","hijo"));
	}

	public function eliminar($id)
	{

		$r = $this->Periodo_m->eliminar($id);
		if($r == 1)
		{
			echo    '<script>
						alert("SE ELIMINO CORRECTAMENTE");
					</script>';
		}
		else
		{
			echo    '<script>
						alert("ERROR AL ELIMINAR PERIODO");
					</script>';
		}
		redirect(base_url()."Periodo_c","refresh");

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */