<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Web3.0 - Configurar Sitio</title>
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
					<a class="navbar-brand" href="#">Web 3.0 - Configurar Sitio</a>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo base_url();?>Cliente/cerrar_sesion">Cerrar Sesión</a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>

	<br><br>

	<div class="container">
		<h1>Configuración del Nuevo Sitio</h1>
		<form method="POST" action="<?php echo base_url();?>Sitio/guarda_informacion_sitio">
			<input type="hidden" name="id_diseno" value="<?php echo $id_diseno;?>">
			<div class="form-group">
				<label for="">Titulo</label>
				<input type="text" class="form-control" name="titulo" placeholder="titulo">
			</div>
			<button type="submit" class="btn btn-default">Crear</button>
			<a class="btn btn-default" href="<?php echo base_url();?>Diseno/listar">Volver</a>
		</form>
	</div>
	<script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootbox.min.js"></script>
	<script>
		$(document).ready(function(){
			var redirect_msg = "<?php echo ($this->session->flashdata('redirect_msg')) ? $this->session->flashdata('redirect_msg') : '';?>";
			if(redirect_msg !== "") bootbox.alert(redirect_msg);
		});
	</script>
</body>
</html>
