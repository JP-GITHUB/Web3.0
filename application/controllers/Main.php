<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}


	public function massively($usuario = null)
	{
		$data = array("titulo" => "Test");
		$this->load->view("templates/massively/index", $data);
	}

	public function story($usuario = null)
	{
		$data = array("titulo" => "Test");
		$this->load->view("templates/story/index", $data);
	}
}
