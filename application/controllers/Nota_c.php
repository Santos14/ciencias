<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Nota_c extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Nota_m");
    }

    public function index() {
        $selectArea = $this->Select(array('id' => 'idarea', 'name' => 'idarea', 'class' => "form-control", 'table' => '_area where estado = 1', 'code' => '2', 'value' => 'idarea', 'option' => 'descripcion'));
        $selecNivel = $this->Select(array('id' => 'idnivel', 'name' => 'idnivel', 'class' => 'form-control', 'table' => 'nivel where estado = 1', 'code' => '', 'value' => 'idnivel', 'option' => 'descripcion'));
        $selecTurno = $this->Select(array('id' => 'idturno', 'name' => 'idturno', 'class' => 'form-control', 'table' => 'turno where estado = 1', 'code' => '', 'value' => 'idturno', 'option' => 'descripcion'));
        $padre = "Academica";
        $hijo = "Nota";
        $this->load->view('Academia/Nota/_Index', compact("datos", "selectArea", "selecNivel", "selecTurno","padre","hijo"));
    }

//    public function get_secciones() {
//        $datos = $this->Nota_m->get_secciones_this_idgrado($_REQUEST);
//        if ($datos['flag'] > 0) {
//            $resp = array("resp" => 1, "msg" => $datos['obj']);
//        } else {
//            $resp = array("resp" => 0, "msg" => "no se encontraron datos");
//        }
//        print_r(json_encode($resp));
//    }
    public function get_alumnos_matriculados() {
        $datos = $this->Nota_m->get_alumnos_matriculados_($_REQUEST);
        if ($datos['flag'] > 0) {
            $resp = array("resp" => 1, "msg" => $datos['obj']);
        } else {
            $resp = array("resp" => 0, "msg" => "no se encontraron alumnos matriculados");
        }
        print_r(json_encode($resp));
    }

    public function get_grados() {
        $datos = $this->Nota_m->get_grados_this_idnivel($_REQUEST);
        if ($datos['flag'] > 0) {
            $resp = array("resp" => 1, "msg" => $datos['obj']);
        } else {
            $resp = array("resp" => 0, "msg" => "no se encontraron datos");
        }
        print_r(json_encode($resp));
    }

    public function get_asignaturas() {
        $datos = $this->Nota_m->get_asignaturas_this_idarea($_REQUEST);
        if ($datos['flag'] > 0) {
            $resp = array("resp" => 1, "msg" => $datos['obj']);
        } else {
            $resp = array("resp" => 0, "msg" => "no se encontraron datos");
        }
        print_r(json_encode($resp));
    }

    public function get_criterios_and_secciones() {
        $datos = $this->Nota_m->get_criterios_this_asignatura($_REQUEST);
        if ($datos['flag'] > 0) {
            $data_secciones = $this->Nota_m->get_secciones($_REQUEST);
            if ($data_secciones['flag'] > 0) {
                $resp = array("resp" => 1, "msg" => array("criterios" => $datos['obj'], "secciones" => $data_secciones['obj']));
            } else {
                $resp = array("resp" => 0, "msg" => "Se encontraron criterios mas no secciones");
            }
        } else {
            $resp = array("resp" => 0, "msg" => "no se encontraron criterios");
        }
        print_r(json_encode($resp));
    }

    public function Guardar_notas() {

    }

}
