<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Criterio_c extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Criterio_m");
	}

	public function index()
	{

		$datos = $this->Criterio_m->todos();


		$this->load->view('Mantenimientos/Criterio/criterio_v',compact("datos"));
	}



	public function nuevo()
	{

		if($this->input->post())
		{
			if($this->input->post("idcriterio") == "")
			{

				$r = $this->Criterio_m->insertar();
				if($r == 1)
				{
					echo    '<script>
								alert("SE INSERTO CORRECTAMENTE");
							</script>';
				}
				else
				{
					echo    '<script>
								alert("ERROR AL INSERTAR CRITERIO");
							</script>';
				}
			}
			else
			{
				$r = $this->Criterio_m->modificar($this->input->post("idcriterio"));
				if($r == 1)
				{
					echo    '<script>
								alert("SE MODIFICO CORRECTAMENTE");
							</script>';
				}
				else
				{
					echo    '<script>
								alert("ERROR AL MODIFICAR CRITERIO");
							</script>';
				}
			}
			redirect(base_url()."Criterio_c","refresh");
		}
		else
		{
			$titulo = "Registrar Criterio de Evaluacion";
			$datos = "";
			$asignatura = $this->Criterio_m->traerAsignaturas();
			$this->load->view("Mantenimientos/Criterio/agregar_v.php",compact("datos","titulo","asignatura"));
		}
	}


	public function modificar($id)
	{
		$asignatura = $this->Criterio_m->traerAsignaturas();
		$datos = $this->Criterio_m->traeruno($id);
		$titulo = "Modificar Criterio de Evaluacion";
		$this->load->view("Mantenimientos/Criterio/agregar_v.php",compact("datos","titulo","asignatura"));
	}

	public function eliminar($id)
	{

		$r = $this->Criterio_m->eliminar($id);
		if($r == 1)
		{
			echo    '<script>
						alert("SE ELIMINO CORRECTAMENTE");
					</script>';
		}
		else
		{
			echo    '<script>
						alert("ERROR AL ELIMINAR CRITERIO");
					</script>';
		}
		redirect(base_url()."Criterio_c","refresh");

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */