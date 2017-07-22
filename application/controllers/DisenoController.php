<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DisenoController extends CI_Controller {

	public function index()
	{
		
	}

	public function listar()
	{
		$disenos = array(
			"diseno1" => array("name" => "name_diseño1"),
			"diseno2" => array("name" => "name_diseño2"),
			"diseno3" => array("name" => "name_diseño3"),
		);
		$this->load->view('diseno/listar', array("disenos" => $disenos));
	}
}
