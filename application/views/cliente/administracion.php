<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Web3.0 - Administración Clientes</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
</head>
<body id="Web 3.0" data-spy="scroll" data-target=".navbar" data-offset="60">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="myNavbar">
					<a class="navbar-brand" href="#">Web 3.0 - Administración</a>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo base_url();?>Cliente/cerrar_sesion">Cerrar Sesión</a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>

	<br><br>

	<div class="container">
		<ul class="nav nav-pills botonera-adm">
			<li class="active"><a href="<?php echo base_url();?>Diseno/listar_disenos">Crear Sitio Web</a></li>
		</ul>
		<br>
		<div class="sect-listado-sitios row">
			<?php foreach($sitios as $sitio):?>
				<div class="panel panel-default clearfix">
					<div class="panel-heading">
						<h3 class="panel-title"><?php echo $sitio['titulo']; ?></h3>
					</div>
					<div class="panel-body">
						<img src="<?php echo base_url();?>assets/images/<?php echo $sitio['ruta']; ?>.jpg" class="img-responsive">
					</div>

					<div class="panel-footer">
						<a href="<?php echo base_url();?>Main/<?php echo $sitio['ruta']; ?>/<?php echo $sitio['id_sitio']; ?>" target="_blank" class="btn btn-primary">Ver Sitio</a>
					</div>
				</div>
			<?php endforeach;?>
		</div>
	</div>
	<script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</body>
</html>
