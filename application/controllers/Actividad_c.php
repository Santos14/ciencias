<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Actividad_c extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Actividad_m");
	}

	public function index()
	{

		$datos = $this->Actividad_m->todos();


		$this->load->view('Mantenimientos/Actividad/actividad_v',compact("datos"));
	}



	public function nuevo()
	{

		if($this->input->post())
		{
			if($this->input->post("idactividad") == "")
			{

				$r = $this->Actividad_m->insertar();
				if($r == 1)
				{
					echo    '<script>
								alert("SE INSERTO CORRECTAMENTE");
							</script>';
				}
				else
				{
					echo    '<script>
								alert("ERROR AL INSERTAR ACTIVIDAD");
							</script>';
				}
			}
			else
			{
				$r = $this->Actividad_m->modificar($this->input->post("idactividad"));
				if($r == 1)
				{
					echo    '<script>
								alert("SE MODIFICO CORRECTAMENTE");
							</script>';
				}
				else
				{
					echo    '<script>
								alert("ERROR AL MODIFICAR ACTIVIDAD");
							</script>';
				}
			}
			redirect(base_url()."Actividad_c","refresh");
		}
		else
		{
			$titulo = "Registrar Actividad";
			$datos = "";
			$aspectos = $this->Actividad_m->traerAspectos();
			$this->load->view("Mantenimientos/Actividad/agregar_v.php",compact("datos","titulo","aspectos"));
		}
	}


	public function modificar($id)
	{

		$datos = $this->Actividad_m->traeruno($id);
		$titulo = "Modificar Actividad";
		$aspectos = $this->Actividad_m->traerAspectos();
		$this->load->view("Mantenimientos/Actividad/agregar_v.php",compact("datos","aspectos","titulo"));
	}

	public function eliminar($id)
	{

		$r = $this->Actividad_m->eliminar($id);
		if($r == 1)
		{
			echo    '<script>
						alert("SE ELIMINO CORRECTAMENTE");
					</script>';
		}
		else
		{
			echo    '<script>
						alert("ERROR AL ELIMINAR ACTIVIDAD");
					</script>';
		}
		redirect(base_url()."Actividad_c","refresh");

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */