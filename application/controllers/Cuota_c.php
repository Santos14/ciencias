<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cuota_c extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Cuotas_m");
	}

	public function index()
	{

		$datos = $this->Cuotas_m->todos();
		$monto_cobrado = $this->Cuotas_m->monto_cobrado();

		$this->load->view('Pensiones/Cuotas/cuotas_v',compact("datos","monto_cobrado"));
	}

	public function cronograma($id,$idcuota)
	{
		$montos = $this->Cuotas_m->montos($id);
		$datos = $this->Cuotas_m->cuotas($id);
		$this->load->view('Pensiones/Cuotas/cronograma_v',compact("datos","montos","idcuota","id"));
	}


	public function amortizar($total,$monto,$idcuota,$idmatricula)
	{

		$caja = $this->Cuotas_m->estadoCaja();

		if($caja[0]["estado"] == 1)
		{
			$titulo = "Amortizar";
			$this->load->view('Pensiones/Cuotas/agregar_v',compact("titulo","total","monto","idcuota","idmatricula"));
		}
		else
		{
			echo '<script>alert("Por Favor Aperture Caja")</script>';
			redirect(base_url()."Caja_c","refresh");
		}
	}


	public function nuevo()
	{


				$r = $this->Cuotas_m->insertar();
				if($r == 1)
				{
					echo    '<script>
								alert("SE GUARDO CORRECTAMENTE");
							</script>';
				}
				else
				{
					echo    '<script>
								alert("ERROR AL GUARDAR");
							</script>';
				}
				redirect(base_url()."Cuota_c","refresh");
	}


	public function modificar($id)
	{

		$datos = $this->Cuota_m->traeruno($id);
		$titulo = "Modificar Tipo De Discapacidad";

		$this->load->view("Mantenimientos/Cuota/agregar_v.php",compact("datos","titulo"));
	}

	public function eliminar($id)
	{

		$r = $this->Cuota_m->eliminar($id);
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
		redirect(base_url()."Cuota_c","refresh");

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */