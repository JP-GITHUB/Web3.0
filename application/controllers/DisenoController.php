<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DisenoController extends CI_Controller {

	public function index()
	{
		
	}

	public function listar()
	{
		$disenos = array(
			"diseno1" => array("id" => "01", "name" => "name_diseño1"),
		);
		$this->load->view('diseno/listar', array("disenos" => $disenos));
	}
}
