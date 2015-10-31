<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Turno_c extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Turno_m");
    }

    public function index()
    {

        $datos = $this->Turno_m->todos();


        $this->load->view('Mantenimientos/Turno/turno_v',compact("datos"));
    }



    public function nuevo()
    {

        if($this->input->post())
        {
            if($this->input->post("idturno") == "")
            {

                $r = $this->Turno_m->insertar();
                if($r == 1)
                {
                    echo    '<script>
                                alert("SE INSERTO CORRECTAMENTE");
                            </script>';
                }
                else
                {
                    echo    '<script>
                                alert("ERROR AL INSERTAR TURNO");
                            </script>';
                }
            }
            else
            {
                $r = $this->Turno_m->modificar($this->input->post("idturno"));
                if($r == 1)
                {
                    echo    '<script>
                                alert("SE MODIFICO CORRECTAMENTE");
                            </script>';
                }
                else
                {
                    echo    '<script>
                                alert("ERROR AL MODIFICAR TURNO");
                            </script>';
                }
            }
            redirect(base_url()."Turno_c","refresh");
        }
        else
        {
            $titulo = "Registrar Turno";
            $datos = "";

            $this->load->view("Mantenimientos/Turno/agregar_v.php",compact("datos","titulo"));
        }
    }


    public function modificar($id)
    {

        $datos = $this->Turno_m->traeruno($id);
        $titulo = "Modificar Turno";

        $this->load->view("Mantenimientos/Turno/agregar_v.php",compact("datos","titulo"));
    }

    public function eliminar($id)
    {

        $r = $this->Turno_m->eliminar($id);
        if($r == 1)
        {
            echo    '<script>
                        alert("SE ELIMINO CORRECTAMENTE");
                    </script>';
        }
        else
        {
            echo    '<script>
                        alert("ERROR AL ELIMINAR TURNO");
                    </script>';
        }
        redirect(base_url()."Turno_c","refresh");

    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */