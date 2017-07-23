<?php

class Persona_model extends CI_Model {

    public $nombre;
    public $apellido_paterno;
    public $apellido_materno;
    public $email;
    private $clave;
    public $estado; 

    public function __construct()
    {
        parent::__construct();
    }

    public function obtener_informacion()
    {
        return $this->db->get_where('Persona', array('email' => $this->email, 'id_rol' => 2))->row();
    }

    public function registrar_persona()
    {

    }

    public function modificar_persona()
    {

    }

    public function suspender_persona()
    {
        
    }
}