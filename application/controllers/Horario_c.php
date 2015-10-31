<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Horario_c extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Nivel_m");
		$this->load->model("Grado_m");
		$this->load->model("Seccion_m");
		$this->load->model("Horario_m");
	}

	public function index()
	{

		$datos = $this->Nivel_m->todos();
		$secciones = $this->Seccion_m->todos();

		$this->load->view('Horarios/index',compact('datos','secciones'));
	}

	public function cursosajax(){
		$grado = $_GET["grado"];
		$seccion = $_GET["seccion"];

		$infobebe = $this->Seccion_m->filtrocursosajax($grado,$seccion);
		print  json_encode($infobebe);
	}

	public function grabarhorario(){
		$iddia = $_POST["iddia"];
		$idhora = $_POST["idhora"];
		$idcurso = $_POST["idcurso"];

		foreach ($iddia as $key => $value) {
			if(($value == "") || ($idhora[$key] == "") || ($idcurso[$key] == "")){
				
			}else{
				//echo $idhora[$key];exit();
				$this->Horario_m->grabar((int)$value,(int)$idhora[$key],(int)$idcurso[$key]);
			}
		}
		echo json_encode(array("res"=>"ok"));
	}

	public function listgrado(){
		$id = $_POST["id"];
		$datos = $this->Grado_m->pornivel($id);
		
		$html = "";
		foreach ($datos as $key => $value) {
			$html .= "<option value='$value->idgrado' >$value->descripcion</option>";	
		}

		echo $html;
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */