<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cargo_c extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Cargo_m");
	}

	public function index()
	{

		$datos = $this->Cargo_m->todos();

		$hijo = "Cargo";
		$padre = "Mantenimientos";

		$this->load->view('Mantenimientos/Cargo/cargo_v',compact("datos","padre","hijo"));
	}



	public function nuevo()
	{

		if($this->input->post())
		{
			if($this->input->post("idcargo") == "")
			{

				$r = $this->Cargo_m->insertar();
				if($r == 1)
				{
					echo    '<script>
								alert("SE INSERTO CORRECTAMENTE");
							</script>';
				}
				else
				{
					echo    '<script>
								alert("ERROR AL INSERTAR CARGO");
							</script>';
				}
			}
			else
			{
				$r = $this->Cargo_m->modificar($this->input->post("idcargo"));
				if($r == 1)
				{
					echo    '<script>
								alert("SE MODIFICO CORRECTAMENTE");
							</script>';
				}
				else
				{
					echo    '<script>
								alert("ERROR AL MODIFICAR CARGO");
							</script>';
				}
			}
			redirect(base_url()."Cargo_c","refresh");
		}
		else
		{
			$titulo = "Registrar Cargo";
			$datos = "";
			$hijo = "Cargo";
			$padre = "Mantenimientos";
			$this->load->view("Mantenimientos/Cargo/agregar_v.php",compact("datos","titulo","padre","hijo"));
		}
	}


	public function modificar($id)
	{

		$datos = $this->Cargo_m->traeruno($id);
		$titulo = "Modificar Cargo";
		$hijo = "Cargo";
		$padre = "Mantenimientos";
		$this->load->view("Mantenimientos/Cargo/agregar_v.php",compact("datos","titulo","padre","hijo"));
	}

	public function eliminar($id)
	{

		$r = $this->Cargo_m->eliminar($id);
		if($r == 1)
		{
			echo    '<script>
						alert("SE ELIMINO CORRECTAMENTE");
					</script>';
		}
		else
		{
			echo    '<script>
						alert("ERROR AL ELIMINAR CARGO");
					</script>';
		}
		redirect(base_url()."Cargo_c","refresh");

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */