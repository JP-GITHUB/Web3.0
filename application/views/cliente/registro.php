<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Web3.0 - Registro Clientes</title>
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
					<a class="navbar-brand" href="#">Web 3.0</a>
				</div>
			</div>
		</div>
	</nav>

	<br><br>

	<div class="container">
		<form method="POST" action="<?php echo base_url();?>Cliente/guardar_datos_cliente">
			<h1>Registro Clientes</h1>
			<div class="form-group">
				<label for="">Rut</label>
				<input type="text" name="rut" class="form-control" id="" placeholder="Rut" required>
			</div>
			<div class="form-group">
				<label for="">Nombre</label>
				<input type="text" name="nombre" class="form-control" id="" placeholder="Nombre" required>
			</div>
			<div class="form-group">
				<label for="">Apellido Paterno</label>
				<input type="text" name="apellido_paterno" class="form-control" id="" placeholder="Apellido Paterno" required>
			</div>
			<div class="form-group">
				<label for="">Apellido Materno</label>
				<input type="text" name="apellido_materno" class="form-control" id="" placeholder="Apellido Materno" required>
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<input type="email" name="email" class="form-control" id="" placeholder="Email" required>
			</div>
			<div class="form-group">
				<label for="">Clave</label>
				<input type="password" name="clave" class="form-control" id="" placeholder="clave" required>
			</div>
			<button type="submit" class="btn btn-default">Registrar</button>
			<a href="<?php echo base_url();?>" class="btn btn-default">Volver</a>
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
