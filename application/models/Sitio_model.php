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

    public function listar_sitios($id_cliente = null)
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
        return $this->db->get_where('sitio', array('id_sitio' => $id_sitio))->result_array();
    }

    public function get_by_url($url)
    {
        return $this->db->get_where('sitio', array('url' => $url))->row();
    }

    public function guarda_informacion_sitio($titulo, $url, $id_diseno, $id_cliente)
    {  
        $data = array(
            "id_sitio" => 0,
            "titulo" => $titulo,
            "url" => $url,
            "estado" => 1,
            "id_diseno" => $id_diseno,
            "id_persona" => $id_cliente,
            "estado" => 1
        );

        return $this->db->insert('sitio', $data);
    }
    
    public function suspender_sitio($id_cliente, $id_sitio){
        
        $data = array(
           'estado' => "2"
        );
        
        $this->db->where('id_persona', $id_cliente);
        $this->db->where('id_sitio', $id_sitio);
        return $this->db->update('sitio', $data); 
    }

}