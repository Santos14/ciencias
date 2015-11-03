<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Situacion_c extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Situacion_m");
	}

	public function index()
	{

		$datos = $this->Situacion_m->todos();

		$hijo = "Situacion";
		$padre = "Matricula";
		$this->load->view('Mantenimientos/Situacion/situacion_v',compact("datos","padre","hijo"));
	}



	public function nuevo()
	{

		if($this->input->post())
		{
			if($this->input->post("idsituacion_laboral") == "")
			{

				$r = $this->Situacion_m->insertar();
				if($r == 1)
				{
					echo    '<script>
								alert("SE INSERTO CORRECTAMENTE");
							</script>';
				}
				else
				{
					echo    '<script>
								alert("ERROR AL INSERTAR SITUACION LABORAL");
							</script>';
				}
			}
			else
			{
				$r = $this->Situacion_m->modificar($this->input->post("idsituacion_laboral"));
				if($r == 1)
				{
					echo    '<script>
								alert("SE MODIFICO CORRECTAMENTE");
							</script>';
				}
				else
				{
					echo    '<script>
								alert("ERROR AL MODIFICAR SITUACION LABORAL");
							</script>';
				}
			}
			redirect(base_url()."Situacion_c","refresh");
		}
		else
		{
			$titulo = "Registrar Situacion Laboral";
			$datos = "";
			$hijo = "Situacion";
			$padre = "Matricula";
			$alumnos = $this->Situacion_m->traerAlumnos();


			$this->load->view("Mantenimientos/Situacion/agregar_v.php",compact("datos","titulo","alumnos","padre","hijo"));
		}
	}


	public function modificar($id)
	{

		$datos = $this->Situacion_m->traeruno($id);
		$titulo = "Modificar Situacion Laboral";
		$hijo = "Situacion";
		$padre = "Matricula";
		$alumnos = $this->Situacion_m->traerAlumnos();


		$this->load->view("Mantenimientos/Situacion/agregar_v.php",compact("datos","alumnos","titulo","padre","hijo"));
	}

	public function eliminar($id)
	{

		$r = $this->Situacion_m->eliminar($id);
		if($r == 1)
		{
			echo    '<script>
						alert("SE ELIMINO CORRECTAMENTE");
					</script>';
		}
		else
		{
			echo    '<script>
						alert("ERROR AL ELIMINAR SITUACION LABORAL");
					</script>';
		}
		redirect(base_url()."Situacion_c","refresh");

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */