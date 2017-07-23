<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PersonaController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Persona_model');
    }

	public function index()
	{
		
	}

    public function mostrar_ingreso()
    {
        $this->load->view("Persona/ingreso");    
    }

    public function autenticarse(){

    }

	public function listar()
	{   

	}
}
