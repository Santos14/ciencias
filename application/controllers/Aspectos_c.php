<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aspectos_c extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Aspectos_m");
	}

	public function index()
	{

		$datos = $this->Aspectos_m->todos();


		$this->load->view('Mantenimientos/Aspectos/aspectos_v',compact("datos"));
	}



	public function nuevo()
	{

		if($this->input->post())
		{
			if($this->input->post("idaspecto") == "")
			{

				$r = $this->Aspectos_m->insertar();
				if($r == 1)
				{
					echo    '<script>
								alert("SE INSERTO CORRECTAMENTE");
							</script>';
				}
				else
				{
					echo    '<script>
								alert("ERROR AL INSERTAR ASPECTO");
							</script>';
				}
			}
			else
			{
				$r = $this->Aspectos_m->modificar($this->input->post("idaspecto"));
				if($r == 1)
				{
					echo    '<script>
								alert("SE MODIFICO CORRECTAMENTE");
							</script>';
				}
				else
				{
					echo    '<script>
								alert("ERROR AL MODIFICAR ASPECTO");
							</script>';
				}
			}
			redirect(base_url()."Aspectos_c","refresh");
		}
		else
		{
			$titulo = "Registrar Aspectos";
			$datos = "";
			$nivel = $this->Aspectos_m->traerNivel();
			$this->load->view("Mantenimientos/Aspectos/agregar_v.php",compact("datos","titulo","nivel"));
		}
	}


	public function modificar($id)
	{
		$nivel = $this->Aspectos_m->traerNivel();
		$datos = $this->Aspectos_m->traeruno($id);
		$titulo = "Modificar Aspectos";
		$this->load->view("Mantenimientos/Aspectos/agregar_v.php",compact("datos","titulo","nivel"));
	}

	public function eliminar($id)
	{

		$r = $this->Aspectos_m->eliminar($id);
		if($r == 1)
		{
			echo    '<script>
						alert("SE ELIMINO CORRECTAMENTE");
					</script>';
		}
		else
		{
			echo    '<script>
						alert("ERROR AL ELIMINAR ASPECTO");
					</script>';
		}
		redirect(base_url()."Aspectos_c","refresh");

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */