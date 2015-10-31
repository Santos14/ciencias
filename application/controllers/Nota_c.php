<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Nota_c extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Nota_m");
    }

    public function index() {

        $datos = $this->Nota_m->todos();
        $selectArea = $this->Select(array('id' => 'idarea', 'name' => 'idarea', 'class' => 'form-control', 'table' => '_area where estado = 1', 'code' => '', 'value' => 'idarea', 'option' => 'descripcion'));

        $this->load->view('Academia/Nota/_Index', compact("datos", "selectArea"));
    }

    public function modificar($id) {

        $datos = $this->Nota_m->traeruno($id);
        $titulo = "Modificar Año Lectivo";
        $this->load->view("Academia/Nota/_Form.php", compact("datos", "titulo"));
    }

    public function nuevo() {
        if ($this->input->post()) {
            if ($this->input->post("idanio_lectivo") == "") {

                $r = $this->Nota_m->insertar();
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
                $r = $this->Nota_m->modificar($this->input->post("idanio_lectivo"));
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
            redirect(base_url() . "Nota_c", "refresh");
        } else {
            $titulo = "Registrar Año Lectivo";
            $datos = "";
            $this->load->view("Academia/Nota/_Form.php", compact("datos", "titulo"));
        }
    }

    public function eliminar($id) {

        $r = $this->Nota_m->eliminar($id);
        if ($r == 1) {
            echo '<script>
						alert("SE ELIMINO CORRECTAMENTE");
					</script>';
        } else {
            echo '<script>
						alert("ERROR AL ELIMINAR AREA");
					</script>';
        }
        redirect(base_url() . "Nota_c", "refresh");
    }

}
