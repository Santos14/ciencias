<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Movimiento_c extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Movimiento_m");
	}

	public function index()
	{

		$datos = $this->Movimiento_m->todos();
		$hijo = "Movimiento";
		$padre = "Pensiones";

		$this->load->view('Pensiones/Movimiento/movimiento_v',compact("datos","padre","hijo"));
	}



	public function nuevo()
	{


			$titulo = "Registrar Movimiento";
			$concepto = $this->Movimiento_m->traerConceptos();
			$hijo = "Movimiento";
			$padre = "Pensiones";
			$tipoMovimiento = $this->Movimiento_m->tipoMovimiento();
			$this->load->view("Pensiones/Movimiento/agregar_v.php",compact("concepto","titulo","padre","hijo","tipoMovimiento"));

	}

	public function extornar($id)
	{


			$r = $this->Movimiento_m->extornar($id);
			if($r == 1)
			{
				echo    '<script>
							alert("SE EXTORNO CORRECTAMENTE");
						</script>';
			}
			else
			{
				echo    '<script>
							alert("ERROR AL EXTORNAR");
						</script>';
			}
			redirect(base_url()."Movimiento_c","refresh");

	}


	public function modificar($id)
	{

		$datos = $this->Movimiento_m->traeruno($id);
		$titulo = "Modificar Tipo De Discapacidad";
		$hijo = "Movimiento";
		$padre = "Pensiones";
		$this->load->view("Mantenimientos/Movimiento/agregar_v.php",compact("datos","titulo","padre","hijo"));
	}

	public function eliminar($id)
	{

		$r = $this->Movimiento_m->eliminar($id);
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
		redirect(base_url()."Movimiento_c","refresh");

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */