<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClienteController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Cliente_model', 'Persona_model'));
    }

	public function index()
	{
		
	}

    public function mostrar_ingreso()
    {
        $this->load->view("cliente/ingreso");    
    }

    public function autenticarse(){
        $email = $this->input->post("email");
        $password = $this->input->post("password");

        $info_cliente = $this->Cliente_model->verificar_cuenta($email);
        if($info_cliente->clave === $password){
            redirect('Cliente/administracion');            
        }else{
            echo "ERROR";
        }
    }

    public function administracion()
    {
        $this->load->view("cliente/administracion");
    }

	public function listar()
	{   

	}
}
