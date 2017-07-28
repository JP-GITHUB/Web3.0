<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SitioController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Sitio_model', 'Cliente_model'));
    }

	public function index()
	{

	}

	public function muestra_frm_configuraciones_disenos($id_diseno)
	{
		if(!$this->session->email_session){
			$this->session->set_flashdata('redirect_msg', 'Para realizar la acción se debe estar autenticado.');
			redirect("/");
		}

		$this->load->view('sitio/frm_config_diseno', array("id_diseno" => $id_diseno));
	}

	public function guarda_informacion_sitio()
	{
		$session = $this->session->email_session;
		if($session){
			$cuenta = $this->Cliente_model->consultar_cuenta($session);
			if($cuenta->id_rol === "2"){
				$id_cliente = $cuenta->id_persona;
				$id_diseno = $this->input->post("id_diseno");
				$titulo = $this->input->post("titulo");

				if(trim($titulo) === ""){
					$this->session->set_flashdata('redirect_msg', 'Campo titulo es obligatorio.');
					redirect("Sitio/configuracion_diseno/" . $id_diseno);
				}
			
				$estado_insert = $this->Sitio_model->guarda_informacion_sitio($titulo, '', $id_diseno, $id_cliente);
				if($estado_insert){
					redirect("Cliente/administracion");
				}else{
					echo "Err";
				}
			}
		}
	}
}
