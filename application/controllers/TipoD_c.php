<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TipoD_c extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("TipoD_m");
	}

	public function index()
	{

		$datos = $this->TipoD_m->todos();


		$this->load->view('Mantenimientos/TipoD/tipoD_v',compact("datos"));
	}



	public function nuevo()
	{

		if($this->input->post())
		{
			if($this->input->post("idtipo_discapacidad") == "")
			{

				$r = $this->TipoD_m->insertar();
				if($r == 1)
				{
					echo    '<script>
								alert("SE INSERTO CORRECTAMENTE");
							</script>';
				}
				else
				{
					echo    '<script>
								alert("ERROR AL INSERTAR TIPO DE DISCAPACIDAD");
							</script>';
				}
			}
			else
			{
				$r = $this->TipoD_m->modificar($this->input->post("idtipo_discapacidad"));
				if($r == 1)
				{
					echo    '<script>
								alert("SE MODIFICO CORRECTAMENTE");
							</script>';
				}
				else
				{
					echo    '<script>
								alert("ERROR AL MODIFICAR TIPO DE DISCAPACIDAD");
							</script>';
				}
			}
			redirect(base_url()."TipoD_c","refresh");
		}
		else
		{
			$titulo = "Registrar Tipo De Discapacidad";
			$datos = "";

			$this->load->view("Mantenimientos/TipoD/agregar_v.php",compact("datos","titulo"));
		}
	}


	public function modificar($id)
	{

		$datos = $this->TipoD_m->traeruno($id);
		$titulo = "Modificar Tipo De Discapacidad";

		$this->load->view("Mantenimientos/TipoD/agregar_v.php",compact("datos","titulo"));
	}

	public function eliminar($id)
	{

		$r = $this->TipoD_m->eliminar($id);
		if($r == 1)
		{
			echo    '<script>
						alert("SE ELIMINO CORRECTAMENTE");
					</script>';
		}
		else
		{
			echo    '<script>
						alert("ERROR AL ELIMINAR TIPO DE DISCAPACIDAD");
					</script>';
		}
		redirect(base_url()."TipoD_c","refresh");

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */