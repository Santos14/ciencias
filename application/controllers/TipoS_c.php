<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TipoS_c extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("TipoS_m");
	}

	public function index()
	{

		$datos = $this->TipoS_m->todos();
		$hijo = "TipoS";
		$padre = "Mantenimientos";
		$this->load->view('Mantenimientos/TipoS/tipoS_v',compact("datos","padre","hijo"));
	}



	public function nuevo()
	{

		if($this->input->post())
		{
			if($this->input->post("idtipo_sangre") == "")
			{

				$r = $this->TipoS_m->insertar();
				if($r == 1)
				{
					echo    '<script>
								alert("SE INSERTO CORRECTAMENTE");
							</script>';
				}
				else
				{
					echo    '<script>
								alert("ERROR AL INSERTAR TIPO DE SANGRE");
							</script>';
				}
			}
			else
			{
				$r = $this->TipoS_m->modificar($this->input->post("idtipo_sangre"));
				if($r == 1)
				{
					echo    '<script>
								alert("SE MODIFICO CORRECTAMENTE");
							</script>';
				}
				else
				{
					echo    '<script>
								alert("ERROR AL MODIFICAR TIPO DE SANGRE");
							</script>';
				}
			}
			redirect(base_url()."TipoS_c","refresh");
		}
		else
		{
			$titulo = "Registrar Tipo De Sangre";
			$datos = "";
			$hijo = "TipoS";
		$padre = "Mantenimientos";
			$this->load->view("Mantenimientos/TipoS/agregar_v.php",compact("datos","titulo","padre","hijo"));
		}
	}


	public function modificar($id)
	{

		$datos = $this->TipoS_m->traeruno($id);
		$titulo = "Modificar Tipo De Sangre";
		$hijo = "TipoS";
		$padre = "Mantenimientos";
		$this->load->view("Mantenimientos/TipoS/agregar_v.php",compact("datos","titulo","padre","hijo"));
	}

	public function eliminar($id)
	{

		$r = $this->TipoS_m->eliminar($id);
		if($r == 1)
		{
			echo    '<script>
						alert("SE ELIMINO CORRECTAMENTE");
					</script>';
		}
		else
		{
			echo    '<script>
						alert("ERROR AL ELIMINAR TIPO DE SANGRE");
					</script>';
		}
		redirect(base_url()."TipoS_c","refresh");

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */