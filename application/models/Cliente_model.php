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

    public function guardar_datos_cliente($rut, $nombre, $apellido_paterno, $apellido_materno, $email, $clave)
    {
        $data = array(
            "id_persona" => 0,
            "rut" => $rut,
            "nombre" => $nombre,
            "apellido_paterno" => $apellido_paterno,
            "apellido_materno" => $apellido_materno,
            "email" => $email,
            "clave" => $clave,
            "estado" => 1,
            "id_rol" => 2
        );

        try{
            $result = $this->db->insert('persona', $data);
        }catch(Exception $e){
            $result = false;
        }

        return $result;
    }

    public function modificar_cliente()
    {

    }

    public function suspender_cliente()
    {

    }

}