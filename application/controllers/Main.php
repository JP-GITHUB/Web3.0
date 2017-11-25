<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

   public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Sitio_model'));
    }


	public function index()
	{
		$this->load->view('home');
	}


	public function massively($url = null)
	{
		$info_sitio = $this->Sitio_model->get_by_url($url);
		$data = array(
			"titulo" => isset($info_sitio->titulo) ? $info_sitio->titulo : "",
			"info" => $info_sitio
		);
		$this->load->view("templates/massively/index", $data);
	}

	public function story($url = null)
	{
		$info_sitio = $this->Sitio_model->get_by_url($url);
		$data = array("titulo" => $info_sitio->titulo, "info" => $info_sitio);
		$this->load->view("templates/story/index", $data);
	}
}
