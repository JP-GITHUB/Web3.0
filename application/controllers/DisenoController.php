<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DisenoController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Diseno_model', 'Cliente_model', 'Persona_model'));
    }

	public function index()
	{
		
	}

	public function listar_disenos()
	{
		$disenos = $this->Diseno_model->consultar_disenos();
		$this->load->view('diseno/listar', array("disenos" => $disenos));
	}
}
