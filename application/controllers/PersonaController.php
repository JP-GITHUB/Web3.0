<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PersonaController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_name');
    }

	public function index()
	{
		
	}

    public function mostrar_ingreso()
    {
        $this->load->view("Persona/ingreso");    
    }

    public function autenticarse(){
        $email = $this->input->post("email");
        $password = $this->input->post("password");
    }

	public function listar()
	{

	}
}
