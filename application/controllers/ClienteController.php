<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClienteController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model(array('Cliente_model', 'Persona_model', 'Sitio_model'));
    }

	public function index()
	{
		
	}

    public function mostrar_ingreso()
    {
        $this->load->view("cliente/ingreso");    
    }

    public function frm_registro_cliente()
    {
        $this->load->view("cliente/registro");    
    }

    public function autenticarse()
    {
        $email = $this->input->post("email");
        $clave = $this->input->post("clave");

        $info_cliente = $this->Cliente_model->consultar_cuenta($email);
        if($info_cliente->clave === $clave){
            unset($info_cliente->clave);
            $this->session->set_userdata('email_session', $email);
            $this->session->set_userdata('cliente_session', $info_cliente);
            redirect('Cliente/administracion');     
        }else{
            $this->session->set_flashdata('redirect_msg', 'Usuario o Contraseña son incorrectas.');
            redirect('Cliente/ingreso');
        }
    }

    public function guardar_datos_cliente()
    {
        $rut = $this->input->post("rut");
        $nombre = $this->input->post("nombre");
        $apellido_paterno = $this->input->post("apellido_paterno");
        $apellido_materno = $this->input->post("apellido_materno");
        $email = $this->input->post("email");
        $clave = $this->input->post("clave");

        #validar datos

        $respuesta = $this->Cliente_model->guardar_datos_cliente($rut, $nombre, $apellido_paterno, $apellido_materno, $email, $clave);
        if($respuesta){
            $this->session->set_flashdata('redirect_msg', 'El Cliente fue registrado exitosamente.');
            redirect('Cliente/ingreso');
        }else{
            $this->session->set_flashdata('redirect_msg', 'El Cliente no pudo ser registrado.');
            redirect('Cliente/registrarse');
        }
    }

    public function administracion()
    {
		if(!$this->session->email_session){
			$this->session->set_flashdata('redirect_msg', 'Para realizar la acción se debe estar autenticado.');
			redirect("/");
		}
        
        $id_cliente = $this->session->cliente_session->id_persona;
        $lista_sitios = $this->Sitio_model->listar_sitios($id_cliente);

        /*Muestra Lista de Sitios*/
        $this->load->view("cliente/administracion", array(
            "sitios" => $lista_sitios 
        ));
    }

    public function cerrar_sesion()
    {
        $this->session->unset_userdata('cliente_session');
        $this->session->unset_userdata('email_session');
        redirect('/');
    }
}
