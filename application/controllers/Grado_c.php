<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Grado_c extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Grado_m");
	}

	public function index()
	{

		$datos = $this->Grado_m->todos();
		$hijo = "Grado";
		$padre = "Mantenimientos";


		$this->load->view('Mantenimientos/Grado/grado_v',compact("datos","padre","hijo"));
	}



	public function nuevo()
	{

		if($this->input->post())
		{
			if($this->input->post("idgrado") == "")
			{

				$r = $this->Grado_m->insertar();
				if($r == 1)
				{
					echo    '<script>
								alert("SE INSERTO CORRECTAMENTE");
							</script>';
				}
				else
				{
					echo    '<script>
								alert("ERROR AL INSERTAR GRADO");
							</script>';
				}
			}
			else
			{
				$r = $this->Grado_m->modificar($this->input->post("idgrado"));
				if($r == 1)
				{
					echo    '<script>
								alert("SE MODIFICO CORRECTAMENTE");
							</script>';
				}
				else
				{
					echo    '<script>
								alert("ERROR AL MODIFICAR GRADO");
							</script>';
				}
			}
			redirect(base_url()."Grado_c","refresh");
		}
		else
		{
			$titulo = "Registrar Grado";
			$datos = "";
			$nivel = $this->Grado_m->traerNiveles();
			$hijo = "Grado";
			$padre = "Mantenimientos";
			$this->load->view("Mantenimientos/Grado/agregar_v.php",compact("datos","titulo","nivel","padre","hijo"));
		}
	}


	public function modificar($id)
	{

		$datos = $this->Grado_m->traeruno($id);
		$titulo = "Modificar Grado";
		$nivel = $this->Grado_m->traerNiveles();
		$this->load->view("Mantenimientos/Grado/agregar_v.php",compact("datos","titulo","nivel"));
	}

	public function eliminar($id)
	{

		$r = $this->Grado_m->eliminar($id);
		if($r == 1)
		{
			echo    '<script>
						alert("SE ELIMINO CORRECTAMENTE");
					</script>';
		}
		else
		{
			echo    '<script>
						alert("ERROR AL ELIMINAR GRADO");
					</script>';
		}
		redirect(base_url()."Grado_c","refresh");

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */