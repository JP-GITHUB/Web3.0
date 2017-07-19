<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DisenoController extends CI_Controller {

	public function index()
	{
		
	}

	public function listar()
	{
		$disenos = array(
			"diseno1" => array("name" => "name_diseno1"),
			"diseno2" => array("name" => "name_diseno2"),
			"diseno3" => array("name" => "name_diseno3"),
		);
		$this->load->view('diseno/listar', array("disenos" => $disenos));
	}
}
