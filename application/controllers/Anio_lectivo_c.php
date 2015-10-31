<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Anio_lectivo_c extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Anio_lectivo_m");
    }

    public function index() {

        $datos = $this->Anio_lectivo_m->todos();
        $this->load->view('Academia/Anio_lectivo/_Index', compact("datos"));
    }

    public function modificar($id) {

        $datos = $this->Anio_lectivo_m->traeruno($id);
        $titulo = "Modificar Año Lectivo";
        $this->load->view("Academia/Anio_lectivo/_Form.php", compact("datos", "titulo"));
    }

    public function nuevo() {
        if ($this->input->post()) {
            if ($this->input->post("idanio_lectivo") == "") {

                $r = $this->Anio_lectivo_m->insertar();
                if ($r == 1) {
                    echo '<script>
								alert("SE INSERTO CORRECTAMENTE");
							</script>';
                } else {
                    echo '<script>
								alert("ERROR AL INSERTAR AREA");
							</script>';
                }
            } else {
                $r = $this->Anio_lectivo_m->modificar($this->input->post("idanio_lectivo"));
                if ($r == 1) {
                    echo '<script>
								alert("SE MODIFICO CORRECTAMENTE");
							</script>';
                } else {
                    echo '<script>
								alert("ERROR AL MODIFICAR AREA");
							</script>';
                }
            }
            redirect(base_url() . "Anio_lectivo_c", "refresh");
        } else {
            $titulo = "Registrar Año Lectivo";
            $datos = "";
            $this->load->view("Academia/Anio_lectivo/_Form.php", compact("datos", "titulo"));
        }
    }

    public function eliminar($id) {

        $r = $this->Anio_lectivo_m->eliminar($id);
        if ($r == 1) {
            echo '<script>
						alert("SE ELIMINO CORRECTAMENTE");
					</script>';
        } else {
            echo '<script>
						alert("ERROR AL ELIMINAR AREA");
					</script>';
        }
        redirect(base_url() . "Anio_lectivo_c", "refresh");
    }

}
