<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Area_c extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Area_m");
	}

	public function index()
	{

		$datos = $this->Area_m->todos();
		$hijo = "Area";
		$padre = "Mantenimientos";

		$this->load->view('Mantenimientos/Area/area_v',compact("datos","padre","hijo"));
	}



	public function nuevo()
	{

		if($this->input->post())
		{
			if($this->input->post("idarea") == "")
			{

				$r = $this->Area_m->insertar();
				if($r == 1)
				{
					echo    '<script>
								alert("SE INSERTO CORRECTAMENTE");
							</script>';
				}
				else
				{
					echo    '<script>
								alert("ERROR AL INSERTAR AREA");
							</script>';
				}
			}
			else
			{
				$r = $this->Area_m->modificar($this->input->post("idarea"));
				if($r == 1)
				{
					echo    '<script>
								alert("SE MODIFICO CORRECTAMENTE");
							</script>';
				}
				else
				{
					echo    '<script>
								alert("ERROR AL MODIFICAR AREA");
							</script>';
				}
			}
			redirect(base_url()."Area_c","refresh");
		}
		else
		{
			$titulo = "Registrar Area";
			$datos = "";
			$hijo = "Area";
			$padre = "Mantenimientos";
			$this->load->view("Mantenimientos/Area/agregar_v.php",compact("datos","titulo","padre","hijo"));
		}
	}


	public function modificar($id)
	{

		$datos = $this->Area_m->traeruno($id);
		$titulo = "Modificar Area";
		$hijo = "Area";
		$padre = "Mantenimientos";
		$this->load->view("Mantenimientos/Area/agregar_v.php",compact("datos","titulo","padre","hijo"));
	}

	public function eliminar($id)
	{

		$r = $this->Area_m->eliminar($id);
		if($r == 1)
		{
			echo    '<script>
						alert("SE ELIMINO CORRECTAMENTE");
					</script>';
		}
		else
		{
			echo    '<script>
						alert("ERROR AL ELIMINAR AREA");
					</script>';
		}
		redirect(base_url()."Area_c","refresh");

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */