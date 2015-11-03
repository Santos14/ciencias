<?php

class Nota_m extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_secciones_this_idgrado($_P) {
        $this->db->where('estado', '1');
        $result = $this->db->get_where('seccion', array("idgrado" => $_P['idgrado']));
        $data = $result->result();
        return array('flag' => count($data), 'obj' => $data);
    }

    public function get_grados_this_idnivel($_P) {
        $this->db->where('estado', '1');
        $result = $this->db->get_where('grado', array("idnivel" => $_P['idnivel']));
        $data = $result->result();
        return array('flag' => count($data), 'obj' => $data);
    }

    public function get_alumnos_matriculados_($_P) {
        $this->db->where('estado', 1);
        $result = $this->db->get_where('matricula', array("idseccion" => $_P['idseccion'], "idgrado" => $_P['idgrado'], "idturno" => $_REQUEST['idturno']));
        $data = $result->result();
        $alumno = Array();
        foreach ($data as $key => $value) {
            $result2 = $this->db->get_where('alumno', array("idalumno" => $value->idalumno));
            $alumno[$key] = $result2->row();
            $alumno[$key]->idmatricula = $value;
        }
        return array('flag' => count($alumno), 'obj' => $alumno);
    }

    public function get_secciones($_P) {
       // session_start();
        // print_r($_P);
        //print_r($_SESSION['idpersonal']);
        $result = $this->db->get_where('docente_x_seccion', array("idasignatura" => $_P['idasignatura'], "idgrado" => $_P['idgrado'], "idpersonal" => $_SESSION['idpersonal']));
        $data = $result->result();
        $secciones = Array();
//       echo "<pre>"; print_r($data[0]);exit;
        foreach ($data as $value) {
            $result2 = $this->db->get_where('seccion', array("idseccion" => $value->idseccion));
            $secciones[] = $result2->row();
        }

        return array('flag' => count($secciones), 'obj' => $secciones);
    }

    /*    public function get_secciones_this_grado($_P) {
      $this->db->where('estado', '1');
      $result = $this->db->get_where('seccion', array("idgrado" => $_P['idgrado']));
      $data = $result->result();
      return array('flag' => count($data), 'obj' => $data);
      }
     */

    public function get_asignaturas_this_idarea($_P) {
        $this->db->where('estado', '1');
        $result = $this->db->get_where('asignatura', array("idarea" => $_P['idarea']));
        $data = $result->result();
        return array('flag' => count($data), 'obj' => $data);
    }

    public function get_criterios_this_asignatura($_P) {
        $this->db->where('estado', '1');
        $result = $this->db->get_where('criterio', array("idasignatura" => $_P['idasignatura']));
        $data = $result->result();
        return array('flag' => count($data), 'obj' => $data);
    }

    public function traeruno($id) {
        $result = $this->db->get_where('anio_lectivo', array("idanio_lectivo" => $id));
        return $result->row();
    }

    public function insertar() {

        $datos = array(
            "descripcion" => $this->input->post("descripcion"), "estado" => 1
        );

        $r = $this->db->insert("anio_lectivo", $datos);
        if ($r) {
            return 1;
        } else {
            return 0;
        }
    }

    public function modificar($id) {
        $datos = array(
            "descripcion" => $this->input->post("descripcion")
        );

        $this->db->where("idanio_lectivo", $id);
        $r = $this->db->update("anio_lectivo", $datos);

        if ($r) {
            return 1;
        } else {
            return 0;
        }
    }

    public function eliminar($id) {

        $datos = array(
            "estado" => "0"
        );

        $this->db->where("idanio_lectivo", $id);
        $r = $this->db->update("anio_lectivo", $datos);

        if ($r) {
            return 1;
        } else {
            return 0;
        }
        // $this->db->where("idanio_lectivo",$id);
        // $this->db->delete("usuario");
    }

}

?>