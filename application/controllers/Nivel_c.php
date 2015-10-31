<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nivel_c extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Nivel_m");
	}

	public function index()
	{

		$datos = $this->Nivel_m->todos();


		$this->load->view('Mantenimientos/Nivel/nivel_v',compact("datos"));
	}



	public function nuevo()
	{

		if($this->input->post())
		{
			if($this->input->post("idnivel") == "")
			{

				$r = $this->Nivel_m->insertar();
				if($r == 1)
				{
					echo    '<script>
								alert("SE INSERTO CORRECTAMENTE");
							</script>';
				}
				else
				{
					echo    '<script>
								alert("ERROR AL INSERTAR NIVEL");
							</script>';
				}
			}
			else
			{
				$r = $this->Nivel_m->modificar($this->input->post("idnivel"));
				if($r == 1)
				{
					echo    '<script>
								alert("SE MODIFICO CORRECTAMENTE");
							</script>';
				}
				else
				{
					echo    '<script>
								alert("ERROR AL MODIFICAR NIVEL");
							</script>';
				}
			}
			redirect(base_url()."Nivel_c","refresh");
		}
		else
		{
			$titulo = "Registrar Nivel";
			$datos = "";

			$this->load->view("Mantenimientos/Nivel/agregar_v.php",compact("datos","titulo"));
		}
	}


	public function modificar($id)
	{

		$datos = $this->Nivel_m->traeruno($id);
		$titulo = "Modificar Nivel";

		$this->load->view("Mantenimientos/Nivel/agregar_v.php",compact("datos","titulo"));
	}

	public function eliminar($id)
	{

		$r = $this->Nivel_m->eliminar($id);
		if($r == 1)
		{
			echo    '<script>
						alert("SE ELIMINO CORRECTAMENTE");
					</script>';
		}
		else
		{
			echo    '<script>
						alert("ERROR AL ELIMINAR NIVEL");
					</script>';
		}
		redirect(base_url()."Nivel_c","refresh");

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */