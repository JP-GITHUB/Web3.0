<?php

class Cliente_model extends CI_Model {

    public $fecha_ingreso;

    public function __construct()
    {
        parent::__construct();
    }

    public function consultar_cuenta($email){
        $this->Persona_model->email = $email;
        return $this->Persona_model->obtener_informacion();
    }

    public function registrar_cliente()
    {

    }

    public function modificar_cliente()
    {

    }

    public function suspender_cliente()
    {

    }

}