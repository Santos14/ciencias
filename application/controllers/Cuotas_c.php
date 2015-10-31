<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Matricula_c extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Matricula_m");
	}

	public function index()
	{

		$datos = $this->Matricula_m->todos();
		$this->load->view('Matricula/Matricula/matricula_v',compact("datos"));
	}



	public function nuevo()
	{

		if($this->input->post())
		{
			if($this->input->post("idmatricula") == "")
			{

				$r = $this->Matricula_m->insertar();
				if($r == 1)
				{
					echo    '<script>
								alert("SE GRABO CORRECTAMENTE");
							</script>';
				}
				else
				{
					echo    '<script>
								alert("ERROR AL GRABAR MATRICULA");
							</script>';
				}
			}
			else
			{
				$r = $this->Matricula_m->modificar($this->input->post("idmatricula"));
				if($r == 1)
				{
					echo    '<script>
								alert("SE MODIFICO CORRECTAMENTE");
							</script>';
				}
				else
				{
					echo    '<script>
								alert("ERROR AL MODIFICAR MATRICULA");
							</script>';
				}
			}
			redirect(base_url()."Matricula_c","refresh");
		}
		else
		{
			$titulo = "Registrar Matricula";

			$alumno = $this->Matricula_m->traerAlumnos();
			$seccion = $this->Matricula_m->traerSecciones();
			$grado = $this->Matricula_m->traerGrados();
			$turno = $this->Matricula_m->traerTurnos();
			$this->load->view("Matricula/Matricula/agregar_v.php",compact("titulo","alumno","seccion","grado","turno"));
		}
	}


	public function modificar($id)
	{

		$datos = $this->Matricula_m->traeruno($id);
		$titulo = "Modificar Matricula";
		$alumno = $this->Matricula_m->traerAlumnos();
		$seccion = $this->Matricula_m->traerSecciones();
		$grado = $this->Matricula_m->traerGrados();
		$turno = $this->Matricula_m->traerTurnos();
		$this->load->view("Matricula/Matricula/editar_v.php",compact("datos","titulo","alumno","seccion","grado","turno"));
	}

	public function eliminar($id)
	{

		$r = $this->Matricula_m->eliminar($id);
		if($r == 1)
		{
			echo    '<script>
						alert("SE ELIMINO CORRECTAMENTE");
					</script>';
		}
		else
		{
			echo    '<script>
						alert("ERROR AL ELIMINAR MATRICULA");
					</script>';
		}
		redirect(base_url()."Matricula_c","refresh");

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */