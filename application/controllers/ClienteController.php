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
            unset($info_cliente->clave);
            $this->session->set_userdata('email_session', $email);
            $this->session->set_userdata('cliente_session', $info_cliente);
            redirect('Cliente/administracion');     
        }else{
            redirect('/');
        }
    }

    public function administracion()
    {
        $id_cliente = $this->session->cliente_session->id_persona;
        $sitios = $this->Sitio_model->listar($id_cliente);
        $this->load->view("cliente/administracion", array(
            "sitios" => $sitios 
        ));
    }

    public function cerrar_sesion()
    {
        $this->session->unset_userdata('cliente_session');
        $this->session->unset_userdata('email_session');
        redirect('/');
    }
}
