<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SitioController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Diseno_model', 'Cliente_model', 'Persona_model'));
    }

	public function index()
	{
		
	}

	public function crear($id_diseno)
	{
		$this->load->view('sitio/frm_crear', array("id_diseno" => $id_diseno));
	}

	public function guardar()
	{
		#$info_diseno = $this->Diseno_model->obtener(1);

		#echo var_dump($info_diseno);
	}
}
