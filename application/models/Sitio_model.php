<?php

class Sitio_model extends CI_Model {

    public $titulo;
    public $url;
    public $estado;
    public $id_diseno;
    public $id_cliente;

    public function __construct()
    {
        parent::__construct();
    }

    public function listar($id_cliente = null)
    {
        $query = "
            SELECT 
                *
            FROM
                sitio,
                diseno
            WHERE
                sitio.id_diseno = diseno.id_diseno
                    AND sitio.id_persona = ?
                    AND sitio.estado = 1";

        return $this->db->query($query, array($id_cliente))->result_array();
    }

    public function obtener($id_diseno)
    {
        return $this->db->get_where('Sitio', array('id_sitio' => $id_sitio))->result_array();
    }

    public function guardar($titulo, $url = "", $id_diseno, $id_cliente)
    {  
        $data = array(
            "id_sitio" => 0,
            "titulo" => $titulo,
            "url" => $url,
            "estado" => 1,
            "id_diseno" => $id_diseno,
            "id_persona" => $id_cliente
        );

        return $this->db->insert('Sitio', $data);
    }

}