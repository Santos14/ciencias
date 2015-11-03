<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Instruccion_c extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Instruccion_m");
	}

	public function index()
	{

		$datos = $this->Instruccion_m->todos();
		$hijo = "Instruccion";
		$padre = "Mantenimientos";

		$this->load->view('Mantenimientos/Instruccion/instruccion_v',compact("datos","padre","hijo"));
	}



	public function nuevo()
	{

		if($this->input->post())
		{
			if($this->input->post("idgrado_instruccion") == "")
			{

				$r = $this->Instruccion_m->insertar();
				if($r == 1)
				{
					echo    '<script>
								alert("SE INSERTO CORRECTAMENTE");
							</script>';
				}
				else
				{
					echo    '<script>
								alert("ERROR AL INSERTAR INSTRUCCION");
							</script>';
				}
			}
			else
			{
				$r = $this->Instruccion_m->modificar($this->input->post("idgrado_instruccion"));
				if($r == 1)
				{
					echo    '<script>
								alert("SE MODIFICO CORRECTAMENTE");
							</script>';
				}
				else
				{
					echo    '<script>
								alert("ERROR AL MODIFICAR INSTRUCCION");
							</script>';
				}
			}
			redirect(base_url()."Instruccion_c","refresh");
		}
		else
		{
			$titulo = "Registrar Grado de Instruccion";
			$datos = "";
			$hijo = "Instruccion";
			$padre = "Mantenimientos";
			$this->load->view("Mantenimientos/Instruccion/agregar_v.php",compact("datos","titulo","padre","hijo"));
		}
	}


	public function modificar($id)
	{

		$datos = $this->Instruccion_m->traeruno($id);
		$titulo = "Modificar Grado de Instruccion";
		$hijo = "Instruccion";
		$padre = "Mantenimientos";
		$this->load->view("Mantenimientos/Instruccion/agregar_v.php",compact("datos","titulo","padre","hijo"));
	}

	public function eliminar($id)
	{

		$r = $this->Instruccion_m->eliminar($id);
		if($r == 1)
		{
			echo    '<script>
						alert("SE ELIMINO CORRECTAMENTE");
					</script>';
		}
		else
		{
			echo    '<script>
						alert("ERROR AL ELIMINAR INSTRUCCION");
					</script>';
		}
		redirect(base_url()."Instruccion_c","refresh");

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */