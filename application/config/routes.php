<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['Diseno/listar_disenos'] = "DisenoController/listar_disenos";

$route['Cliente/ingreso'] = "ClienteController/mostrar_ingreso";
$route['Cliente/registrarse'] = "ClienteController/frm_registro_cliente";
$route['Cliente/guardar_datos_cliente'] = "ClienteController/guardar_datos_cliente";


$route['Cliente/cerrar_sesion'] = "ClienteController/cerrar_sesion";
$route['Cliente/autenticarse'] = "ClienteController/autenticarse";
$route['Cliente/administracion'] = "ClienteController/administracion";

$route['Sitio/configuracion_diseno/(:any)'] = "SitioController/muestra_frm_configuraciones_disenos/$1";
$route['Sitio/guarda_informacion_sitio'] = "SitioController/guarda_informacion_sitio";
$route['Sitio/suspender_sitio/(:any)'] = "SitioController/suspender_sitio/$1";

/*Templates*/
$route['Main/massively/(:any)'] = "Main/massively/$1";


$route['Administrador/ingreso'] = "AdministradorController/mostrar_ingreso";
$route['Administrador/cerrar_sesion'] = "AdministradorController/cerrar_sesion";
$route['Administrador/guardar_datos_admin'] = "AdministradorController/guardar_datos_admin";
$route['Administrador/autenticarse'] = "AdministradorController/autenticarse";
$route['Administrador/administracion'] = "AdministradorController/administracion";
$route['Administrador/crear'] = "AdministradorController/crear";
$route['Administrador/listar'] = "AdministradorController/listar";
$route['Administrador/validar'] = "AdministradorController/validar";
$route['Administrador/editar/(:any)'] = "AdministradorController/editar/$1";
$route['Administrador/editar_datos_admin'] = "AdministradorController/editar_datos_admin";
$route['Administrador/cambiar_status_diseno/(:any)/(:any)'] = "AdministradorController/cambiar_status_diseno/$1/$2";
$route['Administrador/cambiar_status_persona/(:any)/(:any)'] = "AdministradorController/cambiar_status_persona/$1/$2";
$route['Administrador/listar_diseno'] = "AdministradorController/listar_diseno";

