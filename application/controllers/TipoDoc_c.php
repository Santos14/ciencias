<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TipoDoc_c extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("TipoDoc_m");
	}

	public function index()
	{

		$datos = $this->TipoDoc_m->todos();
		$hijo = "TipoDoc";
		$padre = "Mantenimientos";

		$this->load->view('Mantenimientos/TipoDoc/tipoDoc_v',compact("datos","padre","hijo"));
	}



	public function nuevo()
	{

		if($this->input->post())
		{
			if($this->input->post("idtipo_documento") == "")
			{

				$r = $this->TipoDoc_m->insertar();
				if($r == 1)
				{
					echo    '<script>
								alert("SE INSERTO CORRECTAMENTE");
							</script>';
				}
				else
				{
					echo    '<script>
								alert("ERROR AL INSERTAR TIPO DE DOCUMENTO");
							</script>';
				}
			}
			else
			{
				$r = $this->TipoDoc_m->modificar($this->input->post("idtipo_documento"));
				if($r == 1)
				{
					echo    '<script>
								alert("SE MODIFICO CORRECTAMENTE");
							</script>';
				}
				else
				{
					echo    '<script>
								alert("ERROR AL MODIFICAR TIPO DE DOCUMENTO");
							</script>';
				}
			}
			redirect(base_url()."TipoDoc_c","refresh");
		}
		else
		{
			$titulo = "Registrar Tipo De Documento";
			$datos = "";
			$hijo = "TipoDoc";
		$padre = "Mantenimientos";
			$this->load->view("Mantenimientos/TipoDoc/agregar_v.php",compact("datos","titulo","padre","hijo"));
		}
	}


	public function modificar($id)
	{

		$datos = $this->TipoDoc_m->traeruno($id);
		$titulo = "Modificar Tipo De Documento";
		$hijo = "TipoDoc";
		$padre = "Mantenimientos";
		$this->load->view("Mantenimientos/TipoDoc/agregar_v.php",compact("datos","titulo","padre","hijo"));
	}

	public function eliminar($id)
	{

		$r = $this->TipoDoc_m->eliminar($id);
		if($r == 1)
		{
			echo    '<script>
						alert("SE ELIMINO CORRECTAMENTE");
					</script>';
		}
		else
		{
			echo    '<script>
						alert("ERROR AL ELIMINAR TIPO DE DOCUMENTO");
					</script>';
		}
		redirect(base_url()."TipoDoc_c","refresh");

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */