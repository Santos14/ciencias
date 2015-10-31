<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RegAlumno_c extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("RegAlumno_m");
	}

	public function index()
	{

		$datos = $this->RegAlumno_m->todos();


		$this->load->view('Alumno/Alumno_v',compact("datos"));
	}



	public function nuevo()
	{

		if($this->input->post())
		{
			if($this->input->post("idalumno") == "")
			{

				$r = $this->RegAlumno_m->insertar();
				if($r == 1)
				{
					echo    '<script>
								alert("SE INSERTO CORRECTAMENTE");
							</script>';
				}
				else
				{
					echo    '<script>
								alert("ERROR AL INSERTAR Alumno");
							</script>';
				}
			}
			else
			{
				$r = $this->RegAlumno_m->modificar($this->input->post("idalumno"));
				if($r == 1)
				{
					echo    '<script>
								alert("SE MODIFICO CORRECTAMENTE");
							</script>';
				}
				else
				{
					echo    '<script>
								alert("ERROR AL MODIFICAR AREA");
							</script>';
				}
			}
			redirect(base_url()."RegAlumno_c","refresh");
		}
		else

		{   $datos="";
             $sangre=$this->RegAlumno_m->sangre();
			$titulo = "Registrar Alumno";
            $documento=$this->RegAlumno_m->documento();
              $parto=$this->RegAlumno_m->parto();
                $discapacidad=$this->RegAlumno_m->discapacidad();
                $actividad=$this->RegAlumno_m->actividad();
                $departamento=$this->RegAlumno_m->departamento();
			$this->load->view("alumno/agregar_v.php",compact("datos","titulo","sangre","documento","parto","discapacidad","actividad","departamento"));
		}
	}
  public function lista(){

       $departamento=$this->RegAlumno_m->listaprovincia($_GET['id']);
           $html = "";
           foreach ($departamento as $value) {
           		$html.= "<option value='$value->idprovincia'>$value->provincia
               </option>
           		";
           }
                 echo $html;

    
  }
  public function lista1(){
  	   $departamento=$this->RegAlumno_m->listadistrito($_GET['id1']);
           $html = "";
           foreach ($departamento as $value) {
           		$html.= "<option value='$value->iddistrito'>$value->distrito
               </option>
           		";
           }
       echo $html;
  }





	public function modificar($id)
	{ $sangre=$this->RegAlumno_m->sangre();
             $documento=$this->RegAlumno_m->documento();
              $parto=$this->RegAlumno_m->parto();
                $discapacidad=$this->RegAlumno_m->discapacidad();
                $actividad=$this->RegAlumno_m->actividad();
                $departamento=$this->RegAlumno_m->departamento();
    
		$datos = $this->RegAlumno_m->traeruno($id);
		            $provin=$this->RegAlumno_m->provincia($datos->idubigeo);
		            $depar=$this->RegAlumno_m->departamento1($provin->idprovincia);
		            $distri=$this->RegAlumno_m->distrito($datos->idubigeo);
		            $disca=$this->RegAlumno_m->detalle($datos->idalumno);
		            $actis=$this->RegAlumno_m->detalle1($datos->idalumno);
		          
		          
		$titulo = "Modificar Alumno";
		$this->load->view("alumno/agregar_v.php",compact("actis","disca","datos","titulo","sangre","documento","parto","discapacidad","actividad","departamento","provin","depar","distri"));
	}

	public function eliminar($id)
	{

		$r = $this->RegAlumno_m->eliminar($id);
		if($r == 1)
		{
			echo    '<script>
						alert("SE ELIMINO CORRECTAMENTE");
					</script>';
		}
		else
		{
			echo    '<script>
						alert("ERROR AL ELIMINAR AREA");
					</script>';
		}
		redirect(base_url()."RegAlumno_c","refresh");

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */