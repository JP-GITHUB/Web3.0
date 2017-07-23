<?php

class Persona_model extends CI_Model {

    private $id;
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

}