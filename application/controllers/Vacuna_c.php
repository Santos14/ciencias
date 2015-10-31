<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vacuna_c extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Vacuna_m");
	}

	public function index()
	{
		$datos = $this->Vacuna_m->todos();
		$this->load->view('Mantenimientos/Vacuna/vacuna_v',compact("datos"));
	}

	public function nuevo()
	{

		if($this->input->post())
		{
			if($this->input->post("idvacuna") == "")
			{

				$r = $this->Vacuna_m->insertar();
				if($r == 1)
				{
					echo    '<script>
								alert("SE INSERTO CORRECTAMENTE");
							</script>';
				}
				else
				{
					echo    '<script>
								alert("ERROR AL INSERTAR VACUNA");
							</script>';
				}
			}
			else
			{
				$r = $this->Vacuna_m->modificar($this->input->post("idvacuna"));
				if($r == 1)
				{
					echo    '<script>
								alert("SE MODIFICO CORRECTAMENTE");
							</script>';
				}
				else
				{
					echo    '<script>
								alert("ERROR AL MODIFICAR VACUNA");
							</script>';
				}
			}
			redirect(base_url()."Vacuna_c","refresh");
		}
		else
		{
			$titulo = "Registrar Vacuna";
			$datos = "";

			$this->load->view("Mantenimientos/Vacuna/agregar_v.php",compact("datos","titulo"));
		}
	}


	public function modificar($id)
	{

		$datos = $this->Vacuna_m->traeruno($id);
		$titulo = "Modificar Vacuna";
		$this->load->view("Mantenimientos/Vacuna/agregar_v.php",compact("datos","titulo"));
	}

	public function eliminar($id)
	{

		$r = $this->Vacuna_m->eliminar($id);
		if($r == 1)
		{
			echo    '<script>
						alert("SE ELIMINO CORRECTAMENTE");
					</script>';
		}
		else
		{
			echo    '<script>
						alert("ERROR AL ELIMINAR VACUNA");
					</script>';
		}
		redirect(base_url()."Vacuna_c","refresh");

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */