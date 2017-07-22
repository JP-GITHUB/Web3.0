<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PersonaController extends CI_Controller {

	public function index()
	{
		
	}

    public function mostrar_ingreso()
    {
        $this->load->view("Persona/ingreso");    
    }

    public function autenticarse(){
        echo var_dump($this->input->post());
    }

	public function listar()
	{

	}
}
