<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SitioController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Sitio_model', 'Diseno_model', 'Cliente_model', 'Persona_model'));
    }

	public function index()
	{

	}

	public function crear($id_diseno)
	{
		if(!$this->session->email_session){
			$this->session->set_flashdata('redirect_msg', 'Para realizar la acción se debe estar autenticado.');
			redirect("/");
		}

		$this->load->view('sitio/frm_crear', array("id_diseno" => $id_diseno));
	}

	public function guardar()
	{
		$session = $this->session->email_session;
		if($session){
			$cuenta = $this->Cliente_model->verificar_cuenta($session);
			if($cuenta->id_rol === "2"){
				$id_cliente = $cuenta->id_persona;
				$id_diseno = $this->input->post("id_diseno");
				$titulo = $this->input->post("titulo");

				$estado_insert = $this->Sitio_model->guardar($titulo, '', $id_diseno, $id_cliente);
				if($estado_insert){
					redirect("Cliente/administracion");
				}else{
					echo "Err";
				}
			}
		}
	}
}
