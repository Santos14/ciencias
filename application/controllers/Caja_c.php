<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Caja_c extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Caja_m");
	}

	public function index()
	{

		$datos = $this->Caja_m->todos();
		$saldo = $this->Caja_m->saldo();

		$hijo = "Caja";
		$padre = "Pensiones";

		$this->load->view('Pensiones/Caja/caja_v',compact("datos","saldo","padre","hijo"));
	}

	public function reaperturar()
	{
		$resultado = $this->Caja_m->abrirCaja();

		if($resultado == 1)
		{
			$datos = $this->Caja_m->todos();
			redirect(base_url()."Caja_c","refresh",compact("datos"));
		}
		else
		{
			echo    '<script>
						alert("ERROR AL REAPERTURAR CAJA");
					</script>';
		}
	}

	public function cerrar()
	{
		$resultado = $this->Caja_m->cerrarCaja();

		if($resultado == 1)
		{
			echo    '<script>
						alert("CAJA CERRADA");
					</script>';
		}
		else
		{
			echo    '<script>
						alert("ERROR AL CERRAR CAJA");
					</script>';
		}

		redirect(base_url()."Caja_c","refresh",compact("datos"));

	}

	// public function reaperturar()
	// {
	// 	$resultado = $this->Caja_m->cerrarCaja();
	// 	if($resultado == 1)
	// 	{
	// 		$datos = $this->Caja_m->todos();
	// 		redirect(base_url()."Caja_c","refresh",compact("datos"));
	// 	}
	// 	else
	// 	{
	// 		echo    '<script>
	// 					alert("ERROR AL CERRAR CAJA");
	// 				</script>';
	// 	}
	// }


	// public function nuevo()
	// {

	// 	if($this->input->post())
	// 	{
	// 		if($this->input->post("idcaja") == "")
	// 		{

	// 			$r = $this->Caja_m->insertar();
	// 			if($r == 1)
	// 			{
	// 				echo    '<script>
	// 							alert("SE INSERTO CORRECTAMENTE");
	// 						</script>';
	// 			}
	// 			else
	// 			{
	// 				echo    '<script>
	// 							alert("ERROR AL INSERTAR CAJA");
	// 						</script>';
	// 			}
	// 		}
	// 		else
	// 		{
	// 			$r = $this->Caja_m->modificar($this->input->post("idcaja"));
	// 			if($r == 1)
	// 			{
	// 				echo    '<script>
	// 							alert("SE MODIFICO CORRECTAMENTE");
	// 						</script>';
	// 			}
	// 			else
	// 			{
	// 				echo    '<script>
	// 							alert("ERROR AL MODIFICAR CAJA");
	// 						</script>';
	// 			}
	// 		}
	// 		redirect(base_url()."Caja_c","refresh");
	// 	}
	// 	else
	// 	{
	// 		$titulo = "Registrar Tipo De Discapacidad";
	// 		$datos = "";

	// 		$this->load->view("Pensiones/Caja/agregar_v.php",compact("datos","titulo"));
	// 	}
	// }


	// public function modificar($id)
	// {

	// 	$datos = $this->Caja_m->traeruno($id);
	// 	$titulo = "Modificar Caja";

	// 	$this->load->view("Pensiones/Caja/agregar_v.php",compact("datos","titulo"));
	// }

	// public function eliminar($id)
	// {

	// 	$r = $this->Caja_m->eliminar($id);
	// 	if($r == 1)
	// 	{
	// 		echo    '<script>
	// 					alert("SE ELIMINO CORRECTAMENTE");
	// 				</script>';
	// 	}
	// 	else
	// 	{
	// 		echo    '<script>
	// 					alert("ERROR AL ELIMINAR CAJA");
	// 				</script>';
	// 	}
	// 	redirect(base_url()."Caja_c","refresh");

	// }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */