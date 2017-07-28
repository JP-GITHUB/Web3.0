<?php

class Diseno_model extends CI_Model {

    public $nombre;
    public $categoria;
    public $ruta;
    public $estado;

    public function __construct()
    {
        parent::__construct();
    }

    public function consultar_disenos()
    {
        return $this->db->get_where('diseno', array('estado' => 1))->result_array();
    }

    public function obtener($id_diseno)
    {
        return $this->db->get_where('diseno', array('id_diseno' => $id_diseno))->result_array();
    }

}