<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClienteController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model(array('Cliente_model', 'Persona_model', 'Sitio_model'));
    }

	public function index()
	{
		
	}

    public function mostrar_ingreso()
    {
        $this->load->view("cliente/ingreso");    
    }

    public function autenticarse()
    {
        $email = $this->input->post("email");
        $password = $this->input->post("password");

        $info_cliente = $this->Cliente_model->verificar_cuenta($email);
        if($info_cliente->clave === $password){
            $this->session->set_userdata('email_session', $email);
            redirect('Cliente/administracion');     
        }else{
            redirect('/');
        }
    }

    public function administracion()
    {
        $sitios = $this->Sitio_model->listar();
        
        $this->load->view("cliente/administracion", array(
            "sitios" => $sitios 
        ));
    }

    public function cerrar_sesion()
    {
        $this->session->unset_userdata('email_session');
        redirect('/');
    }
}
