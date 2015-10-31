<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Concepto_c extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Concepto_m");
	}

	public function index()
	{

		$datos = $this->Concepto_m->todos();


		$this->load->view('Mantenimientos/Concepto/concepto_v',compact("datos"));
	}



	public function nuevo()
	{

		if($this->input->post())
		{
			if($this->input->post("idconcepto") == "")
			{

				$r = $this->Concepto_m->insertar();
				if($r == 1)
				{
					echo    '<script>
								alert("SE INSERTO CORRECTAMENTE");
							</script>';
				}
				else
				{
					echo    '<script>
								alert("ERROR AL INSERTAR Concepto");
							</script>';
				}
			}
			else
			{
				$r = $this->Concepto_m->modificar($this->input->post("idconcepto"));
				if($r == 1)
				{
					echo    '<script>
								alert("SE MODIFICO CORRECTAMENTE");
							</script>';
				}
				else
				{
					echo    '<script>
								alert("ERROR AL MODIFICAR Concepto");
							</script>';
				}
			}
			redirect(base_url()."Concepto_c","refresh");
		}
		else
		{
			$titulo = "Registrar Concepto de Pago";
			$datos = "";
			$movimiento = $this->Concepto_m->traerMovimientos();
			$this->load->view("Mantenimientos/Concepto/agregar_v.php",compact("datos","titulo","movimiento"));
		}
	}


	public function modificar($id)
	{
		$movimiento = $this->Concepto_m->traerMovimientos();
		$datos = $this->Concepto_m->traeruno($id);
		$titulo = "Modificar Concepto de Pago";
		$this->load->view("Mantenimientos/Concepto/agregar_v.php",compact("datos","titulo","movimiento"));
	}

	public function eliminar($id)
	{

		$r = $this->Concepto_m->eliminar($id);
		if($r == 1)
		{
			echo    '<script>
						alert("SE ELIMINO CORRECTAMENTE");
					</script>';
		}
		else
		{
			echo    '<script>
						alert("ERROR AL ELIMINAR Concepto");
					</script>';
		}
		redirect(base_url()."Concepto_c","refresh");

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */